<?php
session_start();

$SESSION["lastLocation"] = $SESSION["location"];

if (!isset($SESSION["connected"]))
{
  $SESSION["connected"] = false;
}
if (!isset($SESSION["location"]))
{
  $SESSION["location"] = "http://www.republicain-e-s.fr";
}
?>
