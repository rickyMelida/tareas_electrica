function agregar() {
    window.open('agregar.php', '_self');
}

function pendientes() {
    window.open('pendientes.php', '_self');
}

var tecnicos = document.getElementsByClassName('tecnicos');
var horas = document.getElementsByClassName('horas');
var n_tecnicos = document.getElementsByClassName('n_tecnicos');
var horas = document.getElementsByClassName('horas');

window.addEventListener('load', deshabilitar_t);

function habilitar_t() {
    for (var i = 0; i < tecnicos.length; i++) {
        tecnicos[i].disabled = false;
        horas[i].disabled = false;
        horas[i].placeholder = 'hh:mm';
        n_tecnicos[i].getElementsByClassName.color = 'black';
    }
}


function deshabilitar_t() {
    for (var i = 0; i < tecnicos.length; i++) {
        tecnicos[i].disabled = true;
        horas[i].disabled = true;
        tecnicos[i].checked = 0;        
        n_tecnicos[i].getElementsByClassName.color = 'gray';
    }

}