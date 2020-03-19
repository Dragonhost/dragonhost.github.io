<?php

  require '../includes/dbh.inc.php';
  require '../includes/variables.inc.php';

  session_start();


    $random_text = substr(md5(mt_rand()), 0, 7);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Raleway:400,600,700"
      rel="stylesheet"
    />


    <title>Disappr</title>
</head>
<body>

<?php

    if(isset($_POST['save'])){
    $user = $_SESSION['userId'];
    if(!empty($user)){
        if(isset($_POST['editor']) && !empty($_POST['editor'])){ 
            if(isset($_POST['title']) && !empty($_POST['title'])){
                $notes = $_POST['editor'];
                
                $encode = addslashes($notes);
                $title = $_POST['title'];
                $current_time = time();
                $sql = "INSERT INTO data(ref,title,content,added_time,random_text) VALUES('$user','$title','$encode','$current_time','$random_text');";
                $query = mysqli_query($conn,$sql);
    
                $fetch = "SELECT * FROM data WHERE id = (SELECT MAX(id) FROM data);";
                $stmt = mysqli_query($conn,$fetch);
                $row = mysqli_fetch_assoc($stmt);
                $data_id = $row['id'];
    
                if($data_id){
                    header("Location: temp_url.php?".$data_id.".".$random_text);
                    exit();
                }
                else{
                    echo '<h3>Data Retrieving Error</h3>';
                }
    
            }
            else{
                header("Location: ../index.php?process=emptytitle#error");
                exit();
            }          
        }
        else{
            header("Location: ../index.php?process=emptytextarea#error");
            exit();
        }
    }else{
        header("Location: ../login_signUp.php?");
        exit();
    }


    }
    else{
    header("Location: ../index.php");
    exit();
    }
?>
</body>
</html>
