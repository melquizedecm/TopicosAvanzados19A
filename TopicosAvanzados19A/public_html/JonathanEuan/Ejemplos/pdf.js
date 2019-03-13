function linea(){
  var doc = new jsPDF();
  doc.line(20, 10, 0, 20);
  doc.addPage();
  doc.save('ejemplo.pdf');
}

function image(){
  var pdf = new jsPDF();
     var img= '';

     pdf.addImage(img, 'JPEG', 15, 40, 180, 160);
     pdf.save('image.pdf');
}
