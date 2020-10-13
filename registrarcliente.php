<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/estilosAñPro.css">
</head>
</html>
<?php
//Se reciben los datos del formulario
require "PHP/conexionbd.php";
require "PHP/ClasesClientesAd.php";
extract ($_REQUEST);

//Forma utilizando la Clase Empleado

$objcliente = new Cliente();

$objcliente->crearcliente($_REQUEST['idcliente'], $_REQUEST['correo'], $_REQUEST['nombre'] , $_REQUEST['telefono'], $_REQUEST['direccion'], $_REQUEST['contraseña']);

$resultado = $objcliente->agregarcliente();

if ($resultado)
	echo "El cliente se ha agregado correctamente";
else
	?>
<img class="LogoMensaje" src="img/1600738901566.png">
<div class="AllMensajes">
	<h2 class="MensajesP">Error Al Registrarse</h2>
	<a class="volver" href="./indexcliente.php">Volver</a>
</div>
	<?php

?>