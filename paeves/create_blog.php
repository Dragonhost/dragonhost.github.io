<?php

include "includes/includes.php";
include "html/header.php";
include "breadcrumb.php";

?>

<?php if(!empty($blog_error)){ ?>
    <div class="container">
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Sorry an error occured!</strong> <?php echo $blog_error;?>.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
<?php } ?>    

<div class="container">
    <form method="GET" class="bg-light mt-3 p-3" enctype="multipart/form-data">
        <h6 class="border-left border-dark pl-1">Title</h6>
        <input type="text" class="form-control" placeholder="Top 10 Tshirts..." name="blog_title">
        <h6 class="border-left border-dark pl-1 mt-4">Description</h6>
        <textarea id="blog_description" name="blog_description"></textarea>
        <h6 class="border-left border-dark pl-1 mt-4">Tags</h6>
        <input type="text" class="form-control" placeholder="Traveling, Food..." name="blog_tags">
        <!-- Upload Image file -->
        <h6 class="border-left border-dark pl-1 mt-4">Image</h6>
        <!-- <div class="input-group">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="blog_image">
                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>
        </div> -->
        <input type="file" name="blog_image">
        <button type="submit" class="btn btn-dark mt-4" name="create_blog">Create</button>
    </form>
</div>

<?php

include "html/footer.php";

?>