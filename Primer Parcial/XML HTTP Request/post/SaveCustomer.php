<?php
define('SERVER', 'localhost');
define('DB_NAME', 'bdventas');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');

// realizar conexion
$connection = mysqli_connect(SERVER, DB_USER, DB_PASSWORD, DB_NAME) or die ("DB access error" . mysqli_error($connection));

function executeQuery($connection)
{
    $sName = $_POST["txtName"];
    $sAddress = $_POST["txtAdress"];
    $sCity = $_POST["txtCity"];
    $sState = $_POST["txtState"];
    $sZipCode = $_POST["txtZipCode"];
    $sPhone = $_POST["txtPhone"];
    $sEmail = $_POST["txtEmail"];

    $query = "Insert into customers(`Name`, `Address`, `City`, `State`, `Zip`, `Phone`, `E-mail`)" .
        "values('$sName','$sAddress','$sCity','$sState','$sZipCode','$sPhone','$sEmail')";
    // ejecuta el query
    $result = mysqli_query($connection, $query);

    if ($result != false) {
        return "Se ha agregado el cliente con id = " . mysqli_insert_id($connection);
    } else {
        return "Ocurrió un error al insertar el dato, cliente no creado";
    }
}

$sStatus = executeQuery($connection);
echo $sStatus;

