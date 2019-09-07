<?php
    require_once ("../validaciones/autorizacion.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Agregar</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Agrega Tareas</h1>

        <form action="" method="post" class="border border-dark p-3 bg-success">
        <div class="row">
                <div class="col-lg-4 col-md-12 py-3">
                    <h2>Tipos de Trabajo</h2>
                    <div class="form-check m-3">
                        <input type="radio" class="form-check-input" name="t_trabajo" id="rutinas" value="rutinas" >
                        <label class="form-check-label" for="rutina">Rutinas</label>
                    </div>

                    <div class="form-check m-3">
                        <input type="radio" class="form-check-input" name="t_trabajo" id="asistencia" value="asistencia" >
                        <label class="form-check-label" for="asistencia">Asistencia</label>
                    </div>

                    <div class="form-check m-3">
                        <input type="radio" class="form-check-input" name="t_trabajo" id="mantenimiento" value="mantenimiento" >
                        <label class="form-check-label" for="mantenimiento">Mantenimiento</label>
                    </div>

                    <div class="form-check m-3">
                        <input type="radio" class="form-check-input" name="t_trabajo" id="correctivo" value="correctivo" >
                        <label class="form-check-label" for="correctivo">Correctivo</label>
                    </div>

                    <div class="form-check m-3">
                        <input type="radio" class="form-check-input" name="t_trabajo" id="s_evento" value="s_evento" >
                        <label class="form-check-label" for="s_evento">Salon de Eventos</label>
                    </div>

                    <div class="form-check m-3">
                        <input type="radio" class="form-check-input" name="t_trabajo" id="marketing" value="marketing" >
                        <label class="form-check-label" for="marketing">Marketing</label>
                    </div>

                    <div class="form-check m-3">
                        <input type="radio" class="form-check-input" name="t_trabajo" id="b_center" value="b_center" >
                        <label class="form-check-label" for="b_center">Businesss Center</label>
                    </div>

                    <div class="form-check m-3">
                        <input type="radio" class="form-check-input" name="t_trabajo" id="gym" value="gym" >
                        <label class="form-check-label" for="gym">Gimnasio</label>
                    </div>

                    <div class="form-check m-3">
                        <input type="radio" class="form-check-input" name="t_trabajo" id="tic" value="tic" >
                        <label class="form-check-label" for="tic">TIC</label>
                    </div>

                </div>

                <div class="col-lg-8 col-md-12">
                    <div class="row">

                        <!-------------Estados-------------------------------------->
                        <div class="col-lg-6">
                            <h2 class="mt-2">Estado</h2>
                            <div class="row">
                                <div class="col-lg-12 p-3">
                                    <div class="form-check">
                                        <input type="radio" name="pendiente" id="pendiente" value="pendiente">
                                        <label class="form-check-label" for="pendiente">Pendiente</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 p-3">
                                        <div class="form-check">
                                            <input type="radio" name="pendiente" id="finalizado" value="finalizado">
                                            <label class="form-check-label" for="finalizado">Finalizado</label>
                                        </div>                                     
                                </div>
                            </div>

                            <h2>Turno</h2>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <select class="form-control" name="turno" >
                                            <option value="">Mañana</option>
                                            <option value="">Tarde</option>
                                            <option value="">Noche</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-------------Tecnicos-------------------------------------->            
                        <div class="col-lg-6 p-3">
                            <h2>Tecnicos</h2>
                                <div class="form-check my-4">
                                    <input type="checkbox" name="tecnico_1" id="tecnico_1" value="c_barreto">
                                    <label class="form-check-label" for="tecnico_1">Camilo Barreto</label>
                                </div>
                                <div class="form-check my-4">
                                    <input type="checkbox" name="tecnico_2" id="tecnico_2" value="r_melida">
                                    <label class="form-check-label" for="tecnico_2">Ricardo Melida</label>
                                </div>
                                <div class="form-check my-4">
                                    <input type="checkbox" name="tecnico_3" id="tecnico_3" value="l_romero">
                                    <label class="form-check-label" for="tecnico_3">Lazaro Romero</label>
                                </div>                                     
                        </div>
                    </div>
    
                    <!--------------------------------------------------->
                    <div class="row">
                        <div class="col-lg-12 p-3">
                            <h2>Horas trabajadas</h2>
                            <div class="form-group">
                                <label for="h_inicial">Hora Inicial</label>
                                <input type="text" name="h_inicial" id="h_inicial" class="ml-3" placeholder="hh:mm">
                            </div>
                            <div class="form-group">
                                <label for="h_inicial">Hora Final</label>
                                <input type="text" name="h_final" id="h_final" class="ml-4" placeholder="hh:mm">
                            </div>
                            <div class="form-group">
                                <label for="h_hombre">Horas hombre</label>
                                <input type="text" name="h_hombre" id="h_hombre">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-------------Descripcion del trabajo-------------------------------------->
            <div class="row">
                <div class="col-lg-12 p-5">
                    <div class="form-group">
                        <h3>Descripcion del trabajo</h3>
                        <textarea class="form-control" name="descripcion" rows="3"></textarea>
                    </div>
                </div>
            </div>    
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>