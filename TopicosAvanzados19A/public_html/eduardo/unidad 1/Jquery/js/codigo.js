<!--
Sours:          Programa13.html
Description:    uso de libreria de jquery
Date:           18/marzo/2019
nombre          eduardo suaste uh
-->

//js del ejemplo 1 (su funcion de este ejemplo es cambiar el clor del cuadro de color por medio de un click

//ejemplo para ver la diferencia entre un codigo nativo y uno simplificado usando jquery

//javascript nativo

/*var caja = document.querySelector("#caja");
caja.addEventListener("click",cambiarColor);

function cambiarColor(){
    
    caja.style.background = "red";
}*/

//javascript jquery
$("#caja").click(function(){
    
    $("#caja").css({"background":"green", 
        "width":"400px", 
        "height":"100px"});
    
});

