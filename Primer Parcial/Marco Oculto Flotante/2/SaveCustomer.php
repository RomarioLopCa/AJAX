<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
    <title>Guarda datos cliente</title>
    <?php
    $sName = $_POST["txtName"];
    $sAddress = $_POST["txtAdress"];
    $sCity = $_POST["txtCity"];
    $sState = $_POST["txtState"];
    $sZipCode = $_POST["txtZipCode"];
    $sPhone = $_POST["txtPhone"];
    $sEmail = $_POST["txtEmail"];

    $sStatus = "";

    //Conexion
    $sDBServer = "localhost";
    $sDBName = "bdventas";
    $sDBUsername = "root";
    $sDBPassword = "root";

    $Sql = "Insert into customers(`Name`, `Àddress`, `City`, `State`, `Zip`, `Phone`, `Email`)" .
        "values('$sName','$sAddress','$sCity','$sState','$sZipCode','$sPhone','$sEmail')";

    echo $Sql;
    $sInfo = "";
    //Se realiza la conexi�n
    $oLink = mysql_connect($sDBServer, $sDBUsername, $sDBPassword);
    @mysql_select_db($sDBName) or $sInfo = "No se pudo abrir la base de datos";

    if ($sInfo == "") {
        if ($oResult = mysql_query($Sql)) {
            $sStatus = "se ha agregado el cliente con id = " . mysql_insert_id();
        } else {
            $sStatus = "Ocurri� un error al insertar el dato, el cliente no fue creado";
        }
    }
    mysql_close($oLink);

    ?>

    <script type="text/javascript">
        window.onload = function () {
//            top.frames["displayFrame"].saveResult("<?php //echo $sStatus ?>//");
            parent.saveResult("<?php echo $sStatus ?>");
        }
    </script>


</head>

<body>
</body>
</html>
