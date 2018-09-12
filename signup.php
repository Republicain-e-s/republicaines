<?php
require 'controllers/frontend.php';
require 'controllers/backend.php';

if (isset($_GET['a']) && isset($_GET['s'])) {
  if ($_GET['a'] == 'p' && $_GET['s'] == 's') {
    signup();
    /*$_SESSION['id'] = 7;
    header('Location: /signup?a=t&s=s');*/
  } elseif ($_GET['a'] == 't' && $_GET['s'] == 's') {
    signupDisplayNext();
  }
} else {
  signupDisplay();
}
