<?php $title = 'Inscrit | Républicain.e.s'; ?>

<?php $currentCssStyle = 'signupFinish' ?>

<?php $_SESSION['location'] = '/signup' ?>

<?php ob_start(); ?>

<?php require 'views/frontend/banner.php'; ?>
<?php require 'views/frontend/menu.php'; ?>

<section>
  <h1 class="signupFinishH1" >Bienvenue, républicain-e #<?= str_repeat('0', 3 - (strlen((string)$_SESSION['id']))) . $_SESSION['id'] ?></h1>
  <img src="public/pictures/signupFinishOkay.svg" alt="Symbole OK dans un nuage" />
  <div class="linksToAccounts">
    <a href="/myAccount">GÉRER MON COMPTE</a>
    <a href="/video">VOIR NOS VIDÉOS</a>
    <a href="/getNewsletter?i=l&s=s">RECEVOIR LA DERNIÈRE NEWSLETTER</a>

  </div>
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
