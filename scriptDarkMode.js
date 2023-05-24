document.addEventListener("DOMContentLoaded", function () {


    //MISE EN PLACE DE L'EFFET NUIT
    var selecButton = document.querySelector('.mode');
    var selecMoon = document.querySelector('.moon');
    var selecBurger = document.querySelector(".burger");
    var selecLogo=document.querySelector(".logo");
    var selecAvion=document.querySelectorAll(".avion"); //Je sélectionne tous mes éléments avions
    var largeur = window.innerWidth;  /*Test qui marche comme un media query mais en js*/

    function darkMode() {
        const elements = document.querySelectorAll('body, a, #button, #nav, .lien, .fondViolet,.ecritureBlanche, .ecritureBeige, .backgroundFiche, .arrowMode, .popup, .menuBurger');
        elements.forEach(element => {
            element.classList.add('dark-mode');
            element.classList.remove('light-mode')

        });
        selecMoon.src = "icones/moonBlack.svg"
        selecLogo.src="icones/trone2.svg"
        selecBurger.src="icones/menuWhiteBurger.svg"
        localStorage.setItem("mode", 'dark-mode');
        console.log(localStorage.getItem("mode"))

        
        for (var i = 0; i < selecAvion.length; i++) { // la boucle for est utilisée pour parcourir tous les éléments HTML avec la classe "image" sélectionnés par querySelectorAll(), et leur donner la couleur souhaitée jusqu'à ce que la condition dans l'en-tête de la boucle (i < images.length) ne soit plus vraie
            selecAvion[i].src = "icones/avionWhite.svg"; // change l'attribut "src" de chaque élément en "avionBlack.svg"
            
        }
       


    }


    function lightMode() {
        const elements = document.querySelectorAll('body, a, #button, #nav, .lien, .fondViolet,.ecritureBlanche, .ecritureBeige, .backgroundFiche, .arrowMode, .popup, .menuBurger');
        elements.forEach(element => {
            element.classList.add('light-mode');
            element.classList.remove('dark-mode')

        });

        selecMoon.src = "icones/moonWhite.svg"
        selecLogo.src="icones/trone.svg"
        selecBurger.src="icones/menuBlackBurger.svg"
        localStorage.setItem("mode", 'light-mode')
        console.log(localStorage.getItem("mode"))
        for (var i = 0; i < selecAvion.length; i++) {
            selecAvion[i].src = "icones/avionBlack.svg"; // change l'attribut "src" de chaque élément en "avionWhite.svg"
        }


    }



    //Je change le mode et l'image des icones svg 

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

    // function refresh(){        /*Je fais refresh la page dès que je resize pour ue lqa largeur du slider soit ok même lorsque l'on franchit une largeur d'écran de 600px*/ 
    //     window.location.reload();
    // }

    // window.addEventListener('resize', refresh);

    //J'ai finalement décidé de ne pas mettre cette fonction car le fait de faire actualiser en permanence le site fait qu'il clignotte à cause du mode jour/nuit


    var menuBurger=document.querySelector(".menuBurger");

    selecBurger.addEventListener('click',function (){
        var burgerStyle = window.getComputedStyle(menuBurger);

        if(burgerStyle.display=="none"){
            menuBurger.style.display="flex";
        }else{
            menuBurger.style.display="none";
        }

        if (burgerStyle.right == "-300px") {
            menuBurger.style.right = "0px"; // Ferme le menu en le faisant sortir de l'écran à droite
          } else {
            menuBurger.style.right = "-300px"; // Ouvre le menu en le déplaçant vers la position visible à droite
          }
        
    })




  

})
