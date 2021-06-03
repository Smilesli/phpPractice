<?php
// Params to connect to a database
$dbHost = "localhost";
$dbUser= "root";
$dbPass = "Algonquin8";
$dbName = "test";
//Connetion to database
$conn = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);

if($conn) {   
}
else{
    die("Database connection failed");
}