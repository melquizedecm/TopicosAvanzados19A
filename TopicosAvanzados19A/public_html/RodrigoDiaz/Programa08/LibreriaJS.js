var x;
var y;
var z;
var zz;
//Validar Enteros
function  Entero(valor){
  //Validamos si es un número
     if(isNaN(valor)){
       return NaN;
       // validamos si es entero si no retornara falso
     }else if(valor%1==0){
            return true;
     }else{
       return false;

     }
}

//Validar Flotantes
function Flotante(valor){

  //Validamos si es un número
  if(isNaN(valor)){
    return NaN;
    //validamos que sea flotante de lo contrario retorna falso
  }else if(valor%1!=0){
          return true;
   }else{
     return false;
   }
}
//Validar Mayusculas
function Mayusculas(letras){
  //Variable para retornar valor true or false segun el caso
  var band=false;
  //Ciclo for para recorrer toda la cadena
  for(var index = 0; index < letras.length; index++){
    var letraActual = letras.charAt(index);
    //Si algun valor es minuscula se vuelve falso y se sale del ciclo for
    if(letraActual!=letraActual.toUpperCase()){
        band=false;
        break;
    }else{
      band=true;
    }
  }
  return band;
}
//Validar Minusculas
function Minusculas(letras){
  //Variable para retornar valor true or false segun el caso
  var band=false;
  //Ciclo for para recorrer toda la cadena
  for(var index = 0; index < letras.length; index++){
    var letraActual = letras.charAt(index);
    //Si algun valor es mayusucla se vuelve falso y se sale del ciclo for
    if(letraActual!=letraActual.toLowerCase()){
        band=false;
        break;
    }else{
      band=true;
    }
  }
  return band;
}
//Validar Rango
function Rango(valor, x,y){
  //Validamos si alguno de los valores no es número
  if(isNaN(valor) || isNaN(x) || isNaN(y)){
    return NaN;
  }
  /*Comparamos los 2 parametros del rango para saber cual es mayor o cual es menor
   y en función de eso comparamos los valores con el rango*/
  if(x<y){
    if(valor <=y && valor>=x){
      return true;
    }else{
      return false;
    }
  }else{ if(y<x){
    if(valor <=x && valor>=y){
      return true;
    }else{
      return false;
    }
  }
}
}
//funcion  la cual segun el caso pedira valores y llamara a los metodos asignados
function pedirnum(opcion){

  switch (opcion) {
    case 'a':
    x=prompt("Ingresa un valor entero");
     zz=Entero(x);
     comparar(zz);
      break;
      case 'b':
      x=prompt("Ingresa un valor float");
       zz=Flotante(x);
       comparar(zz);
        break;
        case 'c':
        x=prompt("Ingresa una palabra en mayusculas");
         zz=Mayusculas(x);
         comparar(zz);
          break;
          case 'd':
          x=prompt("Ingresa una palabra en minusculas");
           zz=Minusculas(x);
           comparar(zz);
            break;
            case 'e':
            x=prompt("Ingresa rango superior");
            y=prompt("Ingresa rango inferior");
            z=prompt("Ingresa numero dentro del rango");
             zz=Rango(z,x,y);
             comparar(zz);
              break;

    default:

  }

}

//Metodo el cual compara los resultados booleanos y arroja un mensaje
function comparar(result){

if (result){
  alert("Dato correcto");
}else{
  alert("dato incorrecto");
}

}
