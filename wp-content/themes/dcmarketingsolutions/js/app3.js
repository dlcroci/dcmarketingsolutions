/*******************************************/

var pantalla = "inicio";
var initialScreen = document.querySelector("html").outerHTML;
//alert(`5) Comienzo,  Pantalla = ${pantalla}, initialScreen  ${initialScreen ? "true" : "false"}, Título Página = ${document.title}, Muchacha = ${document.getElementById('id_photoMuchacha') ? "true" : "false"}`);
/*******************************************/

// document.addEventListener("DOMContentLoaded", fadeOutIn(document.querySelector('main'), 4000));
document.getElementById("menuNosotros").addEventListener("click", ajustarPantallaNosotros2);
document.getElementById("menuServicios").addEventListener("click", ajustarPantallaServicios2);
document.getElementById("menuNosotrosFooter").addEventListener("click", ajustarPantallaNosotros2);
document.getElementById("menuServiciosFooter").addEventListener("click", ajustarPantallaServicios2);

/*******************************************/


/*******************************************/

function ajustarPantallaNosotros2() {
    document.querySelector("html").innerHTML = initialScreen;
    //alert(`21) Pantalla = ${pantalla}, initialScreen  ${initialScreen ? "true" : "false"}, Título Página = ${document.title}, Muchacha = ${document.getElementById('id_photoMuchacha') ? "true" : "false"}`);
    // fadeOutIn(document.querySelector('main'), 4000);
    document.getElementById("id_photoMuchacha").parentNode.removeChild(document.getElementById("id_photoMuchacha"));
    document.getElementById("id_servicios").parentNode.removeChild(document.getElementById("id_servicios"));
    document.getElementById("id_nosotros1").parentNode.removeChild(document.getElementById("id_nosotros1"));
    document.getElementById("id_nosotros").insertBefore((document.createElement("h2")), document.getElementById("nosotros")).setAttribute("id", "id_6");
    document.getElementById("id_6").appendChild(document.createTextNode("Quienes Somos"));
    document.querySelector("#menuNosotros").classList.add("activo");
    document.querySelector("#menuInicio").classList.remove("activo");
    document.querySelector("#menuServicios").classList.remove("activo");
    document.querySelector("#menuNosotrosFooter").classList.add("activo");
    document.querySelector("#menuInicioFooter").classList.remove("activo");
    document.querySelector("#menuServiciosFooter").classList.remove("activo");
    pantalla = "nosotros";
    //alert(`35) Pantalla = ${pantalla}, initialScreen  ${initialScreen ? "true" : "false"}, Título Página = ${document.title}, Muchacha = ${document.getElementById('id_photoMuchacha') ? "true" : "false"}`);
}

/*******************************************/

function ajustarPantallaServicios2() {
    document.querySelector("html").innerHTML = initialScreen;
    //alert(`42) Pantalla = ${pantalla}, initialScreen  ${initialScreen ? "true" : "false"}, Título Página = ${document.title}, Muchacha = ${document.getElementById('id_photoMuchacha') ? "true" : "false"}`);
    // fadeOutIn(document.querySelector('main'), 4000);
    document.getElementById("id_photoMuchacha").parentNode.removeChild(document.getElementById("id_photoMuchacha"));
    document.getElementById("id_nosotros").parentNode.removeChild(document.getElementById("id_nosotros"));
    document.getElementById("id_servicios").insertBefore((document.createElement("h2")), document.getElementById("servicios")).setAttribute("id", "id_7");
    document.getElementById("id_7").appendChild(document.createTextNode("Servicios"));
    document.querySelector("#menuServicios").classList.add("activo");
    document.querySelector("#menuInicio").classList.remove("activo");
    document.querySelector("#menuNosotros").classList.remove("activo");
    document.querySelector("#menuServiciosFooter").classList.add("activo");
    document.querySelector("#menuInicioFooter").classList.remove("activo");
    document.querySelector("#menuNosotrosFooter").classList.remove("activo");
    document.querySelector("#tenemos_una_estrategia").classList.add("tenemos");
    pantalla = "servicios";
    //alert(`56) Pantalla = ${pantalla}, initialScreen  ${initialScreen ? "true" : "false"}, Título Página = ${document.title}, Muchacha = ${document.getElementById('id_photoMuchacha') ? "true" : "false"}`);
}

/*******************************************/