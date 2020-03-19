<?php

if(isset($_REQUEST['create_category'])){
    $result = check_category($conn, $new_category);
    if(!empty($new_category)){
        if(mysqli_num_rows($result) == 0){
            create_category($conn, $new_category);
        }
    }
}

?>
