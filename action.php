<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hi form</title>
</head>
<body>















<?php


$servername ="localhost";
$username = "root";
$password = "";
$dbname = "testdb";


$con = mysqli_connect( $servername,$username ,$password, $dbname );

if($con)
{
    echo " connected ";

}
else
{

    die("failed".mysql_connect_error()) ;

}







$sql = "SELECT * FROM `testtable`";






echo "start <br> "  ;





error_reporting(0);






?> 





<?php



$sn = $_GET ['name'];
$rl=$_GET ['roll'];
$ag = $_GET ['age'];
$cl=$_GET['class'];



$query =  "insert('$sn','$rl','$ag','$cl')";
$data = mysqli_query($con,$query) ;

if($data)
{
echo "Data inserted into database " ;

}
else {
    echo"fuck you<br>";
}


?>



<?php

echo "thank for submitting"






?>











    
</body>
</html>