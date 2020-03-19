<?php

function user_insert($conn, $username, $email, $password){
    $sql = "INSERT INTO users(username, email, password) VALUES('$username', '$email', '$password')";
    $result = mysqli_query($conn, $sql);
}

function user_retrieve($conn, $email, $password){
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)>0){
        return mysqli_fetch_array($result);
    }else
        header("Location: signup.php");
}

function post_insert($conn, $title, $description){
    $sql = "INSERT INTO post(title, description) VALUES('$title', '$description')";
    $result = mysqli_query($conn, $sql);
}