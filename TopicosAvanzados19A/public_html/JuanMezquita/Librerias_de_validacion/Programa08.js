var nume= 0; //= document.getElementById("inputGrupo").value;
var numf=0;

function getEnteros(){
      while(true){
        num=Number(prompt("escribe un numero entero"));
        if(num %1===0){
            alert("numero aceptado");
          break;
        }else{
          alert("debes escribir un numero entero");
        }
      }
}

function getFlotante(){
      while(true){
        numf=Number(prompt("escribe un numero con decimales"));
        if(numf %1===!0){
            alert("numero aceptado");
          break;
        }else{
          alert("debes escribir un numero con decimales");
        }
      }
}

function Rango() {
  /* aqui se inician las variables*/
var rango=10;
    /* for para ingresar los datos en un arreglo */

        while (true) {
            rango = prompt("escribe un numero entre 1 y 20");

            if (rango % 1 === 0 && rango >= 1 && rango <= 20) {
                alert("numero aceptado");
                break;
            } else {
                alert("Numero fuera del rango");
            }
        }
}

function minusculas(){

  String cadena;
  
  for (int i = 0; i < cadena.length; i++){
      char letra = cadena.charAt(i);
      //Tratamiento del caracter
  }

}
