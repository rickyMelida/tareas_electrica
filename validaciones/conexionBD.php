<?php
    class conectar {
        private $servidor = "localhost";
        private $database = "tareas_electrica";
        private $username = "root";
        private $password = "";

        public function conexion() {
            $conexion = mysqli_connect($this->servidor, $this->username, $this->password, $this->database);

            return $conexion;
        }
    }
?>
