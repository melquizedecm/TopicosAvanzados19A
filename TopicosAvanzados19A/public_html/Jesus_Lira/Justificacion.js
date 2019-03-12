
  $('#button').click(function(){
  var doc = new jdPDF();
  var name=$('#name').val();
  var carrera=$('#carrera').val();
  var semestre=$('#semestre').val();
  var matricula=$('#matricula').val();
  var fecha=$('#fecha').val();
  doc.text(15, 20, "Por este medio se le informa que el alumno "+name+"\rcon matricula "+matricula+" de la carrea de "+carrera+"\rcursando actualmente el "+semestre+" semestre no pudo asistir a clases\ren la fecha "+fecha+" por cuestiones ajenas a el.\rEsperemos considere la asistencia en la fecha emitida.");
  doc.text('Atentamente: \rServicios Escolares\r\r________________________\r\rFirma de responsable.',150,120,'center');
   doc.save('justificacion.pdf');
 });
