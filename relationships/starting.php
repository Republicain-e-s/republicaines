<?php
session_start();

if (!isset($_SESSION["connected"]))
{
  echo "Reseting Session <br />";
  $_SESSION["connected"] = false;
}
if (!isset($_SESSION["location"]))
{
  $_SESSION["location"] = "http://www.republicain-e-s.fr";
}

$_SESSION["lastLocation"] = $_SESSION["location"];


setcookie("colors", "red", time() + 7*24*3600, null, null, false, true);
setcookie("languages", "french", time() + 7*24*3600, null, null, false, true);

?>
