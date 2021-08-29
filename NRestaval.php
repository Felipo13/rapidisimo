<?php 

include 'conexion/cone.php';

$name = $_POST['nombre'];
$direccion = $_POST['addres'];
$logo = $_POST['logo'];
$phone = $_POST['phone'];
$id = 1;

$q = "INSERT INTO `restaurante` (`name`, `addres`, `logo`, `phone`, `FK_adm`) VALUES ('$name', '$direccion', '$logo', '$phone', '$id')";

if (mysqli_query($conn, $q)) {
    echo "<script> alert('Registro exitoso') </script>";
    header('Location: adm.php');
}else{
    echo "<script> alert('Ocurrio un error') </script>";
    header('Location: NResta.html');
}


?>