colorTheme = getColorThemeFromCookie();
otherTheme = (colorTheme == 'light') ? 'dark' : 'light';

function capitalize(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
}

function setActivePage(page) {
  var ul = document.getElementsByTagName('nav')[0].firstElementChild;
  var lis = ul.children;

  lis[page].className = "active";
  lis[page].firstElementChild.removeAttribute('href');
}

function adapteColorTheme() {
  var socialButtons = document.getElementById('socialReseau').children;
  var langague = document.getElementById('langagueLogo').firstElementChild;
  var links = document.getElementsByTagName('link');
  var pictures;
  try {
    pictures = document.getElementsByClassName('picturesChange')[0];
    attribute = pictures.src;
    attribute = attribute.replace(capitalize(colorTheme), capitalize(otherTheme));
    pictures.src = attribute;
  } catch (e) {}
  var attribute = "";

  for (var i = 0; i < socialButtons.length; i++) {
    attribute = socialButtons[i].firstElementChild.src;
    attribute = attribute.replace(capitalize(colorTheme), capitalize(otherTheme));
    socialButtons[i].firstElementChild.src = attribute;
  }

  attribute = langague.src;
  attribute = attribute.replace(capitalize(colorTheme), capitalize(otherTheme));
  langague.src = attribute;

   for(var i = 0; i < links.length; i++) {
     if(links[i].getAttribute("rel").indexOf("style") != -1 && links[i].getAttribute("title")) {
       links[i].disabled = true;
       if(links[i].getAttribute("title").toLowerCase().indexOf(otherTheme) != -1) {
         links[i].disabled = false;
         links[i].rel = "stylesheet";
       } else if (links[i].getAttribute("title").toLowerCase().indexOf(colorTheme) != -1) {
         links[i].rel = "alternate stylesheet";
       }
     }
   }



  var temporaryTheme = colorTheme;
  colorTheme = otherTheme;
  otherTheme = temporaryTheme;
  document.cookie = 'colorTheme=' + colorTheme;

}

function getColorThemeFromCookie() {
  var cookies = document.cookie.split(";");
  for (var cookie in cookies) {
    if (cookie.indexOf('colorTheme') != -1) {
      return cookie.split("=")[1];
    }
  }
  return 'light';
}

function getActiveStyleSheet() {
			var i, a;
			for(i=0; (a = document.getElementsByTagName("link")[i]); i++) {
				if(a.getAttribute("rel").indexOf("style") != -1 && a.getAttribute("title") && !a.disabled) return a.getAttribute("title");
			}
			return null;
}

function checkAletarnateStyle() {
  var activeStyle = getActiveStyleSheet();
  if (activeStyle.toLowerCase().indexOf(otherTheme) != -1) {
    adapteColorTheme();
  }

setTimeout("checkAletarnateStyle()", 1000);
}

function langaguesChangeApply() {
  var langagueLogo = document.getElementById('langagueLogo');
  var langaguesFlags = document.getElementById('langaguesFlags');

  langagueLogo.style.display = "none";
  langaguesFlags.style = "";
}

function langaguesChangeReset(e, tr) {
  var relTarg = e.relatedTarget || e.toElement;
  if (!isChildOf(relTarg, tr))
  {
    var langagueLogo = document.getElementById('langagueLogo');
    var langaguesFlags = document.getElementById('langaguesFlags');

    langagueLogo.style = "";
    langaguesFlags.style.display = "none";
  }
}


function isChildOf(child,par) {
  while(child!=document) {
    if(child==par) { return true; }
    child = child.parentNode;
  }
  return false;
}


function accept() {
  var banner = document.getElementsByClassName('cookieBanner')[0];
  banner.parentNode.removeChild(banner);

  document.cookie = "accept=true"

}

function refuse() {
  var banner = document.getElementsByClassName('cookieBanner')[0];
  banner.parentNode.removeChild(banner);

}
