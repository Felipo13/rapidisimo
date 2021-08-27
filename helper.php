<?php

    include "conexion/cone.php";

    session_start();
    $user = $_SESSION['user'];
    $pass = $_SESSION['pass'];
    $table = $_SESSION['table'];

    $q = "SELECT * FROM $table WHERE mail = '$user' AND pass = '$pass'";

    $r = mysqli_query($conn, $q);
    if ($r) {
        $consult = mysqli_fetch_array($r);
        $id = $consult['idU'];
        $name = $consult['name'];
    }elseif ($r) {
        $consult = mysqli_fetch_array($r);
        $id = $consult['idA'];
        $name = $consult['nombre'];
    }
    

    
    echo $id . " " . $name;
    

?>