<?php
    
    if(isset($_REQUEST['create'])){
        if(!empty($title) && !empty($desc)){
            insert($conn, $title, $desc);
            header("Location: blog.php");
            exit();
        }
    }


?>