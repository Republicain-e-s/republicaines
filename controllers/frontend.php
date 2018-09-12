<?php

function listVideo()
{
  require 'models/frontend.php';

  adapteColorTheme();

  require 'views/frontend/videoList.php';
}

function signupDisplay()
{
  require 'models/frontend.php';

  adapteColorTheme();

  require 'views/frontend/signup.php';

}

function signupDisplayNext()
{
  require 'models/frontend.php';

  adapteColorTheme();

  require 'views/frontend/signupFinish.php';
}

function faireunprocespourdiffamationDisplay()
{
  require 'models/frontend.php';

  adapteColorTheme();

  require 'views/frontend/faireunprocespourdiffamation.php';
}

function error404Display()
{
  require 'models/frontend.php';

  adapteColorTheme();

  require 'views/frontend/error404.php';
}
