<?php include 'relationships/starting.php'; ?>

<?php $_SESSION["location"] = "sendMail.php" ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../styles/styleIndex.css" />
    <link rel="stylesheet" href="../styles/navStyle.css" />
    <link rel="stylesheet" href="../styles/headerStyle.css" />
    <link rel="stylesheet" href="../styles/footerStyle.css" />
    <link rel="stylesheet" href="../styles/bannerCookieStyle.css" />
    <?php include 'functions/colors.php'; ?>
    <title>Accueil - Républicain.e.s</title>
  </head>

  <?php include '../analysis/matamo.php'; ?>

  <body>
    <?php include 'frames/header.php'; ?>

    <?php include 'frames/underHead.php'; ?>

    <form method="post" action="mails/send.php">
      <label for="by">De : </label>
      <input type="email" id="by" name="by" required />
      <label for="na"> alias </label>
      <input type="text" id="na" name="na" required />

      <label for="to">A : </label>
      <input type="email" id="to" name="to" required />
      <label for="subject">Sujet : </label>
      <input type="text" id="subject" name="subject" required />
      <label for="text">Corps du message : </label>
      <textarea name="text" id="text" required></textarea>

      <input type="submit" value="Envoyer" />
    </form>

    <?php include 'frames/footer.php'; ?>

    <?php include 'frames/cookieBanner.php'; ?>
  </body>
</html>
