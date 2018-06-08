<?php include '../relationships/starting.php'; ?>

<?php include '../relationships/connectionBDD.php'; ?>

<?php
if (!(isset($_POST["email"]) AND isset($_POST["pwd"])) AND (isset($_SESSION["email"]) AND isset($_SESSION["pwd"])))
{
  $_POST["email"] = $_SESSION["email"];
  $_POST["pwd"] = $_SESSION["pwd"];
  unset($_SESSION["email"]);
  unset($_SESSION["pwd"]);
}
if (isset($_POST["email"]) AND isset($_POST["pwd"]))
{
  $pwdHash = password_hash($_POST["pwd"], PASSWORD_DEFAULT);
  $req = $bdd->prepare('SELECT * FROM accounts WHERE email = ?');
  $req->execute(array($_POST["email"]));
  $donnees = $req->fetch();
  if ($donees == NULL)
  {

  }
  else if ($donnees["password"] == $pwdHash)
  {
    $_SESSION["connected"] = true;
    $_SESSION["pseudo"] = $donnees["pseudo"];
    $_SESSION["email"] = $donnees["email"];
    $_SESSION["id"] = $donnees["id"];
    echo "Connected";
  }
}

die('<meta http-equiv="refresh" content="0.01;URL=' . $_SESSION["lastLocation"] . '">');

?>
