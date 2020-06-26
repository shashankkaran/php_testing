<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
 <body style="  background:  hotpink    ; text-align:center;  ">

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














echo "start <br> "  ;









echo "<br>";
for ($k=1; $k <10 ; $k++) { 
 
    echo $k; 
echo "<br>";
for ($l=1; $l <=$k ; $l++) { 
  echo "  $l  ." ;
}




}

echo"<br>";
for ($i=1; $i < 10; $i++) { 
  
    echo " $i  .";

    echo "<br>";
    for ($j=9; $j >$i ; $j--) { 
       echo " $j .";
    }
}



error_reporting(0);






?> 

<section style="background:grey; text-align:center; padding:1rem; margin:1rem  ; border:1rem solid black; border-radius:1rem; "   >


<form  action="" method="">
<br><br>

NAME<br><input type="text" placeholder="name" name="name"> <br><br>

CLASS<br><input type="text" name="class" placeholder="class"/><br><br>
ROLL<br><input type="text" name ="roll " placeholder="roll"/><br><br>
AGE<br><input type="text" name="age" placeholder="age"/><br><br>
<button style=" color:grey ;background: black;border-radius:1rem;  "   >SUBMIT</button>

</form>

</section>




<?php



$sn = $_GET ['name'];
$rl=$_GET ['roll'];
$ag = $_GET ['age'];
$cl=$_GET['class'];


echo $sn;



?>


    
</body>
</html>

