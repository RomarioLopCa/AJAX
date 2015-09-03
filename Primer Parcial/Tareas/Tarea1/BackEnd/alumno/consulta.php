<?php
/**
 * Created by PhpStorm.
 * User: romarin
 * Date: 2/09/15
 * Time: 06:02 PM
 */
header("Content-Type:text/plain");
define('SERVER', 'localhost');
define('DB_NAME', 'ajax');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');


$matricula = $_GET["matricula"];

$query = "SELECT * FROM alumno WHERE matricula='$matricula'";


// realizar conexion
$connection = mysqli_connect(SERVER, DB_USER, DB_PASSWORD, DB_NAME) or die ("DB access error" . mysqli_error($connection));
$rows = mysqli_query($connection, $query);
if ($rows->num_rows > 0) {
    if ($row = $rows->fetch_assoc()) {
        echo $row['matricula'] . '<br/>' . $row['nombre'] . '<br/>' . $row['apellido'] . '<br/>' . $row['fecha_nacimiento'] . '<br/>' .
            $row['fecha_ingreso'] . '<br/>' . $row['genero'] . '<br/>' . '<a href="mailto:' . $row['correo'] . '">' . $row['correo'] . '</a>' .
            '<br>' . $row['carrera'];
    } else {
        echo "";
    }
} else {
    echo "";
}