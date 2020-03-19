<?php

if(isset($_POST['login'])){
    $login = user_retrieve($conn, $email, $password);
    $_SESSION['username'] = $login["username"];
    $_SESSION['email'] = $login["email"];
    header("Location: index.php");
}