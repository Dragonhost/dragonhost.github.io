<?php

   function retrieve($conn){
        $sql = "SELECT * FROM data";
        $query = mysqli_query($conn, $sql);
        return $query;
    }

    $result = retrieve($conn);

    function insert($conn, $title, $desc){
        $sql = "INSERT INTO data(title, description) VALUES('$title','$desc')";
        $query = mysqli_query($conn, $sql);
    }
    
    function retrieve_id($conn, $id){
        $sql = "SELECT * FROM data WHERE id = $id";
        $query = mysqli_query($conn, $sql);
        return $query;
    }

    function update($conn, $id, $title, $desc){
        $desc_slashes = addslashes($desc);
        
        $sql = "UPDATE data SET title='$title', description='$desc_slashes' WHERE id=$id";
        $query = mysqli_query($conn, $sql);
    
    }
    

    function delete($conn, $id){
        $sql = "DELETE FROM data WHERE id= $id";
        $query = mysqli_query($conn, $sql);
        
    }

    function retrieve_users($conn, $email){
        $sql = "SELECT * FROM users WHERE email= '$email'";
        $query = mysqli_query($conn, $sql);
        return $query;
    }

    function insert_users($conn, $username, $email, $password){
        $hash_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users(username, email, password) VALUES('$username', '$email', '$hash_password')";
        $query = mysqli_query($conn, $sql);
    }

    function logout(){
        unset($_SESSION['username']);
        header("Location: index.php");
    }
?>






