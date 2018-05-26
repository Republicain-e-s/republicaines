<?php include '../relationships/starting.php'; ?>

<?php include '../relationships/connectionBDD.php'; ?>

<?php
if (isset($_POST["email"]) AND isset($_POST["pwd"]) AND isset($_POST["pseudo"]))
{
  $pwdHash = password_hash($_POST["pwd"], PASSWORD_DEFAULT);
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
  $SESSION["email"] = $_POST["email"];
  $SESSION["pwd"] = $_POST["pwd"];

  echo "Redirection to http://www.republicain-e-s.fr/functions/login.php";
  header('Location: http://www.republicain-e-s.fr/functions/login.php');
  exit;
}
?>
