<?php

    //retrieve users with specific email 
    function retrieve_users($conn, $email){
        $sql = "SELECT * FROM chatroom_users WHERE email= '$email'";
        $query = mysqli_query($conn, $sql);
        return $query;
    }

    //retrieve all the chatroom_users 
    function retrieve_all_users($conn){
        $sql = "SELECT * FROM chatroom_users";
        $query = mysqli_query($conn, $sql);
        return $query;
    }

    //retrieve user using admin_id
    function retrieve_user($conn, $admin_id) {
        $sql = "SELECT * FROM chatroom_users WHERE id = '$admin_id'";
        $query = mysqli_query($conn, $sql);
        return $query;
    }

    // Signup form logic function
    function insert_users($conn, $username, $email, $password){
        $result_all_users = retrieve_all_users($conn);
        foreach($result_all_users as $r_a_u){
            if($username == $r_a_u['username']){
                header("Location:signup.php?usernameTaken");
                exit();
            }
        }
        $hash_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO chatroom_users(username, email, password) VALUES('$username', '$email', '$hash_password')";
        $query = mysqli_query($conn, $sql);
    }

    // Logout functionality
    function logout(){
        unset($_SESSION['username']);
        echo $_SESSION['username'];
    }
    
    function all_rooms($conn){
        $sql = "SELECT * FROM chatroom_rooms";
        $query = mysqli_query($conn, $sql);
        return $query;
    }

    // create room
    function create_room($conn, $room_name, $room_password, $admin_id){
        $hashed_room_password = password_hash($room_password, PASSWORD_DEFAULT);
        $room_id = substr(md5(mt_rand()), 0, 7);
        $sql = "INSERT INTO chatroom_rooms(room_name, room_password, admin_id, room_id) VALUES('$room_name', '$hashed_room_password',' $admin_id', '$room_id')";
        $query = mysqli_query($conn, $sql);
    }

    // retrieve all rooms by the user
    function all_rooms_user($conn, $admin_id){
        $sql = "SELECT * FROM chatroom_rooms WHERE admin_id = $admin_id";
        $query = mysqli_query($conn, $sql);
        return $query;
    }

    // retrieve the room data using room_id
    function room_data($conn, $room_id){
        $sql = "SELECT * FROM chatroom_rooms WHERE room_id = '$room_id'";
        $query = mysqli_query($conn, $sql);
        return $query;
    }

    // Add message of a specific room from a user
    function add_message($conn, $message, $username, $room_id){
        $message_slashed = addslashes($message); 
        $sql = "INSERT INTO chatroom_messages(message, username, room_id) VALUES('$message_slashed', '$username', '$room_id')";
        $query = mysqli_query($conn, $sql);
    }

    // retrieve all messages of the room
    function retrieve_all_messages($conn, $room_id){
        $sql = "SELECT * FROM chatroom_messages";
        $query = mysqli_query($conn, $sql);
        return $query;
    }

?>