function createDiv(){
    var bodytag = document.getElementsByTagName('body')[0];
    var div = document.createElement('div');
    div.setAttribute('id','cookie-law');
    div.innerHTML = '<div id="cookiesText"><p>Nous utilisons de petits cookies afin d’améliorer votre expérience.</p><a href="/privacy-cookies-policy/" rel="nofollow" class="cookiesPrivacy">VOIR NOTRE PAGE SUR NOTRE UTILISATION DES COOKIES</a></div><div id="cookiesButton"><a class="accepte" href="#" onclick="accepte();">ACCEPTER</a><a class="deny" href="#" onclick="deny();">REFUSER</a></div>';
 // Be advised the Close Banner 'X' link requires jQuery

    // bodytag.appendChild(div); // Adds the Cookie Law Banner just before the closing </body> tag
    // or
    bodytag.insertBefore(div,bodytag.getElementsByTagName('footer').nextSibling);
}

window.onload = function(){
    createDiv();
}

function removeMe(){
	var element = document.getElementById('cookie-law');
	element.parentNode.removeChild(element);
}

function accepte(){
  removeMe();
  document.cookie = "cookieAccepte=true";
}

function deny(){
  removeMe();
}
