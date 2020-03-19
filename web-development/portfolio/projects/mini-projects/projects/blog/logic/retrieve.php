<?php

    if(isset($_REQUEST['create'])){
        if(isset($_REQUEST['title'])){
            if(!empty($_REQUEST['title'])){
                $title = $_REQUEST['title'];
            }
            else{
                $status =  "Title is empty";
            }
        }

        if(isset($_REQUEST['desc'])){
           if(!empty($_REQUEST['desc'])){
                $desc = $_REQUEST['desc'];
            }
            else{
                $status = "Description is empty";
            }
        }
        if(empty($_REQUEST['title']) && empty($_REQUEST['desc'])){
            $status = "Give a Title and Description";
        }
    
    }

    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
    }

    if(isset($_REQUEST['update'])){
        $title = $_REQUEST['title'];
        $desc = $_REQUEST['desc'];
    }
    
    if(isset($_REQUEST['login'])){
        if(isset($_REQUEST['email'])){
            $email = $_REQUEST['email'];
        }
        if(isset($_REQUEST['password'])){
            $password = $_REQUEST['password'];
        }
    }

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

    if(isset($_REQUEST['logout'])){
        logout();
    }

?>





