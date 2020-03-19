<?php

    $blog = retrieve_blog($conn,$id);

    $update_status = 0;
    if(isset($_REQUEST['delete'])){
        
        delete($conn,$id);
        $update_status =1;
        $update_message = "Successfully Deleted the blog item";
        
        header("Location: index.php");
    }


?>