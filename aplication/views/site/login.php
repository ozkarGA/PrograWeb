<?php
	session_start();
	include("../../models/Conexion.php");
	include("../../models/Modelo.php");
	include("../../models/Login.php");
	include("../../libs/adodb5/adodb.inc.php");
	
	
	if( isset($_POST['email']) && isset($_POST['password']) ){
		$login = new Login();
		$login->set_email($_POST['email']);
		$login->set_password($_POST['password']);
		if( $login->valida() ){
			$login->iniciar_sesion();
			header("location: inicio.php");
			exit();
		}else{
			$errorLogin = true; 
		}
	}

	include("../layouts/header.php");

	if(isset($errorLogin)){
			echo '
			    <div class="alert">
			    	<button type="button" class="close" data-dismiss="alert">&times;</button>
			    	<strong>Aviso!</strong>email y password son incorrectos.
			    </div>
			';
	}
?>
<form action="" method="POST" class="form-actions span4">
	<label for="email">Email</label>
	<input type="email" id="email" name="email">
	<label for="password">Password</label>
	<input type="password" id="password" name="password">
	<input type="submit" value="Login" class="btn">
</form>

<?php
	include("../layouts/footer.php"); 
?>