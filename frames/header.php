<header id="top">
  <h1><a href="index.php" id="backHome">Républicain.e.s</a></h1>
  <?php if ($SESSION["connected"])
  { ?>
  <p class="linkToLog">Mon compte</p>
  <p class="linkToLog">Se déconnecter</p>
  <?php }
  else
  { ?>
  <a href="login.php" class="linkToLog">Se connecter</a>
  <a href="signup.php" class="linkToLog">S’inscrire</a>
  <?php } ?>
</header>
