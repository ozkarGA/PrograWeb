<?php 
    define('BASEURL','http://localhost/PrograWeb/aplication/');
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <link rel="shortcut icon" href="../images/tecno.ico">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
        <link href="../bootstrap/css/aplication.css" rel="stylesheet">
        
        <script src="../bootstrap/js/jquery.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        
        
    </head>
    <body>
       
        <div class="container pagina">
          <header><h1>Nombre del proyecto | Logotipo</h1></header>
          <?php 
            include $_SERVER['DOCUMENT_ROOT'].'/PrograWeb/aplication/views/layouts/menu.php';
           
          ?>

