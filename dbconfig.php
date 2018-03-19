<?php
$host= "localhost";
$user= "root";
$password = "root";
$datbase= "GESTMED";
$link = mysqli_connect("localhost", "root", "root", "GESTMED");


if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

mysqli_select_db( $link ,"GESTMED");
?>
