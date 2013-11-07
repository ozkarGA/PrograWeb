<?php
	include('Calculadora.class.php');
	include("../layouts/header.php"); 

	$cal = new Calculadora();
	if( isset($_POST['valor1']) ){
		$cal->setValor1($_POST['valor1']);
		$cal->calcula();
	}
?>
<script src="../bootstrap/js/calculadora.js"></script>

<form action="" method="POST" id="formCalculadora">
	<label for="valor1">Valor 1:</label>
	<input type="text" id="valor1" name="valor1" value="<?php echo $cal->res; ?>">
	
</form>
<table>
	<tr>
		<td><button class="btn">1</button></td>
		<td><button class="btn">2</button></td>
		<td><button class="btn">3</button></td>
		<td><button class="btn">*</button></td>
	</tr>
	<tr>
		<td><button class="btn">4</button></td>
		<td><button class="btn">5</button></td>
		<td><button class="btn">6</button></td>
		<td><button class="btn">+</button></td>
	</tr>
	<tr>
		<td><button class="btn">7</button></td>
		<td><button class="btn">8</button></td>
		<td><button class="btn">9</button></td>
		<td><button class="btn">-</button></td>
	</tr>
	<tr>
		<td></td>
		<td><button class="btn">0</button></td>
		<td><button class="btn">=</button></td>
		<td><button class="btn">/</button></td>
	</tr>
</table>


<?php
  include("../layouts/footer.php"); 
?>
