<?php
/**
 * Created by PhpStorm.
 * User: romarin
 * Date: 1/09/15
 * Time: 08:30 AM
 */
define('SERVER', 'localhost');
define('DB_NAME', 'bdventas');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');

// realizar conexion


function executeQuery($query)
{
    $connection = mysqli_connect(SERVER, DB_USER, DB_PASSWORD, DB_NAME) or die ("DB access error" . mysqli_error($connection));

    // ejecuta el query
    $result = mysqli_query($connection, $query);

    if ($result != false) {
        return "Se ha agregado el cliente con id = " . mysqli_insert_id($connection);
    } else {
        return "Ocurrió un error al insertar el dato, cliente no creado";
    }
}
