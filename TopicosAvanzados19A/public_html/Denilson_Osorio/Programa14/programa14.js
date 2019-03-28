/*DOCTYPE JavaScript
Nombre: Jesus Alberto Lira Romero
Profesor: Melquizedec Moo Medina
Programa: Programa14.js
          Hipodromos
Description: funciones de programa14.html
Fecha: 18/mar/2019
*/
    /*Funcion para el recorrido de los caballos*/
      function caballo(nombreCaballos,metros, fin){ //(nobreDelCaballo/metros contando/final del recorrifdo)
        var nombre="";
        var i=0;
        while(i<=fin){
            nombre=document.getElementById(nombreCaballos).value;
        document.getElementById(metros).value= nombre + " " + i + "mts";
        i++;
        }

        alert("Gano el caballo: "+nombre);


      }
      /*Reorrido individual de los caballos*/
    function ejecutar(){
      Concurrent.Thread.create(caballo,"inputCaballo1","metrosRecorridos1",100000);
      Concurrent.Thread.create(caballo,"inputCaballo2","metrosRecorridos2",100000);
      Concurrent.Thread.create(caballo,"inputCaballo3","metrosRecorridos3",100000);
    }
