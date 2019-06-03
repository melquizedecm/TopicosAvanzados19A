
//Authors: Francisco Montalvo
//Jesus Lira
//Cosme Magaña
//Description: JAVA SCRIPT PAGOS




//funcion para enviar IDS


function deletee(id){
  document.getElementById("InputId").value=id;

}

function eliminarPago(){
  var idpago=document.getElementById("InputId").value;
  var idpago1=parseInt(idpago);

  $.post('../../controller/pagosu1.php',
  {
    'id_m':idpago1,
    'action':'eliminar'
  });
  location.reload(true);
}


//funcion para agregar pagos 

function agregarPago(){
  var matricula=document.getElementById("matriculapago").value;
  var monto=document.getElementById("montopago").value;
  var fechapago=document.getElementById("fechapago").value;
  $.post('../../controller/pagosu1.php',
  {
    'monto':monto,
    'fecha':fechapago,
    'matricula':matricula,
    'action':'create'
  });
  location.reload(true);
}
