<?php

include "includes/includes.php";

?>

<div class="container bg-light border mt-5 p-5">
    <h3 class="mb-4 text-center">Create a Blog</h3>
    <?php
        if(!empty($status)){
            echo '<h5 class="text-danger mb-3 ">'.$status.'</h5>';
        }
    ?>
    <form method="GET">
        <label>Title</label>
        <input class="form-control mt-2 mb-2" name="title">
        <label>Description</label>
        <textarea class="form-control mt-2 mb-2" name="desc"></textarea>
        <button class="btn btn-primary mt-2" type="submit" name="create">Create</button>
    </form>
</div>


<?php

include "html/footer.php";

?>
    