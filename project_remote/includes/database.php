<?php
// Params to connect to a database
$dbHost = "operations.hc-sc.gc.ca";
$dbUser = "yuzhu";
$dbPass = "uhk2FZ*uB4jC";
$dbName_apm = "apm";
//Connetion to database
$conn = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName_apm);

if($conn) {   
}
else{
    die("Database connection failed");
}