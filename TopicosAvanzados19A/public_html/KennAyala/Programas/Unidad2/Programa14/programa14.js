function caballo(etiquetaNombre, metros, fin) {
	var contador = 0;
	var i = 0;
	while (i <= fin) {
		nombre = document.getElementById(etiquetaNombre).value;
		document.getElementById(metros).value = nombre + " " + i + "mts";
		i++;
	}
	nombre = document.getElementById(etiquetaNombre).vanlue;
	alert("Gano el caballo: " + nombre);

}

function ejecutar() {
	Concurrent.Thread.create(caballo, "inputCaballo1", "metrosRecorridos1",
			100000);
	Concurrent.Thread.create(caballo, "inputCaballo2", "metrosRecorridos2",
			100000);
	Concurrent.Thread.create(caballo, "inputCaballo3", "metrosRecorridos3",
			100000);
}
