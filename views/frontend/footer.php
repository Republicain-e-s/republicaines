<footer>
  <ul class="usefulLink">
    <li><a href="/legalite">Légalités encombrantes</a></li>
    <li><a href="/contact">Nous contacter</a></li>
    <li><a href="/faireunprocespourdiffamation">Faire un procès pour diffamation</a></li>
  </ul>

  <figure id="socialReseau">
    <a href="#"><img src="public/pictures/logoTwitter<?= ucfirst($_SESSION['colorTheme']) ?>.svg" alt="Logo de Twitter" /></a>
    <a href="#"><img src="public/pictures/logoFacebook<?= ucfirst($_SESSION['colorTheme']) ?>.svg" alt="Logo de Facebook" /></a>
    <a href="#"><img src="public/pictures/logoInstagram<?= ucfirst($_SESSION['colorTheme']) ?>.svg" alt="Logo de Instagram" /></a>
  </figure>

  <div id="langagueLogo" onmouseover="langaguesChangeApply()" >
    <img src="public/pictures/langagues<?= ucfirst($_SESSION['colorTheme']) ?>.svg" alt="Icone de changement de langue" />
  </div>

  <ul id="langaguesFlags" onmouseout="langaguesChangeReset(event, this)" >
    <li><a href="<?= $_SESSION['location'] ?>">FR<img src="public/pictures/frenchFlag.svg" alt="Drapeau français" /></a></li>
    <li><a href="esp<?= $_SESSION['location'] ?>">ES<img src="public/pictures/spanishFlag.svg" alt="Drapeau espagnol" /></a></li>
    <li><a href="en<?= $_SESSION['location'] ?>">US<img src="public/pictures/englishFlag.svg" alt="Drapeau anglais" /></a></li>
  </ul>

</footer>
