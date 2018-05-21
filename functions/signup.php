<?php include '../relationships/starting.php'; ?>

<?php include '../relationships/connectionBDD.php'; ?>

<?php
if (isset($_POST["email"]) AND isset($_POST["pwd"]) AND isset($_POST["pseudo"]) AND isset($_POST["news"]))
{
  $pwdHash = password_hash($_POST["pwd"], PASSWORD_DEFAULT);
  $req = $bdd->prepare('INSERT INTO accounts(id, email, password, pseudo, news, rank) VALUES(NULL, :email, :password, :pseudo, :news, "Member")');
  $req->execute(array(
    'email' => $_POST["email"],
    'password' => $pwdHash,
    'pseudo' => $_POST["pseudo"],
    'news' => $_POST["news"]
  ));
  header("Location: http://www.republicain-e-s.fr/login.php");
  exit();
}
?>
