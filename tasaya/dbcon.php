<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "khushi";

$conn = mysqli_connect($host, $username, $password, $dbname);

if(!$conn){

    die("Cnnection Failed: " . mysqli_connect_error());

}

?>