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

    $descripcion = $_POST['descripcion'];

    //Guardamos la fecha que extraemos del sistema
    $fecha = date("Y")."-".date("m")."-".date("d");

    


    if(validarHora($hora_inicial)) {
        $h_ini_val = $hora_inicial;
    }else {
        echo "<script>alert('Hora no valido');
        Location.href = '../src/agregar.php';
        </script>";
    }

    if(validarHora($hora_final)) {
        $h_fin_val = $hora_final;
    }else {
        echo "<script>alert('Hora no valido');
            Location.href = '../src/agregar.php';
        </script>";
    }


	$hours_i = array();
	$hours_f = array();

	$hours_i = horas($h_ini_val);
	$hours_f = horas($h_fin_val);


	$hrs_i = $hours_i[0];
	$min_i = $hours_i[1];

	$hrs_f = $hours_f[0];
	$min_f = $hours_f[1];

	$hrs_h = $hrs_f - $hrs_i;
	$min_h = $min_f - $min_i;

    $horas_hombre = $hrs_h.":".$min_h;
    $datos = array($tipo_tr, $descripcion, $fecha, $hora_inicial, $hora_final, $horas_hombre, $estado_tr, $turno, $tecnico_1);

    /*
    $obj = new metodos();
    if($obj->agregar($datos) == 1) {
        echo "<hr><br>Se agrego los datos correctamente";
    }else {
        echo "<hr><br>No se pudo agregar los datos";

    }*/
    echo "Se inicio a las " . $hora_inicial."<br>";
    echo "Termino a las " . $hora_final."<br>";

    echo "<br>Texto de prueba y la hora es ".$horas_hombre;
?>