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

    <link rel="stylesheet" href="login.css" />
    <title>Login||SignUp Form</title>
  </head>
  <body>
    <div class="container">
      <i class="fas fa-link fa-3x logo"></i>
      <h1 class="branding">Dragonhost</h1>

      <?php
          require "includes/loginErrors.inc.php";
      ?>

      <form action="includes/login.inc.php" method="post"> 
        <input type="text" name= "<?= $emailOrUsername ?>" placeholder="Username/Email..." class="id-pwd">
        <input type="password" name= "<?= $loginPassword ?>" placeholder="Password..." class="id-pwd">
        <button type="submit" name="<?= $loginButton?>" class="login-btn">Login</button>
      </form>

      <div><h3>Don't have an Account Yet? </h3><a href="signUp.php">Sign Up</a></div>
    </div>
  </body>
</html>
