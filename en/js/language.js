function createDiv(){
    var sym = document.getElementById('changeLang');
    var div = document.getElementById('langueLogos');

    sym.style.display = 'none';

    div.style.display = '';
}

function reset(e, tr){
    var relTarg = e.relatedTarget || e.toElement;
    if (!isChildOf(relTarg, tr))
    {
      var sym = document.getElementById('changeLang');
      var div = document.getElementById('langueLogos');

      div.style.display = 'none';

      sym.style.display = '';
    }
}

function isChildOf(child,par) {
  while(child!=document) {
    if(child==par) { return true; }
    child = child.parentNode;
  }
  return false;
}
