
function newPass(){
  var pass=document.getElementById("newpass").value;
  var id=document.getElementById("mattrab").value;
  alert(id);
  $.post('../../controller/Trabajadores1.php',
    { 'matricula':id,
      'pass':pass,
      'action':'pass'
    },function(data, status){
        alert(data + " --- " + status);
    });
    location.reload(true);

}
