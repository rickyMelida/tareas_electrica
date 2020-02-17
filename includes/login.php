<body>
    <div class="container">
        <form method="post" action="<?php echo VIEWS.'agregar.php';?>">
            <h1>Eléctrica PLG</h1>
            <img src="./assets/iconos/electricista.png" alt="sale">
            <div class="form-group">
                <label>Usuario</label>
                <input type="text" name="usuario" placeholder="Usuario" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="pass" placeholder="Password">
            </div>
            <input type="submit" class="btn" value= "Ingresar" />
        </form>
    </div>
</body>
<script src="<?php echo JS.'jquery-3.4.1.js';?>" ></script>
<script src="<?php echo JS.'popper.min.js';?>" ></script>
<script src="<?php echo JS.'bootstrap.min.js';?>"></script>
</html>