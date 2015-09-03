<?php
include "../bd.php";

$mat = $_POST["alta_matricula"];
$nom = $_POST["nombre"];
$ap = $_POST["apellido"];
$f_nac = $_POST["fecha_nacimiento"];
$f_ing = $_POST["fecha_ingreso"];
$gen = $_POST["genero"];
$email = $_POST["correo"];
$carrera = $_POST["carrera"];


$query = "INSERT INTO alumno(matricula, nombre, apellido, fecha_nacimiento, fecha_ingreso, genero, correo, carrera)
VALUES ('$mat', '$nom', '$ap', '$f_nac', '$f_ing', '$gen', '$email', '$carrera')";

$status = "";
if (executeQuery($query)) {
    $status = "Se ha agregado el alumno";
} else {
    $status = "";
}

echo $status;

