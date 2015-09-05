<?php
/**
 * Created by PhpStorm.
 * User: romarin
 * Date: 1/09/15
 * Time: 04:24 PM
 */
session_start();
if (!isset($_SESSION["username"])) {
    header('Location: login.html');
}
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>AJAX Tarea 1</title>
    </head>
    <body>
        <center>
            <table>
                <tr>
                    <th colspan="2">Menú</th>
                </tr>
                <tr>
                    <td><a href="alumno/index.html">Alumnos</a></td>
                    <td><a href="tutor/index.html">Tutores</a></td>
                    <td><a href="../BackEnd/logout.php">Log out</a></td>
                </tr>
            </table>
        </center>
    </body>
</html>
