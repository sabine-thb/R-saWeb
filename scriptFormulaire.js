document.addEventListener("DOMContentLoaded", function (){

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