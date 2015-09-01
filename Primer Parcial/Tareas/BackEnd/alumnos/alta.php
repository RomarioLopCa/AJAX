<?php
/**
 * Created by PhpStorm.
 * User: romarin
 * Date: 1/09/15
 * Time: 08:29 AM
 */
include '../bd.php';

$sName = $_POST["txtName"];
$sAddress = $_POST["txtAdress"];
$sCity = $_POST["txtCity"];
$sState = $_POST["txtState"];
$sZipCode = $_POST["txtZipCode"];
$sPhone = $_POST["txtPhone"];
$sEmail = $_POST["txtEmail"];

$query = "Insert into customers(`Name`, `Address`, `City`, `State`, `Zip`, `Phone`, `E-mail`)" .
    "values('$sName','$sAddress','$sCity','$sState','$sZipCode','$sPhone','$sEmail')";


$sStatus = executeQuery($connection);
echo $sStatus;

