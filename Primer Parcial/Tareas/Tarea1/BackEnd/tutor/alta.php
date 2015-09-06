<?php
include "../bd.php";

$clv = $_POST["alta_clave"];
$nom = $_POST["nombre"];
$ap = $_POST["apellido"];
$gen = $_POST["genero"];
$area = $_POST["area"];
$email = $_POST["correo"];


$query = "INSERT INTO tutor(clave, nombre, apellido, genero, area, email)
VALUES ('$clv', '$nom', '$ap', '$gen', '$area', '$email')";

$status = "";
if (executeQuery($query)) {
    $status = "Se ha agregado el tutor";
} else {
    $status = "";
}

echo $status;

