document.addEventListener("DOMContentLoaded", function (){

    var petitesPhotos = document.querySelectorAll('.petite');

    // Je parcoure toutes mes images et ajoute un gestionnaire de clic à chacun
    petitesPhotos.forEach(function(petitePhoto) {
      petitePhoto.addEventListener('click', function() {
        // Je récupère l'URL de l'image de fond de la photo principale
        var photoPrincipale = document.querySelector('.photoPrincipale');
        var photoPrincipaleURL = window.getComputedStyle(photoPrincipale).backgroundImage;
    
        // Je récupère l'URL de l'image de fond de l'image "petite" cliquée
        var petitePhotoURL = window.getComputedStyle(petitePhoto).backgroundImage;
    
        // J'échange les URL des images de fond
        photoPrincipale.style.backgroundImage = petitePhotoURL;
        petitePhoto.style.backgroundImage = photoPrincipaleURL;
      });
    });



    //Je mets en place mon popup pour le formulaire

    var reservation = document.querySelector('.boutonReserve');

    var popup = document.querySelector('.popup'); //popup pour le formulaire
    var retour =  document.querySelector('.retourDest');
    var body=document.querySelector("#body");

    var largeurEcran = window.innerWidth;

    var selecFooter= document.querySelector('.footer');

    function affichePopup(){
      reservation.addEventListener('click', function (event) {
          popup.classList.add('popup-visible');
          popup.classList.remove('popup-invisible');
          selecFooter.style.display="none";
          body.style.overflowY="hidden";
          
          

          });
      }


  // Pour que le formulaire disparaisse quand on clique sur retour

    function enlevePopup(){
      retour.addEventListener('click', function (event) {


          popup.classList.add('popup-invisible');
          popup.classList.remove('popup-visible');
          selecFooter.style.display="block";
          

          console.log('popup enlvé');
        });
    }

    affichePopup();
    enlevePopup();

    var selecQte = document.querySelectorAll('.qteTotale');
    var qté = document.getElementById('nombre-billets');
    console.log(qté)
    var prixTotal = document.getElementById('prixTotal');

    function PrixTotal() {
      var currentQte = qté.value; 
      console.log(currentQte);
      var total = currentQte * prixInitial;

      prixTotal.textContent = total + '€';
    };


    function incrementer() {
      var increment=document.querySelector('.increment');
      var input = document.getElementById('nombre-billets');

      increment.addEventListener('click', function(){
        input.stepUp(1);
        PrixTotal();
      })
      
    }
    
    function decrementer() {
      var decrement=document.querySelector('.decrement');
      var input = document.getElementById('nombre-billets');

      decrement.addEventListener('click', function(){
        input.stepDown(1);
        PrixTotal();
      })
      
    }

    incrementer();
    decrementer();





})