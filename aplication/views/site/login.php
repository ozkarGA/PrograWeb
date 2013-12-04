<?php
	include("../../models/Conexion.php");
	include("../../models/Modelo.php");
	include("../../models/Usuario.php");
	include("../../libs/adodb5/adodb.inc.php");
	include("../../libs/adodb5/adodb-pager.inc.php");
	include("../layouts/header.php");
?>

<?php
	
?>
<form action="" method="POST">
	<label for="email">Email</label>
	<input type="email" id="email" name="email">
	<label for="password">Password</label>
	<input type="password" id="password" name="password">
	<input type="submit" value="Login" class="btn">
</form>

<?php
	include("../layouts/footer.php"); 
?>