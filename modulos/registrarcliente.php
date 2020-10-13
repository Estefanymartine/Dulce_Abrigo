<?php
//Se reciben los datos del formulario
require "conexionbd.php";
extract ($_REQUEST);

$Conexion = new mysqli("localhost","root","","proyecto"); 

if ($Conexion->connect_errno) 
{
 echo "Problemas en la Conexion ". $Conexion->connect_error;
 exit();
	
}
$sql = "INSERT INTO cliente (correo,nombre,telefono,clave) 
values ('$_REQUEST[correo]' , '$_REQUEST[nombre]', '$_REQUEST[telefono]', '$_REQUEST[contraseña]')";

$resultado = $Conexion->query($sql);

if ($resultado)
	echo "Se registro correctamente";
else
	echo "Problemas al Agregar el cliente";

?>