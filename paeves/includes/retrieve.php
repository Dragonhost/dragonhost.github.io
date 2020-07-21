<?php

// retrieve email
if(isset($_REQUEST['login_register'])){
    $email = $_REQUEST['login_register_email']; 
    $email = mysqli_real_escape_string($conn, $email);
}

// logout functionality
if(isset($_REQUEST['logout'])){
    unset($_SESSION['username']);
    header("Location: index.php");
}

// retrieve admin password 
if(isset($_REQUEST['admin_password_verify'])){
    $typed_admin_password = $_REQUEST['admin_password'];
}

// retrieve details to create blog
if(isset($_REQUEST['create_blog'])){
    if(!empty($_REQUEST['blog_title']) && !empty($_REQUEST['blog_description']) && !empty($_REQUEST['blog_tags'])){
        $blog_title = $_REQUEST['blog_title'];
        $blog_description = $_REQUEST['blog_description'];  
        $blog_tags = $_REQUEST['blog_tags'];
    }
    else{
        $blog_error = 'Enter all the fields';
    }
}

?>