function Inventario(){
  var doc = new jsPDF();
  doc.text(15, 20, "Inventario");
  doc.text(20,30,"\r Nombre    Existencia fisica     \r Lappiz________________________\rBorrador________________________\rCocaCola________________________.");

  doc.save('Inventario.pdf');
}
