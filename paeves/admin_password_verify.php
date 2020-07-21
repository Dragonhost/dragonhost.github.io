<?php

include "includes/includes.php";
include "html/header.php";
include "breadcrumb.php";

?>

<!-- Error toast -->
<?php if(!empty($password_error)){?>
    <div class="container">
        <div class="ml-1 mr-1 alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Sorry!</strong> Wrong Password.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>

<?php } ?>    

<div class="container">
    <form method="POST" class="bg-secondary p-5 rounded-lg">
        <input type="password" class="form-control" placeholder="Enter the password" name="admin_password">
        <button type="submit" class="btn btn-outline-light mt-3" name="admin_password_verify">Verify</button>
    </form>
</div>

<?php

include "html/footer.php";

?>