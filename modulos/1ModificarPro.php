<?php

?>
<form method="post" action="Validar_ModificarPro.php" class="formAñadirP">
	<h2>Actualizar Productos</h2><br>
	<div class="form-group">
		<input type="text" class="form-control" name="codproducto" id="codproducto" placeholder="Codigo Del Producto">
	</div>

	<div class="form-group">
		<input type="text" class="form-control" name="nombre_producto" id="nombre_producto" placeholder="Nombre Del Producto">
	</div>

	<div class="form-group">
		<input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Descripcion Del Producto">
	</div>

	<div class="form-group">
		<input type="text" class="form-control" name="precio" id="precio" placeholder="Precio Del Producto">
	</div>

	<div class="form-group">
		<input type="text" class="form-control" name="existencia" id="existencia" placeholder="Existencias Del Producto">
	</div>	

	<div class="form-group">
		<input type="file" class="form-control" name="imagen" id="imagen" placeholder="Imagen Del Producto">
	</div>

	<div class="form-group">
		<button type="submit" class="btnn" name="enviar"><i class="fa fa-check"></i> Actualizar Producto</button>
	</div>
</form>	
</form>