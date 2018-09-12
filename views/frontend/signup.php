<?php $title = 'S\'inscire | Républicain.e.s'; ?>

<?php $currentCssStyle = 'signup' ?>

<?php $_SESSION['location'] = '/signup' ?>

<?php ob_start(); ?>

<?php require 'views/frontend/banner.php'; ?>
<?php require 'views/frontend/menu.php'; ?>

<section>
  <div class="postForm">
    <h1>Créer un compte</h1>
    <p id="description" >Ce compte vous servira à vous abonner à notre newsletter, à sauvegarder des options propres à ce site ; et dans le futur à plein d’autres trucs sur ce site, qui ne sera plus qu’une interface pour lire nous vidéos, mais bien plus encore !<br />PS : Les champs inscrits en <span class="redText">rouge</span> sont obligatoires pour le bon déroulement de votre inscription.</p>
    <p>DEVENIR REPUBLICAIN-E<img src="public/pictures/flecheSignup<?= ucfirst($_SESSION['colorTheme']) ?>.svg" alt="Une fleche vers le bas" class="picturesChange" onclick="window.scrollByPages(1);" /></p>
  </div>
  <form class="signupFormulaire" action="/signup?a=p&s=s" method="post" enctype="multipart/form-data">
    <div class="form">
      <div class="oneCollum">
        <input type="file" name="icon" id="icon" ><label for="icon" /></label>
        <input type="text" name="pseudo" id="pseudo" placeholder="Pseudo_" required /><label for="pseudo"></label>
      </div>

      <div class="twoCollum">
        <input type="email" name="email" id="email" placeholder="Email_" required />
        <input type="password" name="password" id="password" placeholder="Mot de passe_" required />
        <input type="password" name="passwordCheck" id="passwordCheck" placeholder="Confirmation du mot de passe_" required />
        <span class="checkBox"><input type="checkbox" name="newsletter" id="newsletter" /><label for="newsletter">Abonnement à la newsletter</label></span>
      </div>

      <div class="threeCollum">
        <label for="email">Pour que tu puisses gérer ton compte et recevoir la newsletter.</label>
        <label for="password">Pour être sûr que ce soit bien toi.</label>
        <label for="passwordCheck">Parce qu’on est jamais certain qu’on a mis une majuscule ou pas.</label>
        <label for="newsletter">Pour être au courant de ce qu’on fait (entre une et deux par trimestre).</label>
      </div>
    </div>

    <input type="submit" value="DEVENIR REPUBLICAIN-E" />
  </form>
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
