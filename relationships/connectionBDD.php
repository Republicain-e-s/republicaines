<?php
try
{
  $bdd = new PDO('mysql:host=localhost;dbname=db738807264;charset=utf8', 'dbo738807264', '_Pom 2 pin');
}
catch (Exception $e)
{
  die('Erreur : ' . $e->getMessage());
}
?>
