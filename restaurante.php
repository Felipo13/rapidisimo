<?php 
    $idr = $_GET['RTN'];
    include 'conexion/cone.php';
    include 'helper.php'
    ?>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://kit.fontawesome.com/f50a179eb5.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <title> Ingresa un nuevo restaurante </title>
</head>
<body>
    <link rel="stylesheet" href="CSS/style-layout.css">
    <header id="main-header">
        <a id="logo-header" href="/">
            <span class="rappi">Rappidisimo</span>
           
            
                </a> <!-- / #logo-header -->
    
        <nav>
            <ul>
                <li><a href="/">Inicio</a></li>
                <li><a href="" onclick="alert('Aun no esta disponible este modulo')"><?php echo $name ?></a></li>
                <li><a href="#">Acerca de</a></li>
                <li><a href="about">Contacto</a></li>
            </ul>
        </nav><!-- / nav -->
    
    </header><!-- / #main-header -->


    <h2> Restaurante: <?php echo $_GET['RTN'] ?></h2>

    <center>
    
    <?php
    $respue = mysqli_query($conn, "SELECT * FROM producto WHERE FK_resta = '$idr'");
    while($prod = mysqli_fetch_array($respue)){ ?>

    <a href=""> <?php echo $prod['name'] ?> </a>   <a href="#" onclick="alert('Ahorita no esta el modulo de actualizar aun')">    <i class="fas fa-pen"></i> </a>   <a href="producto/Dproducto.php?presente=<?php echo $prod['IdP'] ?>" ><i class="far fa-trash-alt"></i></a> <br>
    <?php   }    ?>

    <br><br><br>
    <a  href="producto/producto.php?resta=<?php echo $_GET['RTN'] ?>">Deseas agregar un nuevo producto?</a></center>
    




    
    <footer>
        <footer id="main-footer">
    
        
            <h4><center>Copyright Rapiddisimo © 2021. All rights reserved.</center></h4>
    
        </footer>
    </body>
    </html>