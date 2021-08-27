<?php

include "conexion/cone.php";

    $mail = $_POST['email'];
    $pass = $_POST['pass'];
    $name = $_POST['name'];
    $lname = $_POST['lname'];
    $addres = $_POST['addres'];
    $phone = $_POST['phone'];

    $q = "INSERT INTO `user`(`mail`, `pass`, `name`, `Lname`, `addres`, `phone`) VALUES ('$mail', '$pass', '$name', '$lname', '$addres', '$phone')";

    if (mysqli_query($conn, $q)) {
        header('Location: login.html' );
        
  } else {
        echo "Error: " . $q . "<br>" . mysqli_error($conn);
  }

?>
