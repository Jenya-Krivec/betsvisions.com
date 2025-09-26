'use strict';
class Chip {
    constructor(){
        this.letters = Array.from(document.querySelectorAll('.letter')).filter(el => el.textContent.trim().length > 0);
        this.chip = document.getElementById('chip');
        this.letterPosition = 0;
        this.chipPosition = 0;
        this.jumpS = 700; // time between jumps
    }
    run(){
        setTimeout(this.changeChip.bind(this), 900);
        setTimeout(this.step.bind(this), this.jumpS+1000);
    }
    changeChip(){
        this.chip.classList.toggle('chip');
    }
    resetChip(){
        this.chip.style.transform = null;
        this.chip.classList.remove('chip');
    }
    step(){
        let k = 0;
        for(let i = 0; i < this.letters.length; i++){
            const letter = this.letters[this.chipPosition];
            const center = this.getCenterRect(letter);
            setTimeout(this.placeChipAt.bind(this, center.x, center.y, center), i * this.jumpS);
            this.chipPosition = (this.chipPosition + 1) % this.letters.length;
            k++;
        }
        setTimeout(this.resetChip.bind(this), k * this.jumpS);
        setTimeout(()=> this.chip.style.transition = null, k * this.jumpS + 500);
    }
    getCenterRect(el){
        const r = el.getBoundingClientRect();
        const parentR = document.getElementById('stage').getBoundingClientRect();
        const cx = r.left + r.width/2 - parentR.left - 21;
        const cy = r.top + r.height/2 - parentR.top - 38;
        return {x:cx, y:cy, w:r.width, h:r.height};
    }
    placeChipAt(x,y, letterRect){
        const chipRect = this.chip.getBoundingClientRect();
        const bw = chipRect.width;
        const bh = chipRect.height;
        // translate so center of chip sits above the letter (slightly above)
        const targetX = x - bw/2;
        const baselineY = y - bh/2;
        // we want the chip to be slightly above the letter center to 'hover' and bounce down
        const upY = baselineY - Math.max(18, letterRect.h * 0.9);
        // Move chip to upY instantly (simulate arc) then animate to baselineY
        this.chip.style.transition = 'transform 400ms cubic-bezier(.22,1,.36,1)';
        // set transform to up position first for arc illusion
        requestAnimationFrame(()=>{
            this.chip.style.transform = `translate(${targetX}px, ${upY}px) scale3d(0.3, 0.3, 0.3)`;
        });
        // after small delay, let it fall onto baseline and pop the letter
        setTimeout(()=>{
            this.chip.style.transform = `translate(${targetX}px, ${baselineY}px) scale3d(0.3, 0.3, 0.3)`;
            // letter pop
            setTimeout(this.upLetter.bind(this), 300);
            setTimeout(this.downLetter.bind(this), 500);
        }, 160);
    }
    upLetter(){
        this.letters[this.letterPosition].classList.add('pop');
    }
    downLetter(){
        this.letters[this.letterPosition].classList.remove('pop');
        this.letterPosition = (this.letterPosition + 1) % this.letters.length;
    }
}
window.addEventListener('load', ()=> {
    const chip = new Chip();
    chip.run();
    setInterval(chip.run.bind(chip), 10000);
});
