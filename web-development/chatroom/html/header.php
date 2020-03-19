<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="This is a opensource chatting webapp">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/996973c893.js"></script>   
    <!-- My Stylesheet -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Javascript Stylesheet -->
    <script src="js/main.js"></script>

    <title>Chatrz</title>

</head>
<body>
    <div class="container-fluid mt-3">
    <div class="navbar">
        <img src="images/chat-2.png" alt="logo" width="50rem" class="d-none d-sm-block">
        <h1 class="text-secondary .d-block d-sm-none">Chattrz</h1>
        <div class="nav align-items-center">
        <div class="mr-4 d-none d-sm-block">
            <form method="POST">
                <a href="index.php" class="mr-4  h6 ">Home</a>
                <a href="rooms.php" class="mr-4  h6 ">Rooms</a>
                <a href="profile.php" class="mr-4  h6 ">Profile</a>
                <button type="submit" class="btn btn-outline-danger" name="logout">Logout</button>
            </form>
        </div>
        <!-- Search -->
        <form method="POST" class="row">
            <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm modal-dialog-centered">
                    <div class="modal-content">
                        <input type="text" placeholder="Search for a user" class="form-control form-control-lg">
                    </div>
                </div>
            </div>
            <i class="fas fa-search  btn btn-outline-info " data-toggle="modal" data-target=".bd-example-modal-sm"></i>
        </form>
        <!-- Responsive Menu -->
        <div class="modal fade bd-example-modal-sm menu" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm modal-dialog-centered">
                <div class="modal-content p-3">
                <form method="POST">
                    <div class="container d-flex justify-content-between align-items-center">
                    <a href="index.php" class="h6">Home</a>
                    <a href="rooms.php" class="h6">Rooms</a>
                    <a href="profile.php" class="h6">Profile</a>
                    <button type="submit" class="btn btn-outline-danger" name="logout">Logout</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
        <i class="fas fa-bars btn btn-outline-secondary ml-4  d-block d-sm-none" data-toggle="modal" data-target=".menu"></i>
        </div>
    </div>
    <hr>
    </div>