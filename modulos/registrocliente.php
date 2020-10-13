
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <center>
        <form id="loginad" name="loginform" method="post" action="registrarcliente.php">
             <div class="centrar_log">
                <img class="iconocliente" src="img/logo1.png">
                 
             </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Cedula" name="idcliente" required>
             </div><br>

             <div class="form-group">
                <input type="text" class="form-control" placeholder="Correo Electronico" name="correo" required>
             </div><br>

             <div class="form-group">
                <input type="text" class="form-control" placeholder="Nombre completo" name="nombre" required>
                 
             </div><br>


             <div class="form-group">
                <input type="text" class="form-control" placeholder="Telefono" name="telefono" required>
                 
             </div><br>

             <div class="form-group">
                <input type="password" class="form-control" placeholder="Contraseña" name="contraseña" required>  
             </div><br>

             <div class="form-group">
                <input type="text" class="form-control" placeholder="Direccion" name="direccion" required>  
             </div><br>             



             <button class="btn-primary" name="enviar">Registrarse</button>

             <div>
                 <p>¿Ya tienes una cuenta? <a href="indexcliente.php?p=logincliente" style="color: black">Inicia Sesión</a></p>
             </div>


        </form>
    </center>

</body>
</html>