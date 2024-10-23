document.addEventListener("DOMContentLoaded", function () {


// MISE EN PLACE DU SLIDER INFINI
    var jsphotos = document.querySelector('.js-photos')

    var allReelPhotos = document.querySelectorAll('.photoslider.reel');
    var minPosition = 0
    var position = 1
    var maxPosition = allReelPhotos.length + 1;


    window.addEventListener('resize', function(){
        jsphotos.style.transition = '0s';
        nav.style.transition='0s';

        setTimeout(function() {
           nav.style.transition = "0.5s ease-in-out";  //Pour que la transition se remtte bien sur le nav
          }, 1000);


        // nav.style.transition='0s' Pour que le menu ne bouge pas au resize  (mais comment faire pour que cela se remette normal quand on ne resize pas ?)       
    })


    // window.addEventListener('resize', function(){     // Fonction pour que la valeur de photoWidth change au resize
    //     photoWidth=sliderGlobalContainer.style.offsetWidth;
    //     jsphotos.style.left=position*-photoWidth+"px";
    // })

    function retourDebut() {
        position = minPosition;
        jsphotos.style.transition = '0s'
        jsphotos.style.left = "0px";

        setTimeout(function () {
            position = minPosition + 1;
            jsphotos.style.transition = 'left 0.6s ease-out';
            jsphotos.style.left = position * -100 + "vw";
        }, 20)

    }


    function decaleGauche() {
        position++
        jsphotos.style.left = position * -100 + "vw";


        if (position == maxPosition) {
            retourDebut()
        }
    }

    setInterval(decaleGauche, 4000) //Je veux que la photo change automatiquement toutes les 4secondes





// MISE EN PLACE DU CARROUSEL INFINI POUR LORSQU'IL Y A 3 CARTES OU 1 SELON LA LARGEUR D'ECRAN
    var cartesContainer = document.querySelector('.cartesContainer')

    var allReelCartes = document.querySelectorAll('.miniFicheDest.reel');
    var minPosition2 = 2;
    var position2 = 3;
    var maxPosition2 = 9;


    window.addEventListener('resize', function(){
        cartesContainer.style.transition = '0s';
        
    })


    function retourDebut2() {
        if(window.innerWidth<640){
            position2 = minPosition2;
            cartesContainer.style.transition = '0s';
            cartesContainer.style.left=position2 * -72  + "vw";;
            
        
            setTimeout(function () {
                position2 = minPosition2 + 1;
                cartesContainer.style.transition = 'left 0.6s ease-out';
                cartesContainer.style.left = position2 * -72 + "vw";
            }, 20)
        }

        else{
            position2 = minPosition2;
            cartesContainer.style.transition = '0s';
            cartesContainer.style.left=position2 * -27  + "vw";;
            
        
            setTimeout(function () {
                position2 = minPosition2 + 1;
                cartesContainer.style.transition = 'left 0.6s ease-out';
                cartesContainer.style.left = position2 * -27 + "vw";
            }, 20)
        }
    
    }

    function retourFin2 () {
        if(window.innerWidth<640){
            position2 = maxPosition2-1;
            cartesContainer.style.transition = '0s';
            cartesContainer.style.left = position2 * -72  + "vw";

            setTimeout( function () {
                position2 = maxPosition2 - 2;
                cartesContainer.style.transition = 'left 0.6s ease-out';
                cartesContainer.style.left = position2 * -72  + "vw";
            },20)
        }
        
        else{
            position2 = maxPosition2-1;
            cartesContainer.style.transition = '0s';
            cartesContainer.style.left = position2 * -27  + "vw";

            setTimeout( function () {
                position2 = maxPosition2 - 2;
                cartesContainer.style.transition = 'left 0.6s ease-out';
                cartesContainer.style.left = position2 * -27  + "vw";
            },20)
        }
    }


    function decaleGauche2() {
        if(window.innerWidth<640){
            position2++
            cartesContainer.style.left = position2 * -72 + "vw";
            cartesContainer.style.transition = 'left 0.6s ease-out';
        }

        else{
            position2++
            cartesContainer.style.left = position2 * -27 + "vw";
            cartesContainer.style.transition = 'left 0.6s ease-out';
        }
        


        if (position2 == maxPosition2) {
            retourDebut2()
        }
    }


    function decaleDroite2() {
        if(window.innerWidth<640){
            position2--
            cartesContainer.style.left = position2 * -72 + "vw";
            cartesContainer.style.transition = 'left 0.6s ease-out';
        }
        else{
            position2--
            cartesContainer.style.left = position2 * -27 + "vw";
            cartesContainer.style.transition = 'left 0.6s ease-out';
        }
        

        if (position2 <minPosition2) {
            retourFin2()
        }

        

    }


    //J'active le carrousel au clic sur les flèches à droite et à gauche

    var flecheDecaleGauche = document.querySelector('.arrowMode.droite');
    var flecheDecaleDroite = document.querySelector('.arrowMode.gauche');

    flecheDecaleGauche.addEventListener('click', function() {
    decaleGauche2();
    });

    flecheDecaleDroite.addEventListener('click', function() {
    decaleDroite2();
    });


    



})

