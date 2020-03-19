<?php
    include 'includes/includes.php';
    if(empty($_SESSION['username'])){
      header("Location: login.php");
    }
    include 'html/header.php';
?>

<div class="container text-center">
    <img src="images/under-construction.png" class="img-fluid">
    <h1>Under Construction</h1>
    <h4 class="text-white rounded mt-3 bg-info p-3">Currently only chatrooms are availabe</h4>
</div>

<?php

  include 'html/footer.php';

?>
