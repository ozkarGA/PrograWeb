<?php
	include("../../models/Conexion.php");
	include("../../models/Modelo.php");
	include("../../models/Usuario.php");
	include("../../libs/adodb5/adodb.inc.php");
	include("../../libs/adodb5/adodb-pager.inc.php");
	include("../layouts/header.php");
?>

<?php
$usuario = new Usuario();
	if(isset($_POST['nombre'])){
		
		$usuario->set_nombre($_POST['nombre']);
		$usuario->set_apellidos($_POST['apellidos']);
		$usuario->set_email($_POST['email']);

		if( $usuario->inserta($usuario->get_rs()) ){
			echo "usuario insertado";
		}else{
			echo "usuario No insertado";
		}
		
	}
$usuario->show_table(" select nombre as Nombre, apellidos as Apellidos
						from pw_usuarios ");	
?>

<form action="" method="POST">
	<label for="nombre">Nombre:</label>
	<input type="text" id="nombre" name="nombre" > 
	<label for="apellidos">Apellidos:</label>
	<input type="text" id="apellidos" name="apellidos" > 
	<label for="email">E-mail:</label>
	<input type="text" id="email" name="email" > 
	<hr>
	<input type="submit" value="insertar" class="btn"> 
</form>

<?php
	include("../layouts/footer.php"); 
?>