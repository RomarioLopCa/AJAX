<?php
/**
 * Created by PhpStorm.
 * User: romarinpc
 * Date: 9/3/15
 * Time: 5:48 AM
 */
include "../bd.php";

$clv = $_POST["baja_clave"];

$query = "DELETE FROM tutor WHERE  clave = '$clv'";
//echo $query;

$status = "";
if (executeQuery($query)) {
    $status = "Se ha eliminado el tutor";
} else {
    $status = "";
}

echo $status;