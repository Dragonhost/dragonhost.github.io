<?php

    //This logic is used to retrive the data from my database
    function retrieve($conn){
        $sql = "SELECT * from blog";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            return $result;
        }else
            return null;
    }

    //this function is used to select one blog item
    function retrieve_blog($conn,$id){
        if($id==null)
            return null;
        
        $sql = "SELECT * from blog WHERE id=$id";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            return mysqli_fetch_array($result);
        }else
            return null;
    }

    /* Logic to retrieve data in descending order */
    function retrieve_sort($conn){
     $sql = "SELECT * from blog ORDER BY views desc";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            return $result;
        }else
            return null;
    }

    // This function is used to insert data into the blog table
    function insert($conn,$title,$description ){
        
        // we escape the quotation marks using slashes
        // in order to avoid sql errors
        $title  = addslashes($title);
        $description = addslashes($description);
        
        $created_at = date("Y-m-d H:i:s");
        $updated_at =  $created_at;
        $sql = "INSERT INTO blog (id,title,description,created_at,updated_at,views) VALUES (NULL,'$title','$description','$created_at','$updated_at',1)";
        mysqli_query($conn,$sql);
    }

    // this function is used for updating the blog item
    function update($conn, $id,$title,$description){
        
        // we escape the quotation marks using slashes
        // in order to avoid sql errors
        $title  = addslashes($title);
        $description = addslashes($description);
        
        $sql = "UPDATE blog SET title = '$title', description = '$description' WHERE id = $id";
        mysqli_query($conn,$sql);
    }

    // this function is for deleting a blog item
    function delete($conn,$id){
        
        $sql = "DELETE FROM blog WHERE id = $id";
        mysqli_query($conn,$sql);
    }

    function login($conn,$email,$password){
        
        $sql = "SELECT * from users WHERE email= '$email'";
        
        $status = 0;
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            $result = mysqli_fetch_array($result);
            
            if($result['password'] == $password){
                $status = 'Success'; 
                
                // if password match then we put the user in the session variable
                $_SESSION['user'] = $result['name'];
                    
            }else{
                $status = 'Password Mismatch';
            }
        }else
        {
            $status = 'User is not registered. Kindly contact site administrator';
        }
        
        return $status;
        
    }

    function logout(){
        
        unset($_SESSION['user']);
        
    }



?>