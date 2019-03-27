
<?php // Rellenamos un array con nombres

$a[]="Pescado"; $a[]="pulpo"; $a[]="camaron"; $a[]="nolon"; $a[]="surimi"; $a[]="ceviche mixto"; $a[]="Gabriela";
$a[]="Dos X"; $a[]="Tecate"; $a[]="Sol"; $a[]="Indio"; $a[]="Heineken"; $a[]="Bud life"; $a[]="Corona"; $a[]="Superior";
$a[]="Capitan Morgan"; $a[]="Jonny Walker"; $a[]="Kraken"; $a[]="Smirnoff"; $a[]="Don Julio"; $a[]="Jose Cuervo";
$a[]="Bacardi";$a[]="Brandi";$a[]="Azteca Oro";$a[]="Presidente";$a[]="Margarita";$a[]="Daiquiri";$a[]="Piña Colada";
$a[]="Michelada";$a[]="Chelada";$a[]="Chamoychela";$a[]="Ojo Rojo";$a[]="Tecate Light";$a[]="Buchanas";
$a[]="Pollo"; $a[]="Puerco"; $a[]="Arroz"; $a[]="Coctel de Camaron"; $a[]="Caldo de pescado"; $a[]="empanizado de camaron";



// Rescatamos el parámetro q que nos llega mediante la url que invoca xmlhttp

$q=$_REQUEST["q"]; $hint="";



// Buscamos la coincidencia en el primer caracter entre nombres del array con el primer caracter de q

if ($q !== ""){

                $q=strtolower($q); $len=strlen($q);

    foreach($a as $name) {

                               if (stristr($q, substr($name,0,$len))) {

                                               if ($hint==="") { $hint=$name; }

                                               else { $hint .= ", $name"; }

      }

    }

  }

// Devolvemos "no hay sugerencias" si no se encuentran coincidencias

// o los datos en $hint (nombres separados por comas) si se encontraron coincidencias

echo $hint==="" ? "No hay sugerencias" : $hint;
