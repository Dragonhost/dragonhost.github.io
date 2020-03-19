<?php

    if(isset($_REQUEST['update'])){
        $result = update($conn, $id, $title, $desc);
    }

?>