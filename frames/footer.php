<footer>
  <div id="contentFooter">
    <div id="usefulLinks">
      <p>Légalités encombrantes</p>
      <p>Nous contacter</p>
      <p>Faire un procès pour diffamation</p>
    </div>
    <figure id="logosContener">
      <img src="pictures/logoTwitter<?php echo $colors ?>.svg" alt="Logo Twitter en noir" class="logos" />
      <img src="pictures/logoFacebook<?php echo $colors ?>.svg" alt="Logo Facebook en noir" class="logos" />
      <img src="pictures/logoInstagram<?php echo $colors ?>.svg" alt="Logo Instagram en noir" class="logos" />
    </figure>
    <figure id="changeLang">
      <img src="pictures/changeLanguage<?php echo $colors ?>.svg" alt="Symbole pour changer de langue" onmouseover="createDiv()"/>
    </figure>
    <div id="langueLogos" onmouseout="reset(event, this)" style="display:none;">
      <a href="<?php echo $_SESSION["urlBase"]."".$_SESSION["location"]; ?>" >FR<img src="pictures/fr.svg" alt="Drapeau français" /></a>
      <a href="<?php echo $_SESSION["urlBase"]."esp/".$_SESSION["location"]; ?>" >ES<img src="pictures/esp.svg" alt="Drapeau espagnol" /></a>
      <a href="<?php echo $_SESSION["urlBase"]."en/".$_SESSION["location"]; ?>" >US<img src="pictures/en.svg" alt="Drapeau americain" /></a>
    </div>
  </div>
</footer>

<p>v 0.0.8</p>

<script type="text/javascript" src="js/language.js"></script>
