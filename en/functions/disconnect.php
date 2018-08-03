<?php session_start(); ?>

<?php
$_SESSION["connected"] = false;
unset($_SESSION["pseudo"]);
unset($_SESSION["email"]);
unset($_SESSION["id"]);

die('<meta http-equiv="refresh" content="0.01;URL=' . $_SESSION["location"] . '">');
?>
