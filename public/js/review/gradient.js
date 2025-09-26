'use strict';
class Gradient {
    constructor() {
        this.gradient = document.querySelector('.gradient > div > div > div');
    }
    deleteGradient() {
        if (window.innerWidth <= 600) {
            this.gradient.style.backgroundImage = null;
        }
    }
}
new Gradient().deleteGradient();
