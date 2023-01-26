<?php

$servername = "localhost";
$username = "somawans_Dineth1";
$password = "DINETH123";
$dbname = "somawans_warehouse";
$conn = mysqli_connect($servername, $username, $password,$dbname);

if(!$conn){

die("connection failed: " . mysqli_connection_error());


}


?>