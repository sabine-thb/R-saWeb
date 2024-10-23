gsap.registerPlugin(ScrollTrigger);

gsap.from('.img-entete-ensavplus', {
    duration: 1, 
    opacity: 0,
});

gsap.from('.concept', {
    delay:0.2,
    duration: 2, 
    opacity: 0,
    scrollTrigger: {
        trigger: ".concept", 
    }
});

gsap.from('.creatrice', {
    delay:0.2,
    duration: 2, 
    opacity: 0,
    scrollTrigger: {
        trigger: ".creatrice", 
    }
});

gsap.from('.ml', {
    delay:0.2,
    duration: 2, 
    opacity: 0,
    scrollTrigger: {
        trigger: ".ml", 
    }
});
