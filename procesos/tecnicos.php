<?php
    require_once "../validaciones/conexionBD.php";
    require_once "../validaciones/metodos_crud.php";


    function tecns($turno) {
        $ver = new metodos();
        
        $tecnicos = "SELECT * from tecnicos where turno = '$turno'";
        $tecnicosBD = $ver->mostrar($tecnicos);

        $tecs = array();
        $i=0;
        foreach ($tecnicosBD as $key) {
            $tecs[$i] = $key['nombre'];
            $i++;
        }

        return $tecs;
    }
    
?>