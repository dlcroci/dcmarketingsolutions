class Prueba {
    constructor() {
        this.trigger = document.querySelectorAll(".btn.btn--blue");
        this.objetivo = document.querySelector("header");
        this.events()
        this.pausar = false;
        }

    events() {
        this.trigger.forEach(el => el.addEventListener("click", () => this.pausar() ));
        this.trigger.forEach(el => el.addEventListener("scroll", () => this.reanudar() ));
        this.trigger.forEach(el => el.addEventListener("click", () => this.ocultar() ));
        }   

    ocultar() {
        document.querySelector(".site-header").classList.add("ocultar");
    }

    pausar() {
        this.pausar = false;
    }

    reanudar() {
        this.pausar = true;
    }
}
export default Prueba