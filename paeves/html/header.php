<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="This is the official website for paeves">
    <meta name="author" content="Kamal Teja">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/996973c893.js" crossorigin="anonymous"></script>

    <!-- Tiny MCE -->
    <script src="https://cdn.tiny.cloud/1/ijnrso1uytvnc8w82qzx02hmq2qlhfpmy17lokirbmhod6t8/tinymce/5/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: '#blog_description',
            // skin: 'dark',
            height: 300,    
            plugins: [
                'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
                'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                'save table directionality emoticons template paste'
            ],
            toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons',
            branding: false,
            statusbar: false,
            resize: 'both'

        });
    </script>

    <!-- My Stylesheet -->
    <link rel="stylesheet" href="css/style.css">

    <title>Paeves</title>
</head>
<body>
<!-- Navigation bar -->
    <!-- Visible on Large screens -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top d-none d-sm-block d-sm-flex justify-content-between">
        <a class="navbar-brand" href="#">
            <img src="images/logo/logo_transparent.png" class="logo" alt="paeves logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

       <div class="content">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products.php">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blogs.php">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about_us.php">About us</a>
                    </li>
                    
                    <?php if(!empty($_SESSION['username'])){ if($_SESSION['username'] == 'Kamal'){?>
                        <li class="nav-item">
                            <a class="nav-link" href="create.php">Create</a>
                        </li>
                    <?php } } ?>    
                    
                    <?php if(empty($_SESSION['username'])){ ?>
                        <li class="nav-item">
                            <a class="nav-link bg-dark text-white rounded-lg" href="login_register.php">Login/Register</a>
                        </li>
                    <?php } else{ ?>
                        <li class="nav-item">
                            <h6 class="m-0 btn btn-dark d-block pl-5 pr-5" data-toggle="collapse" href="#user_info" role="button" aria-expanded="false" aria-controls="collapseExample" style="cursor: pointer">
                                <?php echo $_SESSION['username'];?>
                            </h6>
                            <div id="user_info" class="collapse rounded p-2 mt-1 bg-dark">
                                <a href="#" class="text-white d-block p-2 text-decoration-none">Favourites</a>
                                <form method="POST">
                                    <button class="btn btn-outline-light btn-block m-0" type="submit" name="logout">Logout</button>
                                </form>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            </div>
       </div>
    </nav>


    
    <!-- Visible only on Small screens -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top d-flex justify-content-between d-block d-sm-none">
        <a class="navbar-brand" href="#">
            <img src="images/logo/logo_transparent.png" class="logo" alt="paeves logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="products.php">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blogs.php">Blogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about_us.php">About us</a>
                </li>
                <?php if(empty($_SESSION['username'])){ ?>
                    <li class="nav-item">
                    <button class="nav-link btn btn-dark p-2"><a class="text-white" href="login_register.php">Login/Register</a></button>
                    </li>
                <?php } else{ ?>
                    <h6 class="m-0 btn btn-dark d-block pl-5 pr-5" data-toggle="collapse" href="#user_info" role="button" aria-expanded="false" aria-controls="collapseExample" style="cursor: pointer">
                        <?php echo $_SESSION['username'];?>
                    </h6>
                    <div id="user_info" class="collapse rounded p-2 mt-1 bg-dark">
                        <a href="#" class="text-white d-block p-2 text-decoration-none">Favourites</a>
                        <button class="btn btn-outline-light btn-block m-0" type="submit" name="logout">Logout</button>
                    </div>
                <?php } ?>
            </ul>
        </div>
    </nav>