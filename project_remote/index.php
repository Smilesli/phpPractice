<?php
require_once 'includes/database.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$sql = "SELECT name FROM packages";

$sql_sam = "SELECT Package FROM cost_recovery";

// $sql = "SELECT sam.cost_recovery.Package, apm.packages.name FROM sam.cost_recovery join apm.packages on sam.cost_recovery.`App ID` = apm.packages.app_id";
// $result = mysqli_query($conn_apm, $sql);

$result = mysqli_query($conn_sam, $sql_sam);
$rowCount = mysqli_num_rows($result);

if ($rowCount>0){
    while($row = mysqli_fetch_assoc($result)){
        echo $row['Package']."<br>";
        // echo $row['name']."<br>";
    
     }
}

else {
    echo "No results found.";

}


?>
    
</body>
</html>