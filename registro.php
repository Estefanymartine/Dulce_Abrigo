<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="estilosloginyregistro.css">
	<title>Register</title>
</head>
<body>
	<form class="formulario" method="post">
    <h1 class="h1">Registrate</h1><br>
     <div class="contenedor">
         <input type="text" placeholder="Nombre Completo"  name="nombre">
         
         <input type="text" placeholder="Correo Electronico"  name="correo">

         <input type="text" placeholder="Nombre de usuario"  name="usuario">

         <input type="text" placeholder="Contraseña"  name="clave">

        
         
         <input type="submit" value="Registrate" class="button" name="registrar">
         <p>¿Ya tienes un usuario? <a class="links" href="login.php" style="color: #fff">Iniciar Sesion</a></p>
         
     </div>
    </form>
</body>
</html>