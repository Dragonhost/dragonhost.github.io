<?php
require 'variables.inc.php';

if(isset($_POST[$loginButton])){

  require 'dbh.inc.php';
  
  
  $mailuid = $_POST['mailuid'];
  $password = $_POST['pwd'];

  if(empty($mailuid) || empty($password) ){
    header("Location: ../login.php?error=emptyfields");
    exit(); 
  }
  else{
    $sql = "SELECT * FROM $tableName WHERE $usernameColumn=? OR $emailColumn =?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
      header("Location: ../login.php?error=sqlerror");
      exit(); 
    }
    else{
      mysqli_stmt_bind_param($stmt, 'ss', $mailuid, $mailuid);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if($row = mysqli_fetch_assoc($result)){
        $pwdcheck = password_verify($password, $row[$passwordColumn]);
        if($pwdcheck == false){
          header("Location: ../login.php?error=wrongpwd");
          exit(); 
        }
        elseif($pwdcheck == true){
           session_start();
           $_SESSION['userId'] = $row['idUsers'];
           $_SESSION['userUId'] = $row['uidUsers'];
           header("Location: ../mainpage.php");
           exit(); 
        }
        else{
          header("Location: ../login.php?error=wrong");
          exit(); 
        }
        
      }
      else{
        header("Location: ../login.php?error=nouser");
        exit(); 
      }
    }
  }

}   
else{
  header("Location: ../login.php?");
  exit(); 
}