<?php
    include 'includes/includes.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="This is a opensource chatting webapp">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/996973c893.js"></script>   
    <!-- Bootstrap Styling -->
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- My Stylesheet -->
    <link rel="stylesheet" href="css/login_signup.css">

    <title>ChatRoom</title>

</head>
<body>
    <form method="get" class="form-signin text-center" >
        <img class="mb-4" src="images/chat-2.png" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Login</h1>
        <input type="email" name="email" class="form-control" placeholder="Email address" >
        <input type="password" name="password" class="form-control mt-2" placeholder="Password">
        <button class="btn btn-lg btn-primary btn-block" name="login">Login</button>
        <p class="text-muted mt-3">Don't have an account yet ? <a href="signup.php">Sign Up</a></p>
        <p class="mt-5 mb-3 text-muted ">Copyright &copy;2019, Kamal Teja</p>
    </form>
</body>
</html>