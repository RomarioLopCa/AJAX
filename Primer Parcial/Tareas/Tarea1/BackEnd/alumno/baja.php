<?php
/**
 * Created by PhpStorm.
 * User: romarinpc
 * Date: 9/3/15
 * Time: 5:48 AM
 */
include "../bd.php";

$matricula = $_POST["baja_matricula"];

$query = "DELETE FROM alumno WHERE  matricula = '$matricula'";
//echo $query;

$status = "";
if (executeQuery($query)) {
    $status = "Se ha eliminado el alumno";
} else {
    $status = "";
}

echo $status;