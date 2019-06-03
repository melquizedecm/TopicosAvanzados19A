function mostrarMaes() {
    m=document.getElementById("mstr").style.display = "inline";
    if(m=="inline"){
      document.getElementById("pagos").style.display = "none";
      document.getElementById("eventos").style.display = "none";
      document.getElementById("info").style.display = "none";
    }

}
function mostrarPag() {
    p=document.getElementById("pagos").style.display = "inline";
    if(p=="inline"){
      document.getElementById("mstr").style.display = "none";
      document.getElementById("eventos").style.display = "none";
      document.getElementById("info").style.display = "none";
    }
}

function mostrarEven() {
    e=document.getElementById("eventos").style.display = "inline";
    if(e=="inline"){
      document.getElementById("pagos").style.display = "none";
      document.getElementById("mstr").style.display = "none";
      document.getElementById("info").style.display = "none";
    }
}

function mostrarInfo() {
    e=document.getElementById("info").style.display = "inline";
    if(e=="inline"){
      document.getElementById("eventos").style.display = "none";
      document.getElementById("pagos").style.display = "none";
      document.getElementById("mstr").style.display = "none";
    }
}
