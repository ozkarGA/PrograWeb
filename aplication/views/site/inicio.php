<?php
	session_start();
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

//$usuario->show_table(" select nombre as Nombre, apellidos as Apellidos, email, password
//						from pw_usuarios ");	

   echo "<pre>";
   
   echo "<h2>Array con las bases de datos</h2>";
   print_r($usuario->consulta_sql("SHOW DATABASES;"));
   
   echo "<hr>";
   
   echo "<h2>Array con las tablas de la base de datos (clase)</h2>";
   print_r($usuario->consulta_sql("SHOW TABLES FROM clase;"));
    
   echo "<h2>Array con los campos de la tabla pw_usuarios</h2>";
   print_r($usuario->consulta_sql("SHOW COLUMNS FROM clase.pw_usuarios;"));

   
   echo "</pre>";
?>



<?php
	include("../layouts/footer.php"); 
?>