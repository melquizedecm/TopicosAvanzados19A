function Inventario(){
  var doc = new jsPDF();
  doc.text(15, 20, "Inventario");
  doc.text('Inventario: \r Nombre    Existencia fisica     \r Lappiz________________________\rBorrador________________________\rCocaCola________________________.',150,120,'center');

  doc.save('Inventario.pdf');
}
