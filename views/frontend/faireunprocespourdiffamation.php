<?php $title = 'Faire un procès pour diffamation | Républicain.e.s'; ?>

<?php $currentCssStyle = 'faireunprocespourdiffamation' ?>

<?php $_SESSION['location'] = '/faireunprocespourdiffamation' ?>

<?php ob_start(); ?>

<?php require 'views/frontend/banner.php'; ?>
<?php require 'views/frontend/menu.php'; ?>

<section id="OnHeart">
  <p class="big">ÉVITEZ</p>
  <p class="small">Ce serait sympa x)</p>
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
