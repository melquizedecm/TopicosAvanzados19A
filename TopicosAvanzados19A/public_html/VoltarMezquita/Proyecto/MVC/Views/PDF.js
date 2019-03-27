function Inventario(){
  var doc = new jsPDF();
  doc.text(15, 20, "Inventario");
  doc.text('Atentamente: \rServicios Escolares\r________________________\rFirma de responsable.',150,120,'center');

  doc.save('Inventario.pdf');
}
