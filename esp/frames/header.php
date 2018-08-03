<header id="top">
  <a href="index.php" id="backHome"><img src="pictures/logoRep.png" alt="Le logo de Républicain.e.s"/></a>
  <div id="linksToLog">
    <?php if ($_SESSION["connected"])
    { ?>
      <a href="myAccount.php">Mon compte</a>
    <?php }
    else
    { ?>
      <a href="login.php">Se connecter</a>
      <a href="signup.php">S’inscrire</a>
    <?php } ?>
  </div>
</header>
