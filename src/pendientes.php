<?php
    require_once ("../validaciones/autorizacion.php");
    require_once ("../validaciones/conexionBD.php");
    require_once ("../validaciones/metodos_crud.php");

    $obj = new conectar();
    $con = $obj->conexion();

    mysqli_set_charset($con,'utf8');
    $sql = "SELECT * from tareas";

    $muestra = new metodos();
    $ver = $muestra->mostrar($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Pendientes</title>
</head>
<body>
    <div class="container-fluid">
        <h1 class="text-center m-3">Tareas</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Nro.</th>
                    <th scope="col">Tipo de trabajo</th>
                    <th scope="col">Descripcion del trabajo</th>
                    <th scope="col">Fecha de generacion</th>
                    <th scope="col">Hora inicial</th>
                    <th scope="col">Hora final</th>
                    <th scope="col">Horas hombre</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Turno</th>
                    <th scope="col">Tecnico</th>
                    <th scope="col">Cargo</th>
                </tr>
            </thead>
            <tbody>
                <!--tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>                
                </tr-->

                <?php
                    foreach($ver as $key){
                        echo "<tr>";
                            echo "<td scope='row'>".$key['id_tarea']."</td>";
                            echo "<td>".$key['t_tarea']."</td>";
                            echo "<td>".$key['des_tarea']."</td>";
                            echo "<td>".$key['fecha']."</td>";
                            echo "<td>".$key['hora_i']."</td>";
                            echo "<td>".$key['hora_f']."</td>";
                            echo "<td>".$key['horas_h']."</td>";
                            echo "<td>".$key['estado']."</td>";
                            echo "<td>".$key['turno']."</td>";
                            echo "<td>".$key['tecnicos']."</td>";
                            echo "<td>".$key['cargo']."</td>";
                        echo "</tr>";

                    }
                ?>
            </tbody>
        </table>
    </div>
    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>