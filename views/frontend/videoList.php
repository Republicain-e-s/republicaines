<?php $title = 'Vidéos | Républicain.e.s'; ?>

<?php $currentCssStyle = 'videoList' ?>

<?php $_SESSION['location'] = '/' ?>

<?php ob_start(); ?>

<?php require 'views/frontend/banner.php'; ?>
<?php require 'views/frontend/menu.php'; ?>

<div id="empty">

</div>


<?php require 'views/frontend/footer.php'; ?>

<script type="text/javascript" src="public/scripts/frontend.js"></script>
<script type="text/javascript">
  setActivePage(1);
  var langagueLogo = document.getElementById('langagueLogo');
  var langaguesFlags = document.getElementById('langaguesFlags');

  langagueLogo.style = "";
  langaguesFlags.style.display = "none";

  adapteColorTheme();
  checkAletarnateStyle();
</script>

<?php if (!isset($_COOKIE["accept"]) && !isset($_SESSION["cookieAccept"])) {
  require 'views/frontend/cookieBanner.php';
} ?>

<?php $content = ob_get_clean(); ?>

<?php require 'views/frontend/template.php'; ?>
