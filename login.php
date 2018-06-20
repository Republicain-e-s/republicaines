<?php include 'relationships/starting.php'; ?>

<?php $_SESSION["location"] = "http://www.republicain-e-s.fr/login.php" ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="styles/styleIndex.css" />
    <link rel="stylesheet" href="styles/navStyle.css" />
    <link rel="stylesheet" href="styles/headerStyle.css" />
    <?php include 'functions/colors.php'; ?>
    <title>Login - Républicain.e.s</title>
  </head>

  <?php include 'analysis/matamo.php'; ?>

  <body>
    <script src="js/bandeauCookie.js" ></script>
    <?php include 'frames/header.php'; ?>

    <?php include 'frames/underHead.php'; ?>

    <?php if ($_SESSION["error"] == "Login") { ?>
      <p class="error">Indentifiant incorrect.</p>
    <?php } else if ($_SESSION["error"] == "Password") { ?>
      <p class="error">Mot de passe incorrect.</p>
    <?php } ?>

    <form method="post" action="functions/login.php">
      <label for="email">Email</label> :
      <input type="email" name="email" id="email" required/>

      <label for="pwd">Mot de passe</label> :
      <input type="password" name="pwd" id="pwd" required/>

      <input type="submit" value="Se connecter" />
    </form>

    <?php include 'frames/footer.php'; ?>
  </body>
</html>
