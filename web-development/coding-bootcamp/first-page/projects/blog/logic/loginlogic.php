<?php
    
    // logic for login
    if(isset($_REQUEST['email'])){
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $status = login($conn,$email,$password);
    }

    // logic for logout
    if(isset($_REQUEST['logout'])){
        logout();
    }


?>