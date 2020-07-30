document.addEventListener("DOMContentLoaded", fadeOutIn(document.querySelector('main'), 4000));
document.getElementById("menuNosotros").addEventListener("click",pasarVariablesNosotros);
document.getElementById("menuNosotrosFooter").addEventListener("click",pasarVariablesNosotros);
document.getElementById("menuServicios").addEventListener("click",pasarVariablesServicios);
document.getElementById("menuServiciosFooter").addEventListener("click",pasarVariablesServicios);

function pasarVariablesNosotros() {
    localStorage.setItem('valueNos', 'si');
    window.location = "http://localhost/dcmarketingsolutions/"
  }

  function pasarVariablesServicios() {
    localStorage.setItem('valueServ', 'si');
    window.location = "http://localhost/dcmarketingsolutions/"
  }

  function fadeOutIn(elem, speed ) {
    elem.style.opacity = 0;
    if (elem.style.opacity) {
        elem.style.opacity = 0;
    } // end if
    var outInterval = setInterval(function() {
        elem.style.opacity -= 0.02;
        if (elem.style.opacity <= 0) {
            clearInterval(outInterval);
            var inInterval = setInterval(function() {
                elem.style.opacity = Number(elem.style.opacity)+0.02;
                if (elem.style.opacity >= 1)
                    clearInterval(inInterval);
            }, speed/50 );
        } // end if
    }, speed/50 );
} // end fadeOut()

