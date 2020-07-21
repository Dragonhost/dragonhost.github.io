<?php require 'logic/includes.php'; ?>
<?php  require 'html/head.php'; ?>
<?php  require 'html/nav.php'; ?>


<?php  if(!isset($_SESSION['user'])){ ?>


<main role="main" class="container">
<br><br>
    <div class="p-3 bg-light border">
    <h1> Login</h1>
        
    <form method="post" action="login.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
  </div>
  
  <button type="submit" class="btn btn-primary">Login</button>
</form>
        
    </div>
</main><!-- /.container -->

<?php }else{ ?>

<main role="main" class="container">
    <div class="p-3 mt-4 bg-light border">
        <h1> Hello ! <?php echo $_SESSION['user']; ?></h1>
    </div>
</main>

<?php } ?>


<?php require 'html/footer.php'; ?>