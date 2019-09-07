<?php
    require_once "conexionBD.php";
    session_start();

    $obj = new conectar();
    $con = $obj->conexion();

    $usuario = $_POST['usuario'];
    $pass = $_POST['pass'];

    mysqli_set_charset($con,'utf8');
    $sql = "SELECT * from usuarios where usuario= '$usuario' and pass='$pass'";

    $resultado = mysqli_query($con, $sql);

    $filas = mysqli_num_rows($resultado);

    if (!$con) {
        die("No se pudo conectar a la BD: " . mysqli_connect_error());
    }

    if($filas > 0) {
        $_SESSION['usuario'] = $usuario;
        header('Location: ../src/principal.php');

    }else {
        echo "<script> alert('Contraseña o usuario incorrecto');</script>";
        header('Location: ../index.php');

    }
    



?>