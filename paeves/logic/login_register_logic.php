<?php

   if(isset($_REQUEST['login_register'])){
      if($email == 'admin@gmail.com' ){
         header("Location: admin_password_verify.php");
         exit();
      }
      else{
         $login_result  = retrieve_login($conn, $email);
         if(mysqli_num_rows($login_result) > 0){
            foreach($login_result as $l_r){
               $l_r_split = explode('@', $l_r['email']);
               $_SESSION['username'] = $l_r_split[0];
               header("Location: index.php");
               exit();
            }
         }
         else{
            insert_new_email($conn, $email);
            $username = explode("@", $email);
            $_SESSION['username'] = $username[0];
            header("Location: index.php");
            exit();
         }
      }
   }



?>