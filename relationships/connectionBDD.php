<?php
try
{
  $bdd = new PDO('mysql:localhost;dbname=republicaines;charset=utf8', 'root', '');
}
catch (Exception $e)
{
  die('Erreur : ' . $e->getMessage());
}
?>
