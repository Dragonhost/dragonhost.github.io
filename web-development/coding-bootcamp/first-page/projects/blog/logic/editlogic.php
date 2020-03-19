<?php


    $update_status = 0;
    if(isset($_REQUEST['update'])){
        
        $title = $_REQUEST['title'];
        $description = $_REQUEST['description'];
        $id = $_REQUEST['id'];
        
        update($conn,$id,$title,$description);
        $update_status = 1;
        $update_message = "Successfully Updated the Blog";
    }

    $blog = retrieve_blog($conn,$id);


?>  