<?php session_start(); ?>

<?php include '../relationships/connectionBDD.php'; ?>

<?php
if (isset($_POST["email"]) AND isset($_POST["pwd"]) AND isset($_POST["pseudo"]))
{
  $_POST["email"] = strtolower($_POST["email"]);
  $pwdHash = hash("md5", $_POST["pwd"], false);
  if ($_POST["pseudo"] == '')
  {
    $_POST["pseudo"] = preg_replace("^(.+)@", "$1", $_POST["pseudo"]);
  }
  $req = $bdd->prepare('INSERT INTO accounts(id, email, password, pseudo, news, rank) VALUES(NULL, :email, :password, :pseudo, 0, "Member")');
  $req->execute(array(
    'email' => $_POST["email"],
    'password' => $pwdHash,
    'pseudo' => $_POST["pseudo"],
  ));
  $_SESSION["email"] = $_POST["email"];
  $_SESSION["pwd"] = $_POST["pwd"];

  $req->closeCursor();

  $_SESSION["lastLocation"] = "http://www.republicain-e-s.fr/myAccount.php";

  die('<meta http-equiv="refresh" content="0.01;URL=http://www.republicain-e-s.fr/functions/login.php">');
}
?>
