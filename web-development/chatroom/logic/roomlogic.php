<?php
    if(isset($_REQUEST['room_id'])){
        $room_data = room_data($conn, $room_id);
        foreach($room_data as $r_d){
            $admin_id = $r_d['admin_id'];
            $retrieve_user_result = retrieve_user($conn, $admin_id);
        }

        $retrieve_all_messages_reload = retrieve_all_messages($conn, $_REQUEST['room_id']);
        $retrieve_all_messages_reload_rows = mysqli_num_rows($retrieve_all_messages_reload);
        if(!($retrieve_all_messages_reload_rows > 0)){
            $retrieve_all_messages_reload = 'empty';
        }
    }

    

?>