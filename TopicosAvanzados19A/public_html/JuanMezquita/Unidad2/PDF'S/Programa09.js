function linea(){
  var doc = new jsPDF();
  doc.line(20, 10, 0, 20);
  doc.addPage();
  doc.save('ejemplo.pdf');
}

function circulo(){

var pdf = new jsPDF();
pdf.ellipse(49,80,15,30);
pdf.save('circulo.pdf');
}
