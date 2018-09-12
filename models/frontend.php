<?php
session_start();

if (isset($_COOKIE['accept'])) {
  $_SESSION['cookieAccepte'] = true;
}


function adapteColorTheme()
{
  if (isset($_SESSION['cookieAccepte']) AND isset($_COOKIE['colorTheme'])) {
    $_SESSION['colorTheme'] = $_COOKIE['colorTheme'];
  } else {
    $_SESSION['colorTheme'] = 'light';
  }
}
