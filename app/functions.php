<?php
    function validar_usuario($user, $pass, $con) {
        if(!$con) {
            //Esto redirecciona al error de la BD

        }else {
            mysqli_set_charset($con,'utf8');
            $sql = "SELECT * from usuarios where usuario= '$user' and pass='$pass'";

            $resultado = mysqli_query($con, $sql);

            $filas = mysqli_num_rows($resultado);

            if($filas > 0) {
                return true;
            }else {
                return false;
            }
        }
    }

    function autorization_admin($var_session) {
        session_start();

        error_reporting(0);
        $var_session = $_SESSION['usuario'];

        if($var_session != "admin") {
            //Si el usuario es diferente al administrador
            return false;
        }
        if($var_session == null || $var_session== '') {
            //Si varsesion esta vacio o nulo
            return null;
        }
    }

    function permiso($var_session) {
        session_start();

        error_reporting(0);

        $var_session = $_SESSION['usuario'];

        if($var_session == null || $var_session== '') {
           return null;
        }
    }

    function cerrar_sesion() {
        session_start();

        session_destroy();

        //header("Location: ../index.php");
        return true;
    }

    function horas($hora) {
        $h = substr($hora, 0,2);
        $m = substr($hora, 3,5);
        $datos = array($h, $m);

        return $datos;
    }

    function validarHora($hora){
        $val="/^([0-1][0-9]|[2][0-3])[\:]([0-5][0-9])$/";

        if(preg_match($val,$hora)){
            return true;
        }        
        return false;
    }

?>