/* descrpcion: programa para leer calificaciones de un grupo
 * 1: leer n(tamaño de grupo). tener calificacion
 * 2: conservar las calificaiones[arreglo]. calcular el promedio
 * (sumar las calificaciones y dividir ente n)
 * 3: imprimir las calificaciones. imprimir el promedio
 */
var n;
var cal=[];
var suma=0;
var promedio;
var i;

leerCalificaciones();

function leerCalificaciones(){
    alert("ESTOY EN LA FUNCION"); //imprimir
    n=prompt("escribe un numero"); //leer un nnumero
    alert(n); //imprimir n
    
    do{ 
     n=prompt("escribe un numero");  
    }while(n>0);
    
    /*do{
      n= prompt("escribe la cantidad de calificaciones");  
         
    }while (!((Number.isInteger(n)) && (n>0)));
        alert(n);
    
   // document.write("aqui pongo el mensaje a imprimir"); //imprimir en la pagina
   //prompt(); //leer
   }*/
    }


