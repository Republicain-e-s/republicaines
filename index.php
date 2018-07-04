<?php include 'relationships/starting.php'; ?>

<?php $_SESSION["location"] = "" ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="styles/styleIndex.css" />
    <link rel="stylesheet" href="styles/navStyle.css" />
    <link rel="stylesheet" href="styles/headerStyle.css" />
    <link rel="stylesheet" href="styles/footerStyle.css" />
    <link rel="stylesheet" href="styles/bannerCookieStyle.css" />
    <?php include 'functions/colors.php'; ?>
    <title>Accueil - Républicain.e.s</title>
  </head>

  <?php include 'analysis/matamo.php'; ?>

  <body>

    <?php include 'frames/header.php'; ?>

    <?php include 'frames/underHead.php'; ?>

    <?php include 'frames/footer.php'; ?>

    <?php include 'frames/cookieBanner.php'; ?>
  </body>
</html>
