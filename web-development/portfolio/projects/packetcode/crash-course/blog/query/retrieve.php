<?php

if(isset($_POST['signup'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
}

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
}

if(isset($_POST['create'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
}


