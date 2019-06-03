
function mostrarAlumn() {
    a=document.getElementById("alumn").style.display = "inline";
    if(a=="inline"){
      document.getElementById("trab").style.display = "none";
      document.getElementById("pag").style.display = "none";
      document.getElementById("maes").style.display = "none";
      document.getElementById("even").style.display = "none";
      document.getElementById("contraseña").style.display = "none";
      document.getElementById("info").style.display = "none";
    }
}

function mostrarMaes() {
    m=document.getElementById("maes").style.display = "inline";
    if(m=="inline"){
      document.getElementById("trab").style.display = "none";
      document.getElementById("pag").style.display = "none";
      document.getElementById("alumn").style.display = "none";
      document.getElementById("even").style.display = "none";
      document.getElementById("contraseña").style.display = "none";
      document.getElementById("info").style.display = "none";
    }

}

function mostrarTrab() {
    t=document.getElementById("trab").style.display = "inline";
    if(t=="inline"){
      document.getElementById("alumn").style.display = "none";
      document.getElementById("pag").style.display = "none";
      document.getElementById("maes").style.display = "none";
      document.getElementById("even").style.display = "none";
      document.getElementById("contraseña").style.display = "none";
      document.getElementById("info").style.display = "none";
    }
}

function mostrarPag() {
    p=document.getElementById("pag").style.display = "inline";
    if(p=="inline"){
      document.getElementById("trab").style.display = "none";
      document.getElementById("alumn").style.display = "none";
      document.getElementById("maes").style.display = "none";
      document.getElementById("even").style.display = "none";
      document.getElementById("contraseña").style.display = "none";
      document.getElementById("info").style.display = "none";
    }
}

function mostrarEven() {
    e=document.getElementById("even").style.display = "inline";
    if(e=="inline"){
      document.getElementById("trab").style.display = "none";
      document.getElementById("pag").style.display = "none";
      document.getElementById("maes").style.display = "none";
      document.getElementById("alumn").style.display = "none";
      document.getElementById("contraseña").style.display = "none";
      document.getElementById("info").style.display = "none";
    }
}

function mostrarInfo() {
    e=document.getElementById("info").style.display = "inline";
    if(e=="inline"){
      document.getElementById("trab").style.display = "none";
      document.getElementById("even").style.display = "none";
      document.getElementById("pag").style.display = "none";
      document.getElementById("maes").style.display = "none";
      document.getElementById("alumn").style.display = "none";
      document.getElementById("contraseña").style.display = "none";
    }
}

function ocultarInfo() {
    document.getElementById("alumn").style.display = "none";
}

function ocultarAlumn() {
    document.getElementById("alumn").style.display = "none";
}

function ocultarMaes() {
    document.getElementById("maes").style.display = "none";
}

function ocultarTrab() {
    document.getElementById("trab").style.display = "none";
}

function ocultarPag() {
    document.getElementById("pag").style.display = "none";
}

function ocultarEven() {
    document.getElementById("even").style.display = "none";
}

function contraseña() {
    c=document.getElementById("contraseña").style.display = "inline";
    if(c=="inline"){
      document.getElementById("trab").style.display = "none";
      document.getElementById("pag").style.display = "none";
      document.getElementById("maes").style.display = "none";
      document.getElementById("alumn").style.display = "none";
      document.getElementById("even").style.display = "none";
      document.getElementById("info").style.display = "none";
    }

    }

function ocultarContraseña(){
    document.getElementById("contraseña").style.display = "none";
}

function btnAceptar(){

}

                                      //Scripts de la tabla

$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();

	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;
			});
		} else{
			checkbox.each(function(){
				this.checked = false;
			});
		}
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
