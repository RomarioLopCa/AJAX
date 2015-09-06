<?php
/**
 * Created by PhpStorm.
 * User: romarin
 * Date: 2/09/15
 * Time: 06:02 PM
 */
define('SERVER', 'localhost');
define('DB_NAME', 'ajax');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');


$clv = $_GET["clave"];

$query = "SELECT * FROM tutor WHERE clave='$clv'";


// realizar conexion
$connection = mysqli_connect(SERVER, DB_USER, DB_PASSWORD, DB_NAME) or die ("DB access error" . mysqli_error($connection));
$rows = mysqli_query($connection, $query);
if ($rows->num_rows > 0) {
    if ($row = $rows->fetch_assoc()) {
        echo $row['clave'] . '<br/>' . $row['nombre'] . '<br/>' . $row['apellido'] . '<br/>' . $row['genero'] . '<br/>' .
            $row['area'] . '<br/>' . '<a href="mailto:' . $row['email'] . '">' . $row['email'] . '</a>' .
            '<br>' . $row['carrera'];
    } else {
        echo "";
    }
} else {
    echo "";
}