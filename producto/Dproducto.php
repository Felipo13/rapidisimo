<?php 
include '../conexion/cone.php';
$id = $_GET['presente'];

$ped = "DELETE FROM `producto` WHERE IdP=$id";
$que = mysqli_query($conn, $ped);
if ($que) {
    header('Location: ../adm.php');
}
else {
    echo "Ha ocurrido un error";
    //header('Location: ../adm.php');
}

?>
