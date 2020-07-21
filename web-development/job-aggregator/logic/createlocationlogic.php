<?php

if(isset($_REQUEST['create_location'])){
    $result = check_location($conn, $new_location);
    if(!empty($new_location)){
        if(mysqli_num_rows($result) == 0){
            create_location($conn, $new_location);
        }
    }
}

?>

