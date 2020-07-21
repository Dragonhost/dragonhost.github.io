<?php

$hostname ="localhost";
$username = "root";
$password ="";
$dbname = "blog";

$conn = mysqli_connect($hostname, $username, $password, $dbname);

if(!$conn){
    var_dump(mysqli_connect_error());
}
