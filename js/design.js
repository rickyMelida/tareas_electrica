function agregar() {
    window.open('agregar.php', '_self');
}

function pendientes() {
    window.open('pendientes.php', '_self');
}

function estado_trabajo() {
    for(var i=0; document.formulario.estado.length; i++) {
        if(document.formulario.estado[i].checked) 
            break;
    }

    var estado = document.formulario.estado[i].value;

    if(estado = "pendiente") {
        document.getElementById('tecnico_1').disabled=true;
    }else if(estado == "finalizado"){
        document.getElementById('tecnico_1').disabled=false;
    }
}