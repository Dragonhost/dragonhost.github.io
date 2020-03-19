<?php
    // This is a database connection file
    
    $hostname = "localhost";
    $username = "packetpz_kamal";
    $password ="HELERcar";
    $dbname = "packetpz_kamal";

    $conn = mysqli_connect($hostname,$username,$password,$dbname);
        
    if(!$conn){
        var_dump(mysqli_connect_error());
    }

?>