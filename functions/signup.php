<?php include '../relationships/starting.php'; ?>

<?php include '../relationships/connectionBDD.php'; ?>

<?php
if (isset($_POST["email"]) AND isset($_POST["pwd"]) AND isset($_POST["pseudo"]) AND isset($_POST["news"]))
{
  $req = $bdd->prepare('INSERT INTO accounts(email, password, pseudo, news, rank) VALUES(:email, :password, :pseudo, :news, "Member")');
  $req->execute(array(
    'email' => $_POST["email"],
    'password' => $_POST["pwd"],
    'pseudo' => $_POST["pseudo"],
    'news' => $_POST["news"]
  ));
  echo "Account created.";
}
?>
