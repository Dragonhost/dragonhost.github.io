<?php

    if(isset($_REQUEST['admin_password_verify'])){
        $admin_password_result = retrieve_login($conn, 'admin@gmail.com');
        foreach($admin_password_result as $a_p_r){
            if(password_verify($typed_admin_password, $a_p_r['password'])){
                $_SESSION['username'] = 'Kamal';
                header("Location: index.php");
                exit();
            }  
            else{
                $password_error = 'Wrong Password';
            }
        }
        
    }


?>