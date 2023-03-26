<?php

// start 3 variables 
$servername="localhost";
$username="root";
$password="";
//make a connection to the database
$conn=mysqli_connect($servername, $username, $password);
if (!$conn) {
    die("Not connected : ". mysqli_connect_error());
}else{
    echo "database connection successfully";
}

$sql="CREATE DATABASE P";
$resutl=mysqli_query($conn, $sql);
echo "This is database:".$resutl;






?>