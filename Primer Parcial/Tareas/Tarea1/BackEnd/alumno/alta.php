<?php
include "../bd.php";

$mat = $_POST["matricula"];
$nom = $_POST["nombre"];
$ap = $_POST["apellido"];
$f_nac = $_POST["fecha_nacimiento"];
$f_ing = $_POST["fecha_ingreso"];
$gen = $_POST["genero"];
$email = $_POST["correo"];
$carrera = $_POST["carrera"];


$query = "INSERT into alumno(matricula, nombre, apellido, fecha_nacimiento, fecha_ingreso, genero, correo, carrera)
VALUES ($mat, $nom, $ap, $f_nac, $f_ing, $gen, $email, $carrera)";

$sStatus = "";

if (executeQuery($query)) {
    $sStatus = "Se ha agregado el alumno";
} else {
    $sStatus = "Ocurrió un error al agregar el alumno";
}

echo $sStatus;

