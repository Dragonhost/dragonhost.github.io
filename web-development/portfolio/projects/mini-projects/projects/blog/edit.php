<?php

include "includes/includes.php";

?>

<div class="container bg-light mt-5 p-5 border">
    <h1 class="mb-2 text-info">Edit the Blog Post</h1>
    <?php require "logic/editlogic.php";?>
    <?php foreach($result_id as $r_id){?>
    <form method="POST">
        <label>Title</label>
        <input class="form-control mb-3" value="<?php echo $r_id['title']?>" name="title">
        <label>Description</label>
        <textarea class="form-control" name="desc"><?php echo $r_id['description']?></textarea>
        <button type="submit" class="btn btn-success mt-3" name="update">Update</button>
    </form>
    <?php }?>
</div>


<?php

include "html/footer.php";

?>
    