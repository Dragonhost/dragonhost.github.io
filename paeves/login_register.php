<?php

include "includes/includes.php";
include "html/header.php";
include "breadcrumb.php";

?>

<div class="container">
    <div class="bg-light p-5 mt-5">
        <h3 class="mb-4 border-dark border-left pl-2">Login / Register</h3>
    <form class="ml-1 p-3 rounded" method="GET">
        <div class="form-group">
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="youremail@gmail.com" name="login_register_email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <button type="submit" class="btn btn-dark" name="login_register">Submit</button>
    </form>
    </div>
</div>

<?php

include "html/footer.php";

?>