gsap.registerPlugin(ScrollTrigger);

gsap.from('.js-photos', {
    duration: 1, 
    opacity: 0,
});

gsap.from('.concept', {
    duration: 2, 
    opacity: 0,
    scrollTrigger: {
        trigger: ".concept", 
    }
});



gsap.from('.anim', { 
    duration: 1,
    opacity: 0,
    stagger: 0.2, 
    scrollTrigger: {
        trigger: ".sliderTotal",
    } 
});

gsap.from('.fichePack', {
    duration: 1, 
    opacity: 0,
    top:-30,
    stagger: 0.2, 
    scrollTrigger: {
        trigger: ".extrPacksTotal", 
    }
});
