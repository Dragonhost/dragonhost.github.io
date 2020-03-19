<?php

include "includes/includes.php";

?>
        <div class="container mt-5 border p-5 bg-light">
            <h2 class="text-info mb-3">Login</h2>
            <form method="POST">
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
              </div>
              <button type="submit" class="btn btn-primary" name="login">Login</button>
            </form>
            <p class="mt-3">Don't have an Account yet ? <a href="signup.php">Sign Up</a></p>
        </div>

        
    
<?php

include "html/footer.php";

?>
