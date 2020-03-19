<?php

    // retrieve all rows from paeves_login_register
    function retrieve_login($conn, $email){
        $sql = "SELECT * FROM paeves_login_register WHERE email = '$email'";
        $query = mysqli_query($conn, $sql);
        return $query;
    }
    function insert_new_email($conn, $email){
        $sql = "INSERT INTO paeves_login_register(email) Values('$email')";
        $query = mysqli_query($conn, $sql);
    }

?>