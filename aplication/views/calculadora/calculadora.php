<?php
	include('Calculadora.class.php');
	include("../layouts/header.php"); 

	$cal = new Calculadora();
	if(isset($_POST['valor1']) && isset($_POST['valor2'])){
		$cal->setValor1($_POST['valor1']);
		$cal->setValor2($_POST['valor2']);
		echo "Resultado ".$cal->suma();
	}
?>
<form action="" method="POST">
	<label for="valor1">Valor 1:</label>
	<input type="text" id="valor1" name="valor1" >

	<label for="valor2">Valor 2:</label>
	<input type="text" id="valor2" name="valor2" >

	<input type="submit" value="Sumar">
</form>
<?php
  include("../layouts/footer.php"); 
?>
