<?php
// Params to connect to a database
$dbHost = "operations.hc-sc.gc.ca";
$dbUser = "yuzhu";
$dbPass = "uhk2FZ*uB4jC";
$dbName_apm = "apm";
$dbName_sam = "sam";
//Connetion to database
$conn_apm = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName_apm);
$conn_sam = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName_sam);

if($conn_apm) {   
    // mysql_select_db($dbName_apm,$conn_apm);
}
else{
    die("Database connection failed");
}

if($conn_sam) {   
    // mysql_select_db($dbName_sam,$conn_sam);
}
else{
    die("Database connection failed");
}