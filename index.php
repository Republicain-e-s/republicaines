<?php include 'relationships/starting.php'; ?>

<?php $_SESSION["location"] = "http://www.republicain-e-s.fr" ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="styles/styleIndex.css" />
    <link rel="stylesheet" href="styles/navStyle.css" />
    <link rel="stylesheet" href="styles/headerStyle.css" />
    <?php include 'functions/colors.php'; ?>
    <title>Accueil - Républicain.e.s</title>
  </head>

  <?php include 'analysis/matamo.php'; ?>

  <body>
    <script type="text/javascript" src="js/bandeauCookie.js" ></script>

    <?php include 'frames/header.php'; ?>

    <?php include 'frames/underHead.php'; ?>

    <?php include 'frames/footer.php'; ?>
  </body>
</html>
