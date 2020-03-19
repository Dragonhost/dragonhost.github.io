<?php

require 'variables.inc.php';

if (isset($_POST[$signUpButton])) {

  require 'dbh.inc.php';
  
  $username = $_POST[$username];
  $email = $_POST[$email];
  $password = $_POST[$password];
  $passwordrepeat = $_POST[$passwordRepeat];

  if (empty($username) || empty($email) || empty($password) || empty($passwordrepeat)) {
   header("Location: ../signUp.php?error=emptyfields&uid=".$username."&mail=".$email);
   exit(); 
  }
  elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)){
   header("Location: ../signUp.php?error=invaliduidmail");
   exit(); 
  }
  elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    header("Location: ../signUp.php?error=invalidmail&uid=".$username);
   exit(); 
  }
  elseif (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
    header("Location: ../signUp.php?error=invalidusername&mail=".$email);
   exit(); 
  }
  elseif ($password !== $passwordrepeat){
    header("Location: ../signUp.php?error=passwordcheck&uid=".$username."&mail=".$email);
    exit(); 
  }
  else{
    $sql = "SELECT $usernameColumn FROM $tableName WHERE $usernameColumn=?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
      header("Location: ../signUp.php?error=sqlierror1");
      exit(); 
    }
    else{
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resultcheck = mysqli_stmt_num_rows($stmt);
        if($resultcheck > 0){
          header("Location: ../signUp.php?error=usernametaken");
          exit(); 
        }
        else{
          $sql = "INSERT INTO $tableName ($usernameColumn, $emailColumn , $passwordColumn) VALUES (?, ?, ?)";
          $stmt = mysqli_stmt_init($conn);
          if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../signUp.php?error=sqlierror2");
            exit(); 
          }
          else{
            $hashPwd = password_hash($password, PASSWORD_DEFAULT); 
            mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashPwd);
            mysqli_stmt_execute($stmt);
            header("Location: ../signUp.php?signUp=success");
          exit(); 
          }
        }
    }
  }
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}
else{
  header("Location: ../signUp.php?");
  exit(); 
}