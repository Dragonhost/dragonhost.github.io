
<?php require 'logic/includes.php'; ?>
<?php  require 'html/head.php'; ?>
<?php  require 'html/nav.php'; ?>

<main role="main" class="container">
<br>
<br>
    
    <?php  if($update_status==1){ ?>
        <div class="bg-success p-3 mb-3"> 
                <?php echo $update_message; ?>
        </div>
    <?php  }  ?>
    
    <div class="row">
        <div class="col-12 col-md-8">
            <h2 class="mb-4">Edit the Blog Item</h2>
            <div class="bg-light p-3 border ">
            <!-- This is the update form element -->
            <form method="get" action="edit.php">
                <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php  echo $blog['title'] ?>">
                
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Example textarea</label>
                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"><?php echo $blog['description']; ?></textarea>
                </div>
                <input type="hidden" name="update" value="1" >
                <input type="hidden" name="id" value="<?php echo $blog['id']; ?>" >
              <button type="submit" class="btn btn-success">Update Blog</button>
            </form>
            <!-- End of update form element-->
          </div>
        </div>
        <div class="col-12 col-md-4">
        </div>
    </div>

</main><!-- /.container -->

<?php require 'html/footer.php'; ?>
