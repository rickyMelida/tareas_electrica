<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 cont">
                <h1 class="text-center">Planilla de Tareas - Eléctrica</h1>
                    <form method="post" action="<?php echo APP.'validar_usuario.php';?>">
                        <div class="form-group">
                            <label>Usuario</label>
                            <input type="text" class="form-control w-50" name="usuario" placeholder="Usuario">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control w-50" name="pass" placeholder="Password">
                        </div>
                            <button type="submit" class="btn btn-primary">Ingresar</button>
                    </form>
            </div>
        </div>
    </div>

    <script src="<?php echo JS.'jquery-3.4.1.js';?>" ></script>
    <script src="<?php echo JS.'popper.min.js';?>" ></script>
    <script src="<?php echo JS.'bootstrap.min.js';?>"></script>
</body>
</html>