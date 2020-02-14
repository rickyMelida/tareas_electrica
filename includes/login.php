<body>
    <div class="container">
        <h1>Planilla de Tareas - Eléctrica</h1>
            <form method="post" action="<?php echo APP.'validar_usuario.php';?>">
                <div class="form-group">
                    <label>Usuario</label>
                    <input type="text" name="usuario" placeholder="Usuario">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="pass" placeholder="Password">
                </div>
                    <button type="submit" class="btn">Ingresar</button>
            </form>
    </div>
</body>
<script src="<?php echo JS.'jquery-3.4.1.js';?>" ></script>
<script src="<?php echo JS.'popper.min.js';?>" ></script>
<script src="<?php echo JS.'bootstrap.min.js';?>"></script>
</html>