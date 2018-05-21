<?php
session_start();

if (!isset($SESSION["connected"]))
{
  $SESSION["connected"] = false;
}
?>
