document.addEventListener("DOMContentLoaded", function () {

    var jsphotos = document.querySelectorAll('.js-photos')
    jsphotos.forEach(function(element){
        element.dataset.minPosition=0;
        element.dataset.position=0;
        element.dataset.maxPosition=1;
    })

    var largeurEcran = window.innerWidth;


    function retourDebut(element) {
        element.style.left = "0vw";
        
        element.dataset.position = element.dataset.minPosition;

    }

    function decaleGauche(element) {
        element.dataset.position++ 
        var position=element.dataset.position;

        if (largeurEcran<=600){
            element.style.left = position * -85 + "vw";   
        }else{
            element.style.left = position * -40 + "vw";
  
        }

        console.log(position)
        console.log(element.dataset.maxPosition)
        if (position > element.dataset.maxPosition) {
            retourDebut(element)
        }


    }


    var rightarrow = document.querySelectorAll(".js-btn-decale-gauche");

    rightarrow.forEach(function(element){
        element.addEventListener('click', function (event) {
        
        var targetElement = event.target;

        var id = targetElement.id.replace("f","");

        if(id==""){
            id=targetElement.querySelector(".arrow").id.replace("f","");
        }
        var jsPhotosElement = document.querySelector('#js-photos-' + id);

        decaleGauche(jsPhotosElement);
        })
    })


    // setInterval(decaleGauche, 2000);


    //setInterval(decaleDroite, 2000) Si je veux que mon slider aille à droite tout seul, je met ce setInterval et j'initialise mon left à -1000


   
})