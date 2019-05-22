
function mostrarAlumn() {
    document.getElementById("alumn").style.display = "inline";
}

function mostrarMaes() {
    document.getElementById("maes").style.display = "inline";
}

function mostrarTrab() {
    document.getElementById("trab").style.display = "inline";
}

function mostrarPag() {
    document.getElementById("pag").style.display = "inline";
}

function mostrarEven() {
    document.getElementById("even").style.display = "inline";
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
