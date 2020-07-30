var pantalla = 'inicio';
var mainInicial = document.querySelector("main").outerHTML;
var valueNosotros = localStorage.getItem('valueNos');
var valueServicios = localStorage.getItem('valueServ');
localStorage.removeItem('valueNos');
localStorage.removeItem('valueServ');

function ajustarPantallaNosotros1() {
    if (pantalla === 'inicio') {
        ajustarPantallaNosotros2();}
    else if (pantalla === 'servicios') {
        document.querySelector("main").outerHTML = mainInicial;
        ajustarPantallaNosotros2();}
};

function ajustarPantallaServicios1() {
    if (pantalla === 'inicio') {
        ajustarPantallaServicios2();} 
    else if (pantalla === 'nosotros') {
        document.querySelector("main").outerHTML = mainInicial; 
        ajustarPantallaServicios2();}
};

function ajustarPantallaNosotros2() {
    fadeOutIn(document.querySelector('main'), 4000);
    document.getElementById("id_photoMuchacha").parentNode.removeChild(document.getElementById("id_photoMuchacha"));
    document.getElementById("id_servicios").parentNode.removeChild(document.getElementById("id_servicios"));
    document.getElementById("id_nosotros1").parentNode.removeChild(document.getElementById("id_nosotros1"));
    document.getElementById("id_nosotros").insertBefore((document.createElement("h2")),document.getElementById("nosotros")).setAttribute("id","id_6");
    document.getElementById("id_6").appendChild(document.createTextNode("Quienes Somos"));
    document.querySelector("#menuNosotros").classList.add("activo");
    document.querySelector("#menuInicio").classList.remove("activo");
    document.querySelector("#menuServicios").classList.remove("activo");
    document.querySelector("#menuNosotrosFooter").classList.add("activo");
    document.querySelector("#menuInicioFooter").classList.remove("activo");
    document.querySelector("#menuServiciosFooter").classList.remove("activo");
    pantalla = 'nosotros';
    valueNosotros = "";
}

function ajustarPantallaServicios2() { 
    fadeOutIn(document.querySelector('main'), 4000);
    document.getElementById("id_photoMuchacha").parentNode.removeChild(document.getElementById("id_photoMuchacha"));
    document.getElementById("id_nosotros").parentNode.removeChild(document.getElementById("id_nosotros"));
    document.getElementById("id_servicios").insertBefore((document.createElement("h2")),document.getElementById("servicios")).setAttribute("id","id_7");
    document.getElementById("id_7").appendChild(document.createTextNode("Servicios"));
    document.querySelector("#menuServicios").classList.add("activo");
    document.querySelector("#menuInicio").classList.remove("activo");
    document.querySelector("#menuNosotros").classList.remove("activo");
    document.querySelector("#menuServiciosFooter").classList.add("activo");
    document.querySelector("#menuInicioFooter").classList.remove("activo");
    document.querySelector("#menuNosotrosFooter").classList.remove("activo");
    document.querySelector("#tenemos_una_estrategia").classList.add("tenemos");
    pantalla = 'servicios';
    valueServicios = "";
}

document.addEventListener("DOMContentLoaded", fadeOutIn(document.querySelector('main'), 4000));
document.getElementById("menuNosotros").addEventListener("click",ajustarPantallaNosotros1);
document.getElementById("menuServicios").addEventListener("click",ajustarPantallaServicios1);
document.getElementById("menuNosotrosFooter").onclick = ajustarPantallaNosotros1;
document.getElementById("menuServiciosFooter").onclick = ajustarPantallaServicios1;


function fadeOutIn(elem, speed) {
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

if (valueNosotros === "si") {ajustarPantallaNosotros1()}
    else {valueNosotros = "";}

if (valueServicios === "si") {ajustarPantallaServicios1()}
    else {valueServicios = "";}
