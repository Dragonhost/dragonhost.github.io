<?php
     
    $id =  10;

    if(isset($_GET['add'])){

        // Insert into database
        $sql = "INSERT INTO data(a, b, result) VALUES($a, $b, $c)";   
        $query = mysqli_query($conn, $sql);  
        
        // Update in database
        $sql1 = "UPDATE data SET result = 500 where id = 3";
        $query1 = mysqli_query($conn, $sql1);

        // Delete in Database
        $sql2 = "DELETE FROM data WHERE id = $id";
        $query2 = mysqli_query($conn, $sql2);

        // Select data from database
        $sql3 = "SELECT * FROM data";
        $query3 = mysqli_query($conn,$sql3);
    }


?>