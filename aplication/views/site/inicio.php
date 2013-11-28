<?php
	include("../../models/Conexion.php");
	include("../../models/Modelo.php");
	include("../../models/Usuario.php");
	include("../../libs/adodb5/adodb.inc.php");
	include("../../libs/adodb5/adodb-pager.inc.php");
	include("../layouts/header.php");
?>

<h2>Lista de usuarios</h2>
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



<?php
	include("../layouts/footer.php"); 
?>