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
    
        <title> Registra un nuevo producto </title>
</head>
<body>
    <link rel="stylesheet" href="../CSS/style-layout.css">
    <header id="main-header">
        <a id="logo-header" href="/">
            <span class="rappi">Rappidisimo</span>
           
            
                </a> <!-- / #logo-header -->
    
        <nav>
            <ul>
                <li><a href="../adm.php">Inicio</a></li>
                <li><a href="">Acerca de</a></li>
                <li><a href="about">Contacto</a></li>
            </ul>
        </nav><!-- / nav -->
    
    </header><!-- / #main-header -->
    
    <?php $res = $_GET['resta'] ?>
    
    <center>
    Agregar un nuevo producto

    <form action="productov.php" method="POST">
        <label for="">
            <input type="text" name="name" id="" placeholder="Ingresa el nombre del producto" autofocus required>
        </label><br><br>
        <label for="">
            <input type="text" name="descrip" required placeholder="Ingresa una pequeña descripcion del producto" id="">
        </label><br><br>
        <label for="">
            <input type="number" name="price" placeholder="Precio del producto" required id="">
        </label><br><br>
        <label for=""> Selecciona la fotografia del producto<br>
            <input type="file" name="photo"  id="">
        </label>
        <br><br>
        <input type="hidden" name="resta1" value="<?php echo $res ?>">
        <input type="submit" value="Registrar producto">
        <br><br>
    </form>
</center>

    <footer>
        <footer id="main-footer">
    
        
            <h4><center>Copyright Rapiddisimo © 2021. All rights reserved.</center></h4>
    
        </footer>
    </body>
    </html>