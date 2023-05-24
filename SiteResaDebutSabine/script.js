document.addEventListener("DOMContentLoaded", function () {


// MISE EN PLACE DU SLIDER
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


    function retourFin() {
        position = maxPosition;
        jsphotos.style.transition = '0s'
        jsphotos.style.left = position * -100 + "vw";

        setTimeout(function () {
            position = maxPosition - 1;
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




    function decaleDroite() {
        position--
        jsphotos.style.left = position * -100 + "vw";

        if (position == minPosition) {
            retourFin()
        }

    }

    setInterval(decaleGauche, 4000) //Je veux que la photo change automatiquement toutes les 4secondes












})

