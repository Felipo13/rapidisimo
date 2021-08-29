<?php

    include "conexion/cone.php";
    $user = $_POST['mail'];
    $pass = $_POST['pass'];

    //echo $user . " " . $pass;


    $q = mysqli_query($conn, "SELECT * FROM user WHERE mail = '".$user."' AND pass = '".$pass."'");
    $nr = mysqli_num_rows($q);

    $admi = mysqli_query($conn, "SELECT * FROM adm WHERE mail = '$user' AND pass = '$pass'");
    $nr1 = mysqli_num_rows($admi);

    //if ($nr1 == 1) {
      //  $nr1 = 3.1416;
    //}


    if($nr == 1) {
        session_start();
        $_SESSION['user'] = $user;
        $_SESSION['pass'] = $pass;
        $_SESSION['table'] = 'user';
        header('Location: user.php' );

    }elseif ($nr1 == 1) {
        session_start();
        $_SESSION['user'] = $user;
        $_SESSION['pass'] = $pass;
        $_SESSION['table'] = 'adm';
        header('Location: adm.php');
    }else {
        echo "<script>alert('No se encontro ningun registro similar a eso mano')</script>";
    }
    
    
   
?>