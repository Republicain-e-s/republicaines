<?php
session_start();

if (!isset($_SESSION["connected"]))
{
  $_SESSION["connected"] = false;
}
if (!isset($_SESSION["location"]))
{
  $_SESSION["location"] = "http://www.republicain-e-s.fr";
}

$_SESSION["lastLocation"] = $_SESSION["location"];
?>
