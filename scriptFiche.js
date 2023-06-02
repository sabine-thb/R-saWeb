document.addEventListener("DOMContentLoaded", function () {

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

    



})