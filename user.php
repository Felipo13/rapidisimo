<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- API GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <title> Bienvenido a Rappidisimo </title>
</head>
<body>
    <link rel="stylesheet" href="CSS/style-layout.css">
    <header id="main-header">
        <a id="logo-header" href="/">
            <span class="rappi">Rappidisimo</span>
           
            
                </a> <!-- / #logo-header -->
    
        <nav>
            <ul>
                <li><a href="user.php">Inicio</a></li>
                <li><a href="#">Acerca de</a></li>
                <li><a href="logout.php">Cerrar sesión</a></li>
            </ul>
        </nav><!-- / nav -->
    
    </header><!-- / #main-header -->


<?php 

include "conexion/cone.php";
include "helper.php";
echo "Hola usuario"



?>



    <footer>
        <footer id="main-footer">
    
        
            <h4><center>Copyright Rapiddisimo © 2021. All rights reserved.</center></h4>
            <center>Si tienes alguna duda </center>
    
        </footer>
    </body>
    </html>