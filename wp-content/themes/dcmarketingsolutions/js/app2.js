/*******************************************/

var pantalla = "inicio";
var initialScreen = document.querySelector("html").outerHTML;
alert(`5) Comienzo,  Pantalla = ${pantalla}, initialScreen  ${initialScreen ? "true" : "false"}, Título Página = ${document.title}, Muchacha = ${document.getElementById('id_photoMuchacha') ? "true" : "false"}`);
/*******************************************/

// document.addEventListener("DOMContentLoaded", fadeOutIn(document.querySelector('main'), 4000));
document.getElementById("menuNosotros").addEventListener("click", derivadorNosotros);
document.getElementById("menuServicios").addEventListener("click", derivadorServicios);
document.getElementById("menuNosotrosFooter").addEventListener("click", derivadorNosotros);
document.getElementById("menuServiciosFooter").addEventListener("click", derivadorServicios);

/*******************************************/

function derivadorNosotros() {

    if (document.title === "DC Marketing Solutions – Especialistas en Marketing Digital" && pantalla !== "nosotros" && pantalla !== "servicios") {
        pantalla = "inicio";
        initialScreen = document.querySelector("html").outerHTML;
        alert(`21) Pantalla = ${pantalla}, initialScreen =  ${initialScreen ? "true" : "false"}, Título Página = ${document.title}, Muchacha = ${document.getElementById('id_photoMuchacha') ? "true" : "false"}`);
    }
    else if (document.title !== "DC Marketing Solutions – Especialistas en Marketing Digital" && pantalla !== "nosotros" && pantalla !== "servicios") { 
        pantalla = "otras";
        alert(`25) Pantalla = ${pantalla}, initialScreen  ${initialScreen ? "true" : "false"}, Título Página = ${document.title}, Muchacha = ${document.getElementById('id_photoMuchacha') ? "true" : "false"}`);
    }
    else {
        alert(`28) Pantalla =  ${pantalla}, initialScreen  ${initialScreen ? "true" : "false"}, Título Página = ${document.title}, Muchacha = ${document.getElementById('id_photoMuchacha') ? "true" : "false"}`);
    }

    if (pantalla === "inicio") {
        alert(`32) Construir Nosotros, Pantalla = ${pantalla}, initialScreen  ${initialScreen ? "true" : "false"}, Título Página = ${document.title}, Muchacha = ${document.getElementById('id_photoMuchacha') ? "true" : "false"}`);
        construirNosotrosDesdeInicio();
    } else if (pantalla === "servicios") {
        alert(`35) Construir Nosotros Pantalla = ${pantalla}, initialScreen  ${initialScreen ? "true" : "false"}, Título Página = ${document.title}, Muchacha = ${document.getElementById('id_photoMuchacha') ? "true" : "false"}`);
        construirNosotrosDesdeServicios();
    } else {
        alert(`38) Construir Nosotros, Pantalla = ${pantalla} initialScreen  ${initialScreen ? "true" : "false"}, Título Página = ${document.title}, Muchacha = ${document.getElementById('id_photoMuchacha') ? "true" : "false"}`);
        construirNosotrosDesdeOtras();
    }
}

/*******************************************/

function derivadorServicios() {

    if (document.title === "DC Marketing Solutions – Especialistas en Marketing Digital" && pantalla !== "nosotros" && pantalla !== "servicios") {
        pantalla = "inicio";
        initialScreen = document.querySelector("html").outerHTML;
        alert(`50) Pantalla = ${pantalla}, initialScreen  ${initialScreen ? "true" : "false"}, Título Página = ${document.title}, Muchacha = ${document.getElementById('id_photoMuchacha') ? "true" : "false"}`);
    }
    else if (document.title !== "DC Marketing Solutions – Especialistas en Marketing Digital" && pantalla !== "nosotros" && pantalla !== "servicios" && pantalla !== "") { 
        pantalla = "otras";
        alert(`54) Pantalla = ${pantalla}, initialScreen  ${initialScreen ? "true" : "false"}, Título Página = ${document.title}, Muchacha = ${document.getElementById('id_photoMuchacha') ? "true" : "false"}`);
    }
    else {
        alert(`57) Pantalla = ${pantalla}, initialScreen  ${initialScreen ? "true" : "false"}, Título Página = ${document.title}, Muchacha = ${document.getElementById('id_photoMuchacha') ? "true" : "false"}`);
    }

    if (pantalla === "inicio") {
        alert(`61) Construir Servicios Pantalla = ${pantalla}, initialScreen  ${initialScreen ? "true" : "false"}, Título Página = ${document.title}, Muchacha = ${document.getElementById('id_photoMuchacha') ? "true" : "false"}`);
        construirServiciosDesdeInicio();
    } else if (pantalla === "nosotros") {
        alert(`64) Construir Servicios Pantalla = ${pantalla}, initialScreen  ${initialScreen ? "true" : "false"}, Título Página = ${document.title}, Muchacha = ${document.getElementById('id_photoMuchacha') ? "true" : "false"}`);
        construirServiciosDesdeNosotros();
    } else {
        alert(`67) Construir Servicios Pantalla = ${pantalla}, initialScreen  ${initialScreen ? "true" : "false"}, Título Página = ${document.title}, Muchacha = ${document.getElementById('id_photoMuchacha') ? "true" : "false"}`);
        construirServiciosDesdeOtras();
    }
}

/*******************************************/

function construirNosotrosDesdeInicio() {
    alert(`75) llegué acá  Pantalla =  ${pantalla}, initialScreen  ${initialScreen ? "true" : "false"}, Título Página = ${document.title}, Muchacha = ${document.getElementById('id_photoMuchacha') ? "true" : "false"}`);
    ajustarPantallaNosotros2();
}

function construirNosotrosDesdeServicios() {
    document.querySelector("html").innerHTML = initialScreen;
    pantalla = "inicio";
    alert(`82) llegué acá  Pantalla =  ${pantalla}, initialScreen  ${initialScreen ? "true" : "false"}, Título Página = ${document.title}, Muchacha = ${document.getElementById('id_photoMuchacha') ? "true" : "false"}`);
    ajustarPantallaNosotros2();
    alert(`84) llegué acá  Pantalla =  ${pantalla}, initialScreen  ${initialScreen ? "true" : "false"}, Título Página = ${document.title}, Muchacha = ${document.getElementById('id_photoMuchacha') ? "true" : "false"}`);
}

function construirNosotrosDesdeOtras() {
    document.querySelector("html").innerHTML = initialScreen;
    alert(`89) llegué acá  Pantalla =  ${pantalla}, initialScreen  ${initialScreen ? "true" : "false"}, Título Página = ${document.title}, Muchacha = ${document.getElementById('id_photoMuchacha') ? "true" : "false"}`);
    ajustarPantallaNosotros2();
    alert(`91) llegué acá  Pantalla =  ${pantalla}, initialScreen  ${initialScreen ? "true" : "false"}, Título Página = ${document.title}, Muchacha = ${document.getElementById('id_photoMuchacha') ? "true" : "false"}`);
}

function construirServiciosDesdeInicio() {
    alert(`95) llegué acá  Pantalla =  ${pantalla}, initialScreen  ${initialScreen ? "true" : "false"}, Título Página = ${document.title}, Muchacha = ${document.getElementById('id_photoMuchacha') ? "true" : "false"}`);
    ajustarPantallaServicios2();
}

function construirServiciosDesdeNosotros() {
    document.querySelector("html").innerHTML = initialScreen;
    pantalla = "inicio";
    alert(`102) llegué acá  Pantalla =  ${pantalla}, initialScreen  ${initialScreen ? "true" : "false"}, Título Página = ${document.title}, Muchacha = ${document.getElementById('id_photoMuchacha') ? "true" : "false"}`);
    ajustarPantallaServicios2();
    alert(`104) llegué acá  Pantalla =  ${pantalla}, initialScreen  ${initialScreen ? "true" : "false"}, Título Página = ${document.title}, Muchacha = ${document.getElementById('id_photoMuchacha') ? "true" : "false"}`);
}

function construirServiciosDesdeOtras() {
    document.querySelector("html").innerHTML = initialScreen;
    alert(`109) llegué acá  Pantalla =  ${pantalla}, initialScreen  ${initialScreen ? "true" : "false"}, Título Página = ${document.title}, Muchacha = ${document.getElementById('id_photoMuchacha') ? "true" : "false"}`);
    ajustarPantallaServicios2();
    alert(`111) llegué acá  Pantalla =  ${pantalla}, initialScreen  ${initialScreen ? "true" : "false"}, Título Página = ${document.title}, Muchacha = ${document.getElementById('id_photoMuchacha') ? "true" : "false"}`);
}

/*******************************************/

function ajustarPantallaNosotros2() {
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
    nosostrosScreen = document.querySelector("html").outerHTML;
    valueNosotros = "";
    pantalla = "nosotros";
    alert(`132) function ajustarPantallaNosotros2,  Pantalla =  ${pantalla}, initialScreen  ${initialScreen ? "true" : "false"}, Título Página = ${document.title}, Muchacha = ${document.getElementById('id_photoMuchacha') ? "true" : "false"}`);
}

/*******************************************/

function ajustarPantallaServicios2() {
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
    serviciosScreen = document.querySelector("html").outerHTML;
    valueServicios = "";
    pantalla = "servicios";
    alert(`152) function ajustarPantallaServicios2  Pantalla =  ${pantalla}, initialScreen  ${initialScreen ? "true" : "false"}, Título Página = ${document.title}, Muchacha = ${document.getElementById('id_photoMuchacha') ? "true" : "false"}`);
}

/*******************************************/

function fadeOutIn(elem, speed) {
    elem.style.opacity = 0;
    if (elem.style.opacity) {
        elem.style.opacity = 0;
    } // end if
    var outInterval = setInterval(function () {
        elem.style.opacity -= 0.02;
        if (elem.style.opacity <= 0) {
            clearInterval(outInterval);
            var inInterval = setInterval(function () {
                elem.style.opacity = Number(elem.style.opacity) + 0.02;
                if (elem.style.opacity >= 1)
                    clearInterval(inInterval);
            }, speed / 50);
        } // end if
    }, speed / 50);
} // end fadeOut()

/*******************************************/