<?php
require_once('../lib/nusoap.php');

$server = new soap_server();
$server->configureWSDL('Servidor', 'urn:Servidor');

$server->register('MetodoPrueba',           // method name
    array('parametroA' => 'xsd:string','parametroB' => 'xsd:string'), // input parameters
    array('return' => 'xsd:string'),          // output parameters
    'urn:Servidor',                   // namespace
    'urn:Servidor#MetodoPrueba'       // soapaction
);


function MetodoPrueba($parametroA,$parametroB) {
	return strtoupper($parametroA)."<hr>".strtoupper($parametroB);
}



$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$server->service($HTTP_RAW_POST_DATA);
?>