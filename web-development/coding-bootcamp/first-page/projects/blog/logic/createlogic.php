<?php

    $success = 0;
    if(isset($_REQUEST['create']))
    {
        $error = false;
        if($_REQUEST['title'])
            $title = $_REQUEST['title'];
        else
            $error = '<p>Kindly Enter the title</p>';

        if($_REQUEST['description'])
            $description = $_REQUEST['description'];
        else
            $error = $error.'<p>Kindly Enter the description</p>';
        
        
        if(!$error){
            insert($conn,$title,$description); 
            $success = 1;
        }
         
    }
    
?>