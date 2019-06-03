
//Authors: Francisco Montalvo
//Jesus Lira
//Cosme Magaña
//Description: Java Script de Trabajadores

//funcion para agregar nueva contraseña

function newPass(){
  var pass=document.getElementById("newpass").value;
  var id=document.getElementById("mattrab").value;

  $.post('../../controller/Trabajadores1.php',
    { 'matricula':id,
      'pass':pass,
      'action':'pass'
    },function(data, status){
        alert(data + " --- " + status);
    });
    location.reload(true);

}
