gsap.registerPlugin(ScrollTrigger);

gsap.from('.img-entete-packs', {
    duration: 1, 
    opacity: 0,
});

gsap.from('.textPacks', {
    duration: 2, 
    opacity: 0,
    scrollTrigger: {
        trigger: ".textPacks", 
    }
});

gsap.from('.blocimg12', { 
    delay:0.3,
    duration: 1,
    opacity: 0,
    stagger: 0.2, 
    scrollTrigger: {
        trigger: ".fiche12",
    } 
});

gsap.from('.blocimg13', { 
    delay:0.3,
    duration: 1,
    opacity: 0,
    stagger: 0.2, 
    scrollTrigger: {
        trigger: ".fiche13",
    } 
});

gsap.from('.blocimg14', { 
    delay:0.3,
    duration: 1,
    opacity: 0,
    stagger: 0.2, 
    scrollTrigger: {
        trigger: ".fiche14",
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
