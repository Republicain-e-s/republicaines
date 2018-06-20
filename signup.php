<?php include 'relationships/starting.php'; ?>

<?php $_SESSION["location"] = "http://www.republicain-e-s.fr/signup.php" ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="styles/styleIndex.css" />
    <link rel="stylesheet" href="styles/navStyle.css" />
    <link rel="stylesheet" href="styles/headerStyle.css" />
    <?php include 'functions/colors.php'; ?>
    <title>Signup - Républicain.e.s</title>
  </head>

  <?php include 'analysis/matamo.php'; ?>

  <body>
    <?php include 'frames/header.php'; ?>

    <h2>Bienvenue, républicain.e</h2>
    <p>Pour l’instant, le système de comptes ne sert pas à grand chose, mais nous l’avons installé en anticipant l’avenir du site, qui ne sera plus juste une interface supplémentaire pour pouvoir regarder nos vidéos youtube, mais bien plus encore !</p>

    <form method="post" action="functions/signup.php">
      <label for="email">Email</label> :
      <input type="email" name="email" id="email" required/>

      <label for="pwd">Mot de passe</label> :
      <input type="password" name="pwd" id="pwd" required/>

      <label for="pseudo">Pseudo (facultatif)</label> :
      <input type="text" name="pseudo" id="pseudo" />

      <input type="submit" value="Créer le compte" />
    </form>

    <?php include 'frames/footer.php'; ?>
  </body>
</html>
