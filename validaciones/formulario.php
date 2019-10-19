<?php
    require_once "validar_horario.php";
    require_once "conexionBD.php";
    require_once "metodos_crud.php";
    require_once "../procesos/tecnicos.php";

    //Guardamos los datos que vinieron desde el formulario
    $tipo_tr = $_POST['t_trabajo'];
    $estado_tr = $_POST['estado'];


    $turno = $_POST['turno'];

    //Cambiar el nombre del turno por manhana
    if($turno == "Mañana") {
        $turno = "Manhana";
    }

    $hora_inicial = $_POST['h_inicial'];
    $hora_final = $_POST['h_final'];

    $horas_hombre = $_POST['res_hh'];

    $descripcion = $_POST['descripcion'];

    $tecnicos = isset($_POST['tecnico']) ? $_POST['tecnico'] : null; 
    //$cargo = 
    error_reporting(0);


    //Guardamos la fecha que extraemos del sistema
    $fecha = date("d")."-".date("m")."-".date("Y");

    if($estado_tr == "pendiente" && empty($descripcion)) {
        echo "<script>alert('Faltan completar el pendiente'); window.open('../src/agregar.php','_self');</script>";
        error_reporting(0);

        
    }else {
        if( $estado_tr == "finalizado" && $hora_inicial=="" && $hora_final=="" && empty($descripcion) ) {
            echo "<script>alert('Faltan completar el pendiente'); window.open('../src/agregar.php','_self');</script>";        
        }
    
    
        $arrayTecnicos = null;
    
        $num_array = count($tecnicos);
        $contador = 0;
    
        if($num_array > 0) {
            foreach($tecnicos as $key => $value) {
                if($contador != $num_array-1) {
                    $arrayTecnicos .= $value. ' ';
                }else {
                    $arrayTecnicos .= $value;
                    $contador ++;
                }
            }
        }
    
        $obj = new metodos();
    
        $datos = array($tipo_tr, $descripcion, $fecha, $hora_inicial, $hora_final, $horas_hombre, $estado_tr, $turno, $arrayTecnicos, $cargo);
        if($obj->agregar($datos) == 1) {
            echo "<script>alert('Se agrego a la BD'); window.open('../src/agregar.php','_self');</script>";        
        }
    
        echo "El tipo de trabajo es ".$tipo_tr. "<br>";
    
        echo "Descripcion : ".$descripcion."<br>";
    
        echo "En la fecha ". $fecha. "<br>";
    
        echo "Se inicio a las " . $hora_inicial."<br>";
    
        echo "Termino a las " . $hora_final."<br>";
    
        echo "<br>Horas hombre: ".$horas_hombre."<br>";
    
        echo "Estado: ". $estado_tr ."<br>";
    
        echo "Turno: ".$turno."<br>";
    
        
        echo "Los tecnicos son ".$arrayTecnicos."<br>";
    
        echo "Cargo: ";    

    }

    

?>