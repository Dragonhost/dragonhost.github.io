<? ob_start(); ?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">

        <!-- Font Awesome ---- icon library -->
        <script src="https://kit.fontawesome.com/996973c893.js"></script>

        <!-- My Javascript -->
        <script src="js/main.js"></script>

        <!-- Animate on scroll -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <!-- Slider animation -->
        <link rel="stylesheet" href="two-up/css/sequence-theme.two-up.css" />

        <!-- Smooth Scrolling -->
        <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
        
        <!-- Tiny MCE -->
        <script src="https://cdn.tiny.cloud/1/ijnrso1uytvnc8w82qzx02hmq2qlhfpmy17lokirbmhod6t8/tinymce/5/tinymce.min.js"></script>
        <script>
          tinymce.init({
            selector: '#description',
            branding: false,
            plugins: "autoresize",
            statusbar: false,
            min_height: 100
          });
        </script>
        
        
        <!-- My CSS -->
        <link rel="stylesheet" href="css/style.css">

        <title>Job Aggregator</title>
        
    </head>
    <body class="bg-dark p-0">

    <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top d-none d-sm-block d-sm-flex justify-content-between">
        <a class="navbar-brand" href="#">Job Aggregator</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="content">
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
            <li class="nav-item">
                <a class="nav-link" href="jobs.php">Jobs</a>
            </li>
                <?php if(!empty($_SESSION['username'])){if($_SESSION['username'] == 'admin'){ ?>
                    <li class="nav-item">
                        <a class="nav-link" href="create.php">Create</a>
                    </li>
                <?php }} ?>
                
            <?php if(empty($_SESSION['username'])){ ?>
                
              <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
              </li>
                <li class="nav-item">
                <a class="nav-link" href="signup.php">Signup</a>
              </li>
                
            <?php } ?>
                
            <?php if(!empty($_SESSION['username'])){ ?>
              <li class="nav-item">
                <form method="POST">
                    <button type="submit" name="logout" class="btn btn-outline-danger">Logout</button>
                </form> 
              </li>
            <?php } ?>
                
            </ul>
          </div>
        </div>
    </nav>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top d-flex justify-content-between d-block d-sm-none">
        <a class="navbar-brand" href="#">Job Aggregator</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
            <li class="nav-item">
                <a class="nav-link" href="jobs.php">Jobs</a>
            </li>
                <?php if(!empty($_SESSION['username'])){if($_SESSION['username'] == 'admin'){ ?>
                    <li class="nav-item">
                        <a class="nav-link" href="create.php">Create</a>
                    </li>
                <?php }} ?>
                
            <?php if(empty($_SESSION['username'])){ ?>
                
              <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
              </li>
                <li class="nav-item">
                <a class="nav-link" href="signup.php">Signup</a>
              </li>
                
            <?php }else{ ?>
              <li class="nav-item">
                <form method="POST">
                    <button type="submit" name="logout" class="btn btn-outline-danger">Logout</button>
                </form> 
              </li>
            <?php } ?>
            </ul>
          </div>

    </nav>

<? ob_flush(); ?>