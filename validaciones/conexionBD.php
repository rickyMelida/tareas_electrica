<?php
    class conectar {
        private $servidor = "db4free.net:3306";
        private $database = "radio_panambi";
        private $username = "ricky_melida";
        private $password = "5181789781Ri-";

        public function conexion() {
            $conexion = mysqli_connect($this->servername, $this->username, $this->password, $this->database);

            return $conexion;
        }
    }
?>