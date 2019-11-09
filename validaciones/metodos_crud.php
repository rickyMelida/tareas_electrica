<?php

    class metodos {
        
        public function mostrar($sql) {
            $obj = new conectar();
            $con = $obj ->conexion();

            $result  = mysqli_query($con, $sql);

            //return mysqli_fetch_array($result, MYSQLI_NUM);
            return mysqli_fetch_all($result, MYSQLI_ASSOC);
            //return mysqli_fetch_row($result);
        }

        public function agregar($datos) {
            $obj = new conectar();
            $con = $obj ->conexion();

            $sql = "INSERT into tareas(t_tarea, estado, des_tarea, fecha, hora_i, hora_f, horas_h, turno, tecnicos, cargo)
            values ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]','$datos[6]','$datos[7]','$datos[8]','$datos[9]')";

            return $result = mysqli_query($con, $sql);
        }

        public function eliminar($id) {
            $obj = new conectar();
            $con = $obj ->conexion();

            $sql = "DELETE from tecnicos where id_tecnico = '$id'";

            return mysqli_query($con, $sql);
        }
    }

?>