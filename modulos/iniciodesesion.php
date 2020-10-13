<?php
session_start();
extract ($_REQUEST);
require "conexionbd.php";
$objConexion=Conectarse();
/* Vamos a realizar el proceso para consultar los usuarios con la condicíon
dada por los valores ingresados en el login y password*/

//Guardamos en una variable la sentencia sql
$sql="SELECT * from cliente where correo = '$_REQUEST[correo]' and clave = '$_REQUEST[clave]'";

//Asignar a una variable el resultado de la consulta
$resultado=$objConexion->query($sql);

//verifico si existe el usuario
$existe = $resultado->num_rows;
if ($existe==1)  //quiere decir que los datos estan bien
{
	$usuario=$resultado->fetch_object();
	//Registramos una variable de sesión llamada user
	$_SESSION['user']= $usuario->usuLogin;	
	header("location:indexcliente.php");	
}
else
{
	header("location:indexcliente.php?x=1");  //x=1, quiere decir que el usuario no esta registrado
}
?>