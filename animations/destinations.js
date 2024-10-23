gsap.registerPlugin(ScrollTrigger);

gsap.from('.img-entete-dest', {
    duration: 1, 
    opacity: 0,
    toggleActions: 'restart none none none' 
});

gsap.from('.textDestinations', {
    duration: 2, 
    opacity: 0,
    scrollTrigger: {
        trigger: ".textDestinations",  
    }
});


//Pour les destinations à gauche

gsap.from('.blocimg1', { 
    delay:0.4,
    left:-100,
    duration: 0.6,
    opacity: 0,
    stagger: 0.2, 
    scrollTrigger: {
        trigger: ".ficheDest1",
    } 
});


gsap.from('.blocimg3', { 
    delay:0.4,
    left:-100,
    duration: 0.6,
    opacity: 0,
    stagger: 0.2, 
    scrollTrigger: {
        trigger: ".ficheDest3",
    } 
});


gsap.from('.blocimg5', { 
    delay:0.4,
    left:-100,
    duration: 0.6,
    opacity: 0,
    stagger: 0.2, 
    scrollTrigger: {
        trigger: ".ficheDest5",
    } 
});

gsap.from('.blocimg7', { 
    delay:0.4,
    left:-100,
    duration: 0.6,
    opacity: 0,
    stagger: 0.2, 
    scrollTrigger: {
        trigger: ".ficheDest7",
    } 
});

gsap.from('.blocimg9', { 
    delay:0.4,
    left:-100,
    duration: 0.6,
    opacity: 0,
    stagger: 0.2, 
    scrollTrigger: {
        trigger: ".ficheDest9",
    } 
});

gsap.from('.blocimg11', { 
    delay:0.4,
    left:-100,
    duration: 0.6,
    opacity: 0,
    stagger: 0.2, 
    scrollTrigger: {
        trigger: ".ficheDest11",
    } 
});



//Pour les destinations à droite


gsap.from('.blocimg2', { 
    delay:0.4,
    right:-100,
    duration: 0.6,
    opacity: 0,
    stagger: 0.2, 
    scrollTrigger: {
        trigger: ".ficheDest2",
    } 
});

gsap.from('.blocimg4', { 
    delay:0.4,
    right:-100,
    duration: 0.6,
    opacity: 0,
    stagger: 0.2, 
    scrollTrigger: {
        trigger: ".ficheDest4",
    } 
});


gsap.from('.blocimg6', { 
    delay:0.4,
    right:-100,
    duration: 0.6,
    opacity: 0,
    stagger: 0.2, 
    scrollTrigger: {
        trigger: ".ficheDest6",
    } 
});

gsap.from('.blocimg8', { 
    delay:0.4,
    right:-100,
    duration: 0.6,
    opacity: 0,
    stagger: 0.2, 
    scrollTrigger: {
        trigger: ".ficheDest8",
    } 
});

gsap.from('.blocimg10', { 
    delay:0.4,
    right:-100,
    duration: 0.6,
    opacity: 0,
    stagger: 0.9, 
    scrollTrigger: {
        trigger: ".ficheDest10",
    } 
});

