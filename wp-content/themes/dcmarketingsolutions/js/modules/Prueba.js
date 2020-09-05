class Prueba {
    constructor() {
        this.objetivo = document.querySelector(".ffff")
        this.events()
        }

    events() {
        this.objetivo.addEventListener("click", () => this.saludar());
        this.objetivo.addEventListener("click", () => this.pintar());
        }

    saludar() {
        console.log(document.title);
        }
        
    pintar() {
        this.objetivo.classList.add("pintar");
    }

}
export default Prueba