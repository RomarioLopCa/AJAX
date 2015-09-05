<?php
/**
 * Created by PhpStorm.
 * User: romarin
 * Date: 3/09/15
 * Time: 03:37 PM
 */
session_start();

session_destroy();

header('Location: ../FrontEnd/login.html');