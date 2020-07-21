<?php

if(isset($_POST['signup'])){
    user_insert($conn, $username, $email,$password);
        header("Location: login.php");
}