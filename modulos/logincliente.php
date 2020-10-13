<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <center>
        <form id="loginad" name="loginform" method="post" action="iniciodesesion.php">
             <div class="centrar_log">
                <img class="iconocliente" src="img/logo1.png">
                 
             </div>

             <div class="form-group">
                <input type="text" class="form-control" placeholder="Usuario" name="correo" required>
                 
             </div><br>

             <div class="form-group">
                <input type="password" class="form-control" placeholder="Contraseña" name="clave" required>
                 
             </div><br>

             <button class="btn-primary" name="enviar">Ingresar</button>

             <div>
                 <p>¿No tienes una cuenta? <a href="indexcliente.php?p=registrocliente" style="color: black">Registrate</a></p>
             </div>


        </form>
    </center>

</body>
</html>