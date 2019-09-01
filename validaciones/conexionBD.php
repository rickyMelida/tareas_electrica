<?php
    $servername = "db4free.net:3306";
    $database = "radio_panambi";
    $username = "ricky_melida";
    $password = "5181789781Ri-";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    //Con esto podemos seleccionar una base de datos pero debemos de eliminar de la conexion dicha bd
    //$bd_seleccionada = mysqli_ select_db ($nombreConexión, $nombreBaseDatos);
    // Check connection
    if (!$conn) {
        die("No se pudo conectar a la BD: " . mysqli_connect_error());
    }
    //echo "Conexion Establecida";
    //mysqli_close($conn);
?>