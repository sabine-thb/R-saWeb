document.addEventListener("DOMContentLoaded", function (){

    var selecQte = document.querySelectorAll('.qteTotale');
    var qté = document.getElementById('nombre-billets');
    console.log(qté)
    var prixTotal = document.getElementById('prixTotal');

    qté.value = 1;

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

    //Je veux faire en sorte que je ne puisse pas réserver pour une date déjà passé
    document.getElementById("reservationForm").addEventListener("submit", function(event) {
      // Récupérer la date actuelle
      var dateActuelle = new Date();
    
      // Récupérer la date sélectionnée par l'utilisateur à partir du formulaire
      var dateSelectionnee = new Date(document.getElementById("date").value);
    
      // Comparer les dates (en utilisant la méthode getTime() pour comparer les timestamps)
      if (dateSelectionnee.getTime() < dateActuelle.getTime()) {
        alert("La date sélectionnée est déjà passée. Veuillez choisir une autre date.");
        event.preventDefault(); // Empêcher l'envoi du formulaire
      } else {
        // La date est valide, vous pouvez autoriser l'envoi du formulaire
        // ou effectuer d'autres actions de traitement ici
      }
    });
    
    


  


})