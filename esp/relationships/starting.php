<?php
session_start();

if (!isset($_SESSION["connected"]))
{
  $_SESSION["connected"] = false;
}
if (!isset($_SESSION["location"]))
{
  $_SESSION["location"] = "/";
}

if (isset($_COOKIE["cookieAccepte"]))
{
  $_SESSION["cookieAccepte"] = true;
}
else
{
    $_SESSION["cookieAccepte"] = false;
}

$_SESSION["lastLocation"] = $_SESSION["location"];
$_SESSION["urlBase"] = "http://www.republicain-e-s.fr/";

if ($_SESSION["cookieAccepte"])
{
  setcookie("colors", "black", time() + 7*24*3600);
  setcookie("languages", "french", time() + 7*24*3600);
}

?>
