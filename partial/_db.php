<?php
$host="localhost";
$user="root";
$pass="";
$dbname="testlog";
$conn=mysqli_connect($host,$user,$pass,$dbname);
if (!$conn){
    die("Could not connect to".mysqli_error());
}
else{
    echo "conction successful";
}




?>