document.addEventListener("DOMContentLoaded", function () {


    //MISE EN PLACE DE L'EFFET NUIT
    var selecButton = document.querySelector('.mode')
    var selecMoon = document.querySelector('.moon')
    var selecBurger = document.querySelector(".menuBurger")
    var selecLogo=document.querySelector(".logo")
    var largeur = window.innerWidth;  /*Test qui marche comme un media query mais en js*/

    function darkMode() {
        const elements = document.querySelectorAll('body, #button, #nav, .lien, .fondViolet,.ecritureBlanche');
        elements.forEach(element => {
            element.classList.add('dark-mode');
            element.classList.remove('light-mode')

        });
        selecMoon.src = "icones/moon2.svg"
        selecLogo.src="icones/trône2.svg"
        selecBurger.src="icones/MenuWhiteBurger.svg"
        localStorage.setItem("mode", 'dark-mode')
        console.log(localStorage.getItem("mode"))
       


    }


    function lightMode() {
        const elements = document.querySelectorAll('body, #button, #nav, .lien, .fondViolet,.ecritureBlanche');
        elements.forEach(element => {
            element.classList.add('light-mode');
            element.classList.remove('dark-mode')

        });
        selecMoon.src = "icones/moon1.svg"
        selecLogo.src="icones/trône.svg"
        selecBurger.src="icones/MenuBlackBurger.svg"
        localStorage.setItem("mode", 'light-mode')
        console.log(localStorage.getItem("mode"))

        // if (largeur<680){
        //     selecMoon.src = "icones/littleWhiteMoon.svg"
        // }

    }



    //Je change le mode et l'image de l'icône en fonction du nombre de clic pair ou impair sur le bouton

    selecButton.addEventListener('click', function () {

        if (localStorage.getItem("mode") == "light-mode") {
            darkMode();
        }else{
            lightMode();
        }

    })
    //Au chargement de la page on met le bon mode
    if (localStorage.getItem("mode") == "light-mode") {
        lightMode();
    }else{
        darkMode();
    }

    

 

    
    







    function eviteClignote () {
        nav.style.transition = '0s';
        body.style.transition = '0s';

        setTimeout(function () {
            nav.style.transition = "0.5s ease-in-out";  //Pour que la transition se remtte bien sur le nav et le body après le resize
        }, 1000);

        this.setTimeout(function () {
            body.style.transition = "0.5s ease-in-out";
        }, 1000)




        // nav.style.transition='0s' Pour que le menu ne bouge pas au resize  (mais comment faire pour que cela se remette normal quand on ne resize pas ?)       
    }
    window.addEventListener('resize', eviteClignote)

    eviteClignote();


})
