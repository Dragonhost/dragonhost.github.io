<?php
  require "includes/variables.inc.php";
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

    <link rel="stylesheet" href="signUp.css" />
    <title>Login||SignUp Form</title>
  </head>
  <body>
    <div class="container">
      <i class="fas fa-link fa-3x logo"></i>
      <h1 class="branding">Dragonhost</h1>

      <?php
        require "includes/signUpErrors.inc.php";
      ?>
        
      <form action="includes/signUp.inc.php" method="post">
      <label for="userid">Username</label>
        <input type="text" name="<?= $username ?>" class="id-pwd">
        <label for="email">Email</label>
        <input type="text" name="<?= $email ?>" class="id-pwd">
        <label for="pwd">Password</label>
        <input type="password" name="<?= $password ?>" class="id-pwd">
        <label for="re-pwd">Confirm Password</label>
        <input type="password" name="<?= $passwordRepeat ?>" class="id-pwd">
        <button type="submit" name="<?= $signUpButton?>" class="signUp-btn">Sign Up</button>
      </form>

      <div><h3>Already have an Account? </h3><a href="login.php">Login</a></div>
    </div>
  </body>
</html>
