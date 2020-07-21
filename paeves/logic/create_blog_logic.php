<?php

    if(isset($_REQUEST['create_blog'])){
        print_r($_FILES['blog_image']);
        $blog_image_name = $_FILES['blog_image']['name'];
        echo $blog_image_name;
    }

?>