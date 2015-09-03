<?php
/**
 * Created by PhpStorm.
 * User: romarinpc
 * Date: 9/3/15
 * Time: 5:48 AM
 */
include "../bd.php";

$matricula = $_POST["matricula"];

$query = "DELETE FROM alumno WHERE  matricula = '$matricula'";


$status = "";
if (executeQuery($query)) {
    $status = "Se ha eliminado el alumno";
} else {
    $status = "";
}

echo $status;