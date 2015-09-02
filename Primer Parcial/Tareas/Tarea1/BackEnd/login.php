<?php
/**
 * Created by PhpStorm.
 * User: romarin
 * Date: 1/09/15
 * Time: 03:54 PM
 */

include "bd.php";
session_start();
$username = $_POST["username"];
$password = $_POST["password"];

$query = "SELECT * FROM administrador WHERE username='$username' AND password='$password'";

if (executeQuery($query)) {
    $_SESSION["username"] = $username;
    echo "1";
} else {
    echo "";
}