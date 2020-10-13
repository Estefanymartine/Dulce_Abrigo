<?php
if(!isset($_GET["p"])){
	$p="paginaprincipal";
}
else{
	$p=$_GET["p"];
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="fonts/style.css">
	<link rel="stylesheet" href="menupagina.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.cs">
	<title>Colchones Dulce Abrigo</title>
</head>
 <body>
 	<header>
 		<div class="contenedor">
 		<h1>Colchones Dulce Abrigo</h1>	
 		<input type="checkbox" id="menu-bar">
 		<label class="icon-menu"for="menu-bar"></label>
 		<nav class="menu">
 			<a href=?p=paginaprincipal>Inicio</a>
 			<a href="?p=productosc">Productos</a>
			 <a href="?p=carrito">Carrito de compras</a>
			 <a href=?p=logincliente>Iniciar sesión</a>
			 <a href=?p=login>ADMI</a>

 		</nav>
 		</div>
 	</header>

 	<div class="cuerpo">

 		<?php
 		if (file_exists("modulos/".$p.".php")) {
 			include "modulos/".$p.".php";
 		}else{
 			echo "modulo desconocido";
 		}

 		?>
 		
 	</div>

 	<footer>
 	 	<div class="contenedor">
 	 		<p class="copy">Dulce Abrigo 2020</p>
 	 		<div class="sociales">
 	 			<a class="icon-facebook2" href="#"></a>
 	 			<a class="icon-instagram" href="#"></a>
 	 			<a class="icon-twitter" href="#"></a>
 	 		</div>	
 	 	</div>
 	 </footer>

</body>
</html>
 	 