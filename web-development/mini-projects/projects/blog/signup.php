<?php

include "includes/includes.php";

?>


<div class="container mt-4 p-5 border bg-light">
    <h2 class="text-info mb-3">Sign Up</h2>
    <form method="post">
  <div class="form-group">
      
   <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control mb-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username" name="username">
      
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>

  <button type="submit" class="btn btn-primary" name="signup">Sign Up</button>
</form>
    <p class="mt-3">Already have an Account ? <a href="login.php">Login</a></p>
</div>


<?php

include "html/footer.php";

?>