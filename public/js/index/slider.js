'use strict';
class Slider {
    constructor() {
        this.sliders = document.querySelectorAll('.slider');
        this.translateProperty = '';
        this.translate = 0;
    }
    /**
     * Starts the slider
     */
    run(){
        this.setHeightVerticalSlider();
        this.sliders.forEach(slider => {
            setInterval(() => this.slide(slider), 3000);
        });
    }
    setHeightVerticalSlider(){
        const verticalSlider = document.querySelector('.vertical-slider');
        const smallContainer = document.querySelector('.small-container');
        verticalSlider.style.height = smallContainer.offsetHeight + 'px';
    }
    /**
     * Slide the slider
     * @param {HTMLElement} slider - The slider element
     */
    slide(slider){
        if(slider.classList.contains('vertical-slider')) {
            this.translateProperty = 'translateY';
            this.translate = 33;
        }else {
            this.translate = 25;
            this.translateProperty = 'translateX';
        }
        // Set the slider to slide
        slider.style.transition = 'transform 0.6s ease-in-out';
        slider.style.transform = this.translateProperty+'(-'+this.translate+'%)';
        // Set the slider to start at the beginning after 600ms
        setTimeout(this.setStart.bind(this, slider), 600);
    }

    /**
     * Resets the slider to its initial state
     * @param {HTMLElement} slider - The slider element
     */
    setStart(slider){
        // Move the first slide to the end
        slider.appendChild(slider.firstElementChild);
        slider.style.transition = 'none';
        slider.style.transform = this.translateProperty+'(0)';
    }
}
new Slider().run();
