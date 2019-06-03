//Editar Evento pasando el valor del id de tables.php en el apartado de edita
function editarEventos(){
  var id=document.getElementById("campo0").value;
  var nombre=document.getElementById("campo1").value;
  var lugar=document.getElementById("campo2").value;
  var fecha=document.getElementById("campo3").value;
  var hora=document.getElementById("campo4").value;
  var nivel=document.getElementById("campo5").value;

  $.post('../../controller/eventos.php', //pasando las variablea¿s a controller eventos.php
  {
    'id':id,
    'nombre':nombre,
    'lugar':lugar,
    'fecha':fecha,
    'hora':hora,
    'nivel':nivel,
    'action':"update" //accion que hara proveniente de controller
  });
  location.reload(true);
}
function ideventos(id){

  document.getElementById("campo0").value=id;
}

function ideventosD(id){//tomar el id pordefault
    document.getElementById("campo0D").value=id;
}
//Agregar Evento pasando el valor del id de tables.php en el apartado de crear
function agregarEvento(){
  var nombre=document.getElementById("agregarNom").value;
  var lugar=document.getElementById("agregarLug").value;
  var fecha=document.getElementById("agregarFec").value;
  var hora=document.getElementById("agregarHor").value;
  var nivel=document.getElementById("agregarNiv").value;

  $.post('../../controller/eventos.php', //pasando las variablea¿s a controller eventos.php
  {
    'nombre':nombre,
    'lugar':lugar,
    'fecha':fecha,
    'hora':hora,
    'nivel':nivel,
    'action':"create" //accion que hara proveniente de controller
  });

  location.reload(true);
}



function eliminarE(){ //tomar el id pordefault
    var id=document.getElementById("campo0D").value;

    $.post('../../controller/eventos.php', //pasando las variablea¿s a controller eventos.php
    {
      'id':id,
      'action':"delete"  //accion que hara proveniente de controller
    });
      location.reload(true);

}
