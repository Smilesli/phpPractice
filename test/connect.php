
// PHP code to establish connection
// with the localserver
<?php
  // echo phpinfo();
  // exit
// Username is root
$user = 'root';
// $password = 'Algonquin8'; 
$password = 'Algonquin8'; 
  
// Database name is gfg
$database = 'test'; 
  
// Server is localhost with
// port number 3308
$servername='localhost:3306';
// $conn = $mysql_connect($servername, $user, $password, $database);
$mysqli = new mysqli($servername, $user, $password, $database);
  
// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' . 
    $mysqli->connect_errno . ') '. 
    $mysqli->connect_error);
}
  
// SQL query to select data from database
$sql = "SELECT * FROM parrots";
// $result = $conn->query($sql);
$result = $mysqli->query($sql);
$mysqli->close(); 
?>