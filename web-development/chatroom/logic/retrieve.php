<?php

    // retrieve from login page
    if(isset($_REQUEST['login'])){
        if(isset($_REQUEST['email'])){
            $email = $_REQUEST['email'];
        }
        if(isset($_REQUEST['password'])){
            $password = $_REQUEST['password'];
        }

    }

    // retrieve from signup page
    if(isset($_REQUEST['signup'])){
        if(isset($_REQUEST['username'])){
            $username = $_REQUEST['username'];
        }
        if(isset($_REQUEST['email'])){
            $email = $_REQUEST['email'];
        }
        if(isset($_REQUEST['password'])){
            $password = $_REQUEST['password'];
        }  
    }

    // retrieve for logout
    if(isset($_REQUEST['logout'])){
        logout();
    }

    // retrieve for room data
    if(isset($_REQUEST['create_room'])){
        if(isset($_REQUEST['room_name'])){
            $room_name = $_REQUEST['room_name'];
        }
        if(isset($_REQUEST['room_password'])){
            $room_password = $_REQUEST['room_password'];
        }
    }

    // retrieve room_id
    if(isset($_REQUEST['room_id'])){
        $room_id = $_REQUEST['room_id'];
    }

?>    