<?php

$server = 'localhost';
$user ='root';
$password ='';
$database = "taller";

$conn = mysqli_connect($server,$user,$password,$database);

if(!$conn){
    die('no pa'. mysqli_connect_error());
}

else{
    echo"iia tu dice";
}


?>