<?php session_start(); ?>

<?php include '../relationships/connectionBDD.php'; ?>

<?php
if (!(isset($_POST["email"]) AND isset($_POST["pwd"])) AND (isset($_SESSION["email"]) AND isset($_SESSION["pwd"])))
{
  $_POST["email"] = $_SESSION["email"];
  $_POST["pwd"] = $_SESSION["pwd"];
  unset($_SESSION["email"]);
  unset($_SESSION["pwd"]);
  echo "Transformaing... <br />";
}
if (isset($_POST["email"]) AND isset($_POST["pwd"]))
{
  $pwdHash = hash("md5", $_POST["pwd"], false);
  $req = $bdd->prepare('SELECT * FROM accounts WHERE email = ?');
  $req->execute(array($_POST["email"]));
  $donnees = $req->fetch();
  if ($donnees == NULL)
  {
    $_SESSION["error"] = "Login";
    die('<meta http-equiv="refresh" content="0.01;URL=http://republicain-e-s.fr/login.php">');
  }
  else if ($donnees["password"] == $pwdHash)
  {
    $_SESSION["connected"] = true;
    $_SESSION["pseudo"] = $donnees["pseudo"];
    $_SESSION["email"] = $donnees["email"];
    $_SESSION["id"] = $donnees["id"];
    $_SESSION["error"] = NULL;
  }
  else
  {
    $_SESSION["error"] = "Password";
    die('<meta http-equiv="refresh" content="0.01;URL=http://republicain-e-s.fr/login.php">');
  }
}

die('<meta http-equiv="refresh" content="0.01;URL=' . $_SESSION["lastLocation"] . '">');

?>
