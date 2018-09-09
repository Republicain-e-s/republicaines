<?php

function listVideo()
{
  require 'models/frontend.php';

  adapteColorTheme();

  require 'views/frontend/videoList.php';
}

function signup()
{
  require 'models/frontend.php';

  adapteColorTheme();

  require 'views/frontend/signup.php';

}
