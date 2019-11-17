<?php
    require_once "../validaciones/autorizacion.php";
    require_once "../validaciones/conexionBD.php";
    require_once "../validaciones/metodos_crud.php";

    //Objetivo de las horas hombre
    $objetivo = "14:00:00";

    $obj = new metodos();

    ///Extraemos el total de las horas hombre
    $sql = "SELECT SEC_TO_TIME(SUM(TIME_TO_SEC(horas_h))) AS horas FROM tareas";

    $datos = $obj->mostrar($sql);


    ////Extraemos a los datos de los tecnicos
    $sql_tec = "SELECT tecnicos, SEC_TO_TIME(SUM(TIME_TO_SEC(horas_h))) AS horas FROM tareas";
    $datos_tec = $obj->mostrar($sql_tec);

    ////Extraemos a los datos de los sectores
    $sql_tipo = "SELECT t_tarea, SEC_TO_TIME(SUM(TIME_TO_SEC(horas_h))) AS horas FROM tareas";
    $datos_tipo = $obj->mostrar($sql_tipo);

    ////Diferencia entre el objetivo y las horas hombre actual
    foreach($datos as $key) { $hora1 = $key['horas'];}

    $horaInicio = new DateTime($hora1);
    $horaTermino = new DateTime($objetivo);

    $interval = $horaInicio->diff($horaTermino);
    //echo $interval->format('%H horas %i minutos %s seconds');

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Horarios</title>
    <link rel="shortcut icon" href="../iconos/electrico.ico" type="image/x-icon">
</head>
<body class="bg-light">
    <div class="container border border-primary">
        <header class="text-center bg-primary p-4">   
            <a href="reportes.php" class="float-left m-3 btn btn-outline-dark">Volver</a>
            <a href="reportes.php" class="float-right m-3 btn btn-outline-dark">Historial</a>
            <h1 class=" d-inline">Reportes de Horas</h1>
        </header>
        <div class="row">
            <div class="col-md-10 m-auto p-3">

            <!-----------------Reporte General----------------------------->
            <table class="table table-bordered table-primary">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">Mes</th>
                        <th scope="col" class="text-center">Año</th>
                        <th scope="col" class="text-center">Horas Hombre Actual</th>
                        <th scope="col" class="text-center">Horas Hombre Objetivo</th>
                        <th scope="col" class="text-center">Diferencia</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center"><b> <?php setlocale(LC_TIME, "spanish"); echo ucfirst(strftime("%B"));?> </b></td>
                        <td class="text-center"><b> <?php setlocale(LC_TIME, "spanish"); echo ucfirst(strftime("%Y"));?> </b></td>
                        <td class="text-center"><b> <?php foreach($datos as $key) { echo $key['horas'];} ?> </b></td>
                        <td class="text-center"><b> <?php echo $objetivo." Hs"; ?> </b></td>
                        <td class="text-center"><b> <?php echo $interval->format('%H:%i:%S '); ?> </b></td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-12 m-auto p-3">

            <!-----------------Reporte por tecnico----------------------------->
                <table class="table table-bordered table-primary">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">Técnicos</th>
                            <th scope="col" class="text-center">Total de horas por mes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($datos_tec as $key){ ?>
                            <tr>
                                <td class="text-center"><b> <?php echo $key['tecnicos'];?> </b></td>
                                <td class="text-center"><b> <?php echo $key['horas'];?> </b></td>
                            </tr>
                            <?php }?>
                    </tbody>
                </table>
            </div>

            <div class="col-md-6 col-lg-6 col-sm-12 m-auto p-3">
                
            <!-----------------Reporte por sector----------------------------->
                <table class="table table-bordered table-primary">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">Tipo de Trabajo</th>
                            <th scope="col" class="text-center">Total de horas por mes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($datos_tipo as $key){ ?>
                            <tr>
                                <td class="text-center"><b> <?php echo $key['t_tarea'];?> </b></td>
                                <td class="text-center"><b> <?php echo $key['horas_h'];?> </b></td>
                            </tr>
                            <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="../js/design.js"></script>    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>