<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Signika:400,600,700"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="style.css" />
    <title>Login||SignUp Form</title>
  </head>
  <body>
    <div class="container">
      <i class="fas fa-link fa-3x logo"></i>
      <h1 class="branding">Dragonhost</h1>
    
      <?php
        if(isset($_SESSION['userId'])){
          echo '<div class="button"><a href="mainpage.php">Login</a></div>';

        }
        else{

          echo '<div class="button"><a href="login.php">Login</a> <a href="signUp.php">Sign Up</a></div>';
        }
      ?>
    </div>
    
    <?php
    if(isset($_SESSION['userId'])){
      echo '<p>Currently Logged in</p>';
    }
    else{
      echo '<p>Currently Logged out</p>';
    }
    ?>

  </body>
</html>
