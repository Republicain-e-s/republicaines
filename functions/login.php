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
  echo $_POST["email"]."<br />";
  $pwdHash = hash("md5", $_POST["pwd"], false);
  $req = $bdd->prepare('SELECT * FROM accounts WHERE email = ?');
  $req->execute(array($_POST["email"]));
  echo "Query data base... <br />";
  $donnees = $req->fetch();
  if ($donnees == NULL)
  {
    echo "Login incorrect <br />";
    echo $donnees["email"]."<br />";
  }
  else if ($donnees["password"] == $pwdHash)
  {
    $_SESSION["connected"] = true;
    $_SESSION["pseudo"] = $donnees["pseudo"];
    $_SESSION["email"] = $donnees["email"];
    $_SESSION["id"] = $donnees["id"];
    echo "Connected";
  }
  else
  {
    echo "Password incorrect <br />";
    echo $donnees["password"]." == ".$pwdHash."    ".$_POST["pwd"]."<br />";
  }
}

die('<meta http-equiv="refresh" content="0.01;URL=' . $_SESSION["lastLocation"] . '">');

?>
