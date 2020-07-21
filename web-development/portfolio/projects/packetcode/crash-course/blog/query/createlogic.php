<?php

if(isset($_POST['create'])){
    post_insert($conn, $title, $description);
}