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