<?php
// Params to connect to a database
$dbHost = "operations.hc-sc.gc.ca";
$dbUser= "yuzhu";
$dbPass = "uhk2FZ*uB4jC";
$dbName = "apm";
//Connetion to database
$conn = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);

if($conn) {   
}
else{
    die("Database connection failed");
}