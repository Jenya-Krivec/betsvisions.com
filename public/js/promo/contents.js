'use strict';
class Contents {
    constructor() {
        this.span = document.querySelectorAll('#animList > span');
        this.idx = 0;
    }
    run(){
        this.loop();
        setInterval(this.loop.bind(this), 1500);
    }
    activate(i){
        this.span.forEach(el => el.classList.remove('active'));
        this.span[i].classList.add('active');
    }
    loop(){
        this.activate(this.idx);
        this.idx = (this.idx + 1) % this.span.length;
    }
}
new Contents().run();
