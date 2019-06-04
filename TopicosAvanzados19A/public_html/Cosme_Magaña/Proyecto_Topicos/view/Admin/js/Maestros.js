//Editar Evento pasando el valor del id de tables.php en el apartado de edita
function editarMaestros(){
  var id=document.getElementById("campo0").value;
  var nombre=document.getElementById("campo1").value;
  var apellido_p=document.getElementById("campo2").value;
  var apellido_m=document.getElementById("campo3").value;
  var grado=document.getElementById("campo4").value;
  var nivel=document.getElementById("campo6").value;
  var telefono=document.getElementById("campo5").value;
  $.post('../../controller/Maestros.php', //pasando las variablea¿s a controller eventos.php
  {
    'id':id,
    'nombre':nombre,
    'apellido_p':apellido_p,
    'apellido_m':apellido_m,
    'grado':grado,
    'nivel':nivel,
    'telefono':telefono,
    'action':"update" //accion que hara proveniente de controller
  });
  location.reload(true);
}
function idMaestros(id){
  document.getElementById("campo0").value=id;
}
//Agregar Maestro pasando el valor del id de tables.php en el apartado de crear
function agregarMaestro(){
  var nombre=document.getElementById("agregarNomM").value;
  var apellido_p=document.getElementById("agregarAp").value;
  var apellido_m=document.getElementById("agregarAm").value;
  var grado=document.getElementById("agregarGrad").value;
  var nivel=document.getElementById("agregarNiv").value;
  var telefono=document.getElementById("agregarTel").value;

  $.post('../../controller/Maestros.php', //pasando las variablea¿s a controller eventos.php
  {
    'nombre':nombre,
    'apellido_p':apellido_p,
    'apellido_m':apellido_m,
    'grado':grado,
    'nivel':nivel,
    'telefono':telefono,
    'action':"create" //accion que hara proveniente de controller
  });

  location.reload(true);
}

function idMaestrosD(id){//tomar el id pordefault
    document.getElementById("campo0D").value=id;
}

function eliminarM(){ //tomar el id pordefault
    var id=document.getElementById("campo0D").value;

    $.post('../../controller/Maestros.php', //pasando las variablea¿s a controller eventos.php
    {
      'id':id,
      'action':"delete"  //accion que hara proveniente de controller
    });
      location.reload(true);

}
