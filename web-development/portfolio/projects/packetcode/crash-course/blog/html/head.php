<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="blog, first webpage, first blog, packecode, kamal teja">
    <meta name="description" content="This is a sample blog created for packetcode video tutorials on web development crash course">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- My stylesheet -->
    <link rel="stylesheet" href="css/style.css">

    <title>Blog</title>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark  mb-4">
        <a class="navbar-brand" href="#">Packetcode</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse"            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blogs.php">Blogs</a>
                </li>
    
                <?php if(isset($_SESSION['email'])){if($_SESSION['email'] == 'kamaltejag@gmail.com'){?>
                    <li class="nav-item">
                        <a class="nav-link" href="create.php">Create</a>
                    </li>
                <?php }}?>
                <?php if(isset($_SESSION['email'])){?>
                    <form method="POST">
                        <button type="submit" class="btn logout" name="logout">Logout</button>
                    </form>
                <?php }else{?>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signup.php">SignUp</a>
                    </li>
                <?php }?>

            </ul>
        </div>

    </nav>
