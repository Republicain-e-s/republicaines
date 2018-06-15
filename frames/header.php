<header id="top">
  <div id="linksToLog">
    <?php if ($_SESSION["connected"])
    { ?>
      <a href="myAccount.php">Mon compte</a>
      <a href="functions/disconnect.php">Se déconnecter</a>
    <?php }
    else
    { ?>
      <a href="login.php">Se connecter</a>
      <a href="signup.php">S’inscrire</a>
    <?php } ?>
  </div>
  <h1><a href="index.php" id="backHome">Républicain.e.s</a></h1>
</header>
