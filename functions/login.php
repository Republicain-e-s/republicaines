<?php include '../relationships/starting.php'; ?>

<?php include '../relationships/connectionBDD.php'; ?>

<?php
/*if (!(isset($_POST["email"]) AND isset($_POST["pwd"])) AND (isset($SESSION["email"]) AND isset($SESSION["pwd"])))
{
  $_POST["email"] = $SESSION["email"];
  $_POST["pwd"] = $SESSION["pwd"];
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
    $SESSION["connected"] = true;
    $SESSION["pseudo"] = $donnees["pseudo"];
    $SESSION["email"] = $donnees["email"];
    $SESSION["id"] = $donnees["id"];
    echo "Connected";
  }
}*/

echo "Test";

echo 'Redirection to ' . $SESSION["lastLocation"];

/*header('Location: ' . $SESSION["lastLocation"]);
exit;*/
?>
