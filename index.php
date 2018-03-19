<?php
include_once "dbconfig.php";
$var = mysqli_query($link,'SELECT Servicio from medico WHERE Nombre="manuel"');
$row = mysqli_fetch_row($var);
echo $row[0];


