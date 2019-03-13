/* Martes 12 de Marzo del 2019 */
$('#button').click(function(){
  var doc=newjdPDF();
  var name=$('#name').val();
  var carrera=$('#carrera').val();
  var semestre=$('#semestre').val();
  var matricula=$('#matricula').val();
  var fecha=$('#fecha').val();
  doc.text(15,20, "Hola :" +name+ matricula);
  doc.save('justification.pdf');
})
