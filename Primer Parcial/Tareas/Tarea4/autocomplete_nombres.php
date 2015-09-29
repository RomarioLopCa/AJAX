<?php
define('SERVER', 'localhost');
define('DB_NAME', 'ajax');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');


function executeQuery($query)
{
    $connection = mysqli_connect(SERVER, DB_USER, DB_PASSWORD, DB_NAME) or die ("DB access error" . mysqli_error($connection));

    // ejecuta el query
    $result = mysqli_query($connection, $query);

    if ($result->num_rows != 0 or $connection->affected_rows != 0) {
        return true;
    } else {
        return false;
    }
}



$query = "SELECT nombre FROM alumno";

$status = "";
if (executeQuery($query)) {
    $status = "Se ha agregado el alumno";
} else {
    $status = "";
}

echo $status;

