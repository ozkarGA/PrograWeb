<?php
      include("../layouts/header.php"); 
?>
<?php
	if(isset($_POST['nombre'])){
		echo "<h2>Tu nombre es: ".$_POST['nombre']." ".$_POST['apellidos']."</h2>";
	}else{
		echo "No hay Datos";

	}
?>

<?php
      include("../layouts/footer.php"); 
?>