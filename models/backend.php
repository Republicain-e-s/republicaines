<?php
session_start();



function saveToBDD()
{
  if (isset($_POST['pseudo']) && isset($_POST['email']) && isset($_POST['password'])) {
    $bdd = connexionToBDD();
    $requet = $bdd->prepare('INSERT INTO accounts(pseudo, email, password, description, icon, newsletter) VALUES(:pseudo, :email, :password, :description, :icon, :newsletter)');
    if (isset($_POST['newsletter'])) {
      $news = true;
    } else {
      $news = false;
    }
    if (isset($_FILES['icon'])) {
      $iconLink = saveIconImage();
    } else {
      $iconLink = '';
    }

    $requet->execute(array(
      'pseudo' => htmlspecialchars($_POST['pseudo']),
      'email' => htmlspecialchars($_POST['email']),
      'password' => htmlspecialchars(hash('sha512', $_POST['password'])),
      'description' => '',
      'icon' => $iconLink,
      'newsletter' => $news
    ));
    $_SESSION['pseudo'] = htmlspecialchars($_POST['pseudo']);
    $_SESSION['email'] = htmlspecialchars($_POST['email']);
    $_SESSION['id'] = $bdd->lastInsertId('accounts');
    $_SESSION['$iconLink'] = $iconLink;
    $_SESSION['connected'] = true;
    header('Location: /signup?a=t&s=s');
  }


}

function saveIconImage()
{
  if ($_FILES['icon']['error'] == 0) {
    if ($_FILES['icon']['size'] < 6000000) {
      $dataFile = pathinfo($_FILES['icon']['name']);
      $extensionUpload = $dataFile['extension'];
      if (in_array($extensionUpload, array('jpg', 'jpeg', 'gif', 'png', 'svg'))) {
        $iconLink = 'public/pictures/profilesPictures/' . hash('sha1', $_FILES['icon']['name']) . '.' . $extensionUpload;
        move_uploaded_file($_FILES['icon']['tmp_name'], $iconLink);
        return $iconLink;
      }
    }
  }

  return '';
}

function connexionToBDD()
{
  $host_name = 'localhost';
  $database = 'repblcicain-e-s';
  $user_name = 'root';
  $password = '';

  $bdd = null;
  try {
    $bdd = new PDO("mysql:host=$host_name; dbname=$database;", $user_name, $password);
  } catch (PDOException $e) {
    echo "Erreur!: " . $e->getMessage() . "<br/>";
    die();
  }
  return $bdd;
}
