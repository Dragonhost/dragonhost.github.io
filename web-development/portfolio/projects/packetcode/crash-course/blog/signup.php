<?php
  require "html/head.php";
  include "query/includes.php";
?>
<div class="container">
  <form method="POST" action="signup.php">
    <div class="form-group">
    <label>Username</label>
    <input type="text" class="form-control mb-3" name="username">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
    </div>
    <button type="submit" name="signup" class="btn btn-primary">Sign Up</button>
  </form>
</div>

<?php
  require "html/footer.php";
?>