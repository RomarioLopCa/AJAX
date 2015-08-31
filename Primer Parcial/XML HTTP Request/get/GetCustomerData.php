<?php
header("Content-Type:text/plain");
define('SERVER', 'localhost');
define('DB_NAME', 'bdventas');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');

function executeQuery()
{
    $sID = $_GET["id"];

    $sQuery = "SELECT * FROM customers WHERE customerId = $sID;";

    // realizar conexion
    $connection = mysqli_connect(SERVER, DB_USER, DB_PASSWORD, DB_NAME) or die ("DB access error" . mysqli_error($connection));
    $rows = mysqli_query($connection, $sQuery);
    if ($rows->num_rows > 0) {
        if ($row = $rows->fetch_assoc()) {
            return ($row['Name'] . '<br/>' . $row['Address'] . '<br/>' . $row['City'] . '<br/>' . $row['State'] . '<br/>' .
                $row['Zip'] . '<br/>' . $row['Phone'] . '<br/>' . '<a href="mailto:' . $row['E-mail'] . '">' . $row['E-mail'] . '</a>');
        } else {
            return ("No existe el cliente con id = " . $sID);
        }
    } else {
        return ("No existe el cliente con id = " . $sID);
    }
}

$sInfo = executeQuery();

echo $sInfo;