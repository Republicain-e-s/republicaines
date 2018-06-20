<?php

if (isset($_COOKIE["colors"]))
{
  if ($_COOKIE["colors"] == "red")
  {
    ?>
    <style>
    nav
    {
      background-color: #EBA4A4;
    }
    nav a
    {
      color: #FFFFFF;
    }
    header #linksToLog a
    {
      color: #FFFFFF;
      background-color: #EBA4A4;
    }
    </style>
    <?php
  }
  else if ($_COOKIE["colors"] == "gris")
  {
    ?>
    <style>
    nav
    {
      background-color: #EFEFEF;
    }
    nav a
    {
      color: #313131;
    }
    header #linksToLog a
    {
      color: #313131;
      background-color: #EFEFEF;
    }
    </style>
    <?php
  }
}

?>
