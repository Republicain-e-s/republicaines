<?php
/*try
{
  $bdd = new PDO('mysqli:db738807264.db.1and1.com;dbname=db738807264;charset=utf8', 'dbo738807264', '_Pom 2 pin', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
  echo "Connection failed.";
  die('Erreur : ' . $e->getMessage());
}*/
?>
<?php
$host_name = 'db738807264.db.1and1.com';
$database = 'db738807264';
$user_name = 'dbo738807264';
$password = '_Pom 2 pin';

$bdd = null;
try {
  $bdd = new PDO("mysql:host=$host_name; dbname=$database;", $user_name, $password);
} catch (PDOException $e) {
  echo "Erreur!: " . $e->getMessage() . "<br/>";
  die();
}
?>
