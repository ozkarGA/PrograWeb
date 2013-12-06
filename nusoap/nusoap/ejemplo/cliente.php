<?php
require_once('../lib/nusoap.php');
$client = new nusoap_client('http://localhost/PrograWeb/nusoap/nusoap/ejemplo/server.php?wsdl','wsdl');
$err = $client->getError();
if ($err) {
 echo '<h2>Constructor error</h2><pre>' . $err . '</pre>';
}

$param = array('parametroA' => 'Programacion Web',
			   'parametroB' => 'Hola Mundo Web Service'
			);

$result = $client->call('MetodoPrueba', $param);

if ($client->fault) {
	 echo '<h2>Fault</h2><pre>';
	 print_r($result);
	 echo '</pre>';
} else {
	 $err = $client->getError();
	 if ($err) {
		  echo '<h2>Error</h2><pre>' . $err . '</pre>';
	 } else {
		  
		  echo '<h2>Result</h2><pre>';
		  print_r($result);
		  echo '</pre>';
	 }
}

//echo '<h2>Debug</h2><pre>' . htmlspecialchars($client->debug_str, ENT_QUOTES) . '</pre>';
?>