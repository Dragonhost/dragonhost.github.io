<?php

    if(!empty($room_name) && !empty($room_password)){
        // retrieve all the rooms in the database
        $all_rooms = all_rooms($conn);
        $rowcount = mysqli_num_rows($all_rooms);
        // Check if roomname is already taken
        if($rowcount > 0){
            foreach($all_rooms as $a_r){
                if($a_r['room_name'] != $room_name){    
                    create_room($conn, $room_name, $room_password, $_SESSION['user_id']);
                    header("Location: rooms.php");
                    exit();
                }
                else{
                    header("Location: rooms.php?roomNameTaken");
                    exit();
                }
            }
        }
        else{
            create_room($conn, $room_name, $room_password, $_SESSION['user_id']);
            header("Location: rooms.php");
            exit();
        }


    }


    

    $all_rooms_id_result = all_rooms_user($conn, $_SESSION['user_id']);

?>