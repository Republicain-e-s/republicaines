<?php

if (isset($_COOKIE["colors"]))
{
  if ($_COOKIE["colors"] == "light")
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
    nav a:hover
    {
      background-color: rgba(49, 49, 49, 0.05);
    }
    header #linksToLog a
    {
      color: #313131;
      background-color: #EFEFEF;
    }
    footer
    {
      background-color: #EFEFEF;
    }
    footer p
    {
      color: #313131;
    }
    #cookie-law
    {
      background-color: #EFEFEF;
    }
    </style>
    <?php


    $colors = "Noir";
  }
  else
  {
    ?>
    <style>
    nav
    {
      background-color: #4B386E;
    }
    nav a
    {
      color: #FFFFFF;
    }
    nav a:hover
    {
      background-color: rgba(255, 255, 255, 0.05);
    }
    header #linksToLog a
    {
      color: #FFFFFF;
      background-color: #4B386E;
    }
    footer
    {
      background-color: #4B386E;
    }
    footer p
    {
      color: #FFFFFF;
    }
    #cookie-law
    {
      background-color: #4B386E;
    }
    </style>
    <?php


    $colors = "Blanc";
  }
}
else
{
  ?>
  <style>
  nav
  {
    background-color: #4B386E;
  }
  nav a
  {
    color: #FFFFFF;
  }
  nav a:hover
  {
    background-color: rgba(255, 255, 255, 0.05);
  }
  header #linksToLog a
  {
    color: #FFFFFF;
    background-color: #4B386E;
  }
  footer
  {
    background-color: #4B386E;
  }
  footer p
  {
    color: #FFFFFF;
  }
  #cookie-law
  {
    background-color: #4B386E;
  }
  </style>
  <?php
  $colors = "Blanc";
}



?>
