<?php

    include "conexion/cone.php";
    $user = $_POST['mail'];
    $pass = $_POST['pass'];

    //echo $user . " " . $pass;

    $q = "SELECT * FROM user WHERE mail = '$user' AND pass = '$pass'";

    $admi = "SELECT * FROM adm WHERE mail = '$user' AND pass = '$pass'";

    if (mysqli_query($conn, $q)) {
        
        session_start();
        $_SESSION['user'] = $user;
        $_SESSION['pass'] = $pass;
        $_SESSION['table'] = 'user';

        header('Location: user.php' );
    }
    elseif (mysqli_query($conn, $admi)) {
        session_start();
        $_SESSION['user'] = $user;
        $_SESSION['pass'] = $pass;
        $_SESSION['table'] = 'adm';
        header('Location: adm.php' );
    }
    else{
        echo "No encontre registros pai";
    }

    include 'conexion/close.php';
   
?>