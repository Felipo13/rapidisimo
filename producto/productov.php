<?php

include ('../conexion/cone.php');

$name = $_POST['name'];
$descri = $_POST['descrip'];
$price = $_POST['price'];
$photo = $_POST['photo'];
$res = $_POST['resta1'];

$p = "INSERT INTO producto (name, description, price, photo, FK_resta) VALUES ('$name', '$descri', '$price', '$photo', '$res')";

$res = mysqli_query($conn, $p);

if ($res) {
    header('Location: ../adm.php');
}else {
    echo "Ocurrio un error inesperado";
}


?>