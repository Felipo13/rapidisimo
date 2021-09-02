<?php

    include "conexion/cone.php";

    session_start();
    $user = $_SESSION['user'];
    $pass = $_SESSION['pass'];
    $table = $_SESSION['table'];

    $q = "SELECT * FROM $table WHERE mail = '$user' AND pass = '$pass'";

    $r = mysqli_query($conn, $q);
    
    $consult = mysqli_fetch_array($r);
    $id = $consult['id'];
    $name = $consult['name'];
    

    
    //echo $id . " " . $name;
    

?>