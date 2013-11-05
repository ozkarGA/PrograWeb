<?php
// var_dump():
//Esta función muestra información estructurada sobre una o más expresiones incluyendo su tipo y valor

// isset():
//Determina si una variable está definida y no es NULL.

// unset():
//Destruye las variables especificadas.
//Si una variable ha sido removida con unset(), esta ya no estará definida


define("CONSTANTE", "HOLA MUNDO");
echo CONSTANTE;

define("OTRA_CONSTANTE", "Welcome to W3Schools.com!", true);
echo otra_constante;

$var = "";

if (isset($var)) {
    echo "Este valor esta definido <br/>";
}

$a = "prueba";
$b = "otra prueba";

var_dump(isset($a));     
echo "<hr/>";
var_dump(isset($a, $b)); 
echo "<hr>";

unset ($a);

var_dump(isset($a));    
echo "<hr/>";
var_dump(isset($a, $b)); 
echo" <hr/>";
$foo = NULL;
var_dump(isset($foo));   

?>