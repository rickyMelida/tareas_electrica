<?php
    require_once "validar_horario.php";
    require_once "conexionBD.php";
    require_once "metodos_crud.php";
    require_once "../procesos/tecnicos.php";

    //Guardamos los datos que vinieron desde el formulario
    $tipo_tr = $_POST['t_trabajo'];
    $estado_tr = $_POST['estado'];

    $tecnico_1 = $_POST['tecnico_1'];
    $tecnico_2 = $_POST['tecnico_2'];
    $tecnico_3 = $_POST['tecnico_3'];

    $turno = $_POST['turno'];

    if($turno == "Mañana") {
        $turno = "Manhana";
    }

    $hora_inicial = $_POST['h_inicial'];
    $hora_final = $_POST['h_final'];

    $horas_hombre = $_POST['h_hombre'];

    $descripcion = $_POST['descripcion'];

    //Guardamos la fecha que extraemos del sistema
    $fecha = date("d")."-".date("m")."-".date("Y");

    

    echo "Se inicio a las " . $hora_inicial."<br>";
    echo "Termino a las " . $hora_final."<br>";

    echo "<br>Texto de prueba y la hora es ".$horas_hombre."<br>";

    echo "En la fecha ". $fecha;
?>