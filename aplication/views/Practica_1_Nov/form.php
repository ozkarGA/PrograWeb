
<?php
      include("../layouts/header.php"); 
?>
<hr/>
<form action="datos.php" method="POST">
	<label for="nombre">Nombre:</label>
	<input type="text" name="nombre" id="nombre">
	<label for="apellidos">Apellidos:</label>
	<input type="text" name="apellidos" id="apellidos">
	<input type="submit" value="Aceptar" class="btn">
</form>
<hr/>
<?php
      include("../layouts/footer.php"); 
?>