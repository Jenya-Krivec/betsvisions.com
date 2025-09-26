'use strict';
class Header {
    constructor() {
        this.header = document.querySelector('header');
    }
    addEventListeners() {
        window.addEventListener("scroll", this.change.bind(this));
    }
    change() {
        if (window.scrollY > 1) {
            this.header.classList.add("scrolled");
        } else {
            this.header.classList.remove("scrolled");
        }
    }
}
new Header().addEventListeners();
