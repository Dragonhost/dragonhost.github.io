<?php

    if(isset($_REQUEST['login'])){
        $result_users = retrieve_users($conn, $email);

        if(mysqli_num_rows($result_users) == 0){
            header("Location: signup.php?status=noaccount");
            exit();
        }
        else{
            foreach($result_users as $r_users){
                $hashed_password = $r_users['password'];
                if(password_verify($password, $hashed_password)){
                    $username = $r_users['username'];
                    $_SESSION['username'] = $username;
                    header("Location: index.php?user=$username");
                    exit();
                }
            }
        }
    }
    
?>
