var purecookieTitle = "Süti figyelmeztetés";
var purecookieDesc = "A weboldal használatával automatikusan elfogadod a sütikre való szabályzatot";
var purecookieLink = '<a href="https://hu.wikipedia.org/wiki/HTTP-s%C3%BCti" target="_blank">Mire jók a sütik?</a>';
var purecookieButton = "Megértettem!";

function pureFadeIn(elem, display){
  var el = document.getElementById(elem);
  el.style.opacity = 0;
  el.style.display = display || "block";

  (function fade() {
    var val = parseFloat(el.style.opacity);
    if (!((val += .02) > 1)) {
      el.style.opacity = val;
      requestAnimationFrame(fade);
    }
  })();
};
function pureFadeOut(elem){
  var el = document.getElementById(elem);
  el.style.opacity = 1;

  (function fade() {
    if ((el.style.opacity -= .02) < 0) {
      el.style.display = "none";
    } else {
      requestAnimationFrame(fade);
    }
  })();
};
