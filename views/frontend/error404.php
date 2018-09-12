<?php $title = 'Error 404 | Républicain.e.s'; ?>

<?php $currentCssStyle = 'error404' ?>

<?php $_SESSION['location'] = '/' ?>

<?php ob_start(); ?>

<?php require 'views/frontend/banner.php'; ?>
<?php require 'views/frontend/menu.php'; ?>

<section id="error">
  <h1>ERREUR 404</h1>
  <p>&lt;/Cette page n’existe pas.&gt;</p>
</section>


<?php require 'views/frontend/footer.php'; ?>

<script type="text/javascript" src="public/scripts/frontend.js"></script>
<script type="text/javascript">
  var langagueLogo = document.getElementById('langagueLogo');
  var langaguesFlags = document.getElementById('langaguesFlags');

  langagueLogo.style = "";
  langaguesFlags.style.display = "none";

  var temporaryTheme = colorTheme;
  colorTheme = otherTheme;
  otherTheme = temporaryTheme;
  adapteColorTheme();
  checkAletarnateStyle();
</script>

<?php if (!isset($_COOKIE["accept"]) && !isset($_SESSION["cookieAccept"])) {
  require 'views/frontend/cookieBanner.php';
} ?>

<?php $content = ob_get_clean(); ?>

<?php require 'views/frontend/template.php'; ?>
