<html>
<head>
<?php if(!isset($_COOKIE['verif'])){ ?>
<script>
function legcook(){
document.getElementById('legcooki');
legcooki.style.display='none';
document.cookie = 'verif=1; ; path=/';
}
</script>
<?php } ?>
<style>
*{margin:0;padding:0;}
</style>
</head>
<body>
<div style="position:relative;">
<?php if(!isset($_COOKIE['verif'])){ ?>
<div id="legcooki" style="padding:5px;width:100%;color:#FFFFFF;position:absolute;top:0;left:0;z-index:1;background: rgba(0, 0, 0, 0.4);">
<p style="text-align:right;"><img onclick="legcook();" style="cursor:pointer;" src="images/fermer.gif" title="" alt=""></p>
Pour le bon fonctionnement du site la rose de l'orient utilise des cookies.<br>
La navigation sur ce site implique de fait l'acceptation de l'utilisation de cookie.<br>
Ils servent notamment :<br>
à gérer votre panier,<br>
à vous connecter sur votre compte.<br>
<a href="en-savoir-plus.php">en savoir plus</a>
</div>
<?php } ?>
<div style="position:absolute;top:0;left:0;z-index:2;">Non c'est toi</div>
</div>
</body>
</html>
