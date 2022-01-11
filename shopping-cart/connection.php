


<?php

error_reporting(0);
$con = "";
  

    $servername = "localhost:3306";
    $dbname = "db";
    $username = "root";
    $password = "";
  
    $con = mysqli_connect($servername,$username,$password,$dbname);
    
if($con){
	echo"successascasc";
}


?>
