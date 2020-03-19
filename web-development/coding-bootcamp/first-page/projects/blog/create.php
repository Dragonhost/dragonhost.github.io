<?php require 'logic/includes.php'; ?>
<?php  require 'html/head.php'; ?>
<?php  require 'html/nav.php'; ?>


<main role="main" class="container">
<br>
<br>

    <div class="row">
        <div class="col-12 ">
            <?php if(isset($error)) { 
                    if($error){
             ?>
                <div class="bg-danger p-3"><?php echo $error; ?></div>
            <?php 
                    }
                } 
            ?>
             <?php if($success==1) { ?>
                <div class="bg-success p-3"><?php echo "New blog element is created"; ?></div>
            <?php } ?>
            
            <h2 class="mb-4">Create a new Blog Item</h2>
            <div class="bg-light p-3 border ">
            
            <!-- This is the create form element -->
            <form method="get" action="create.php">
              <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter the blog title">
                
              </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
                <input type="hidden" name="create" value="1" >
              <button type="submit" class="btn btn-primary">Create Blog</button>
            </form>
            <!-- End of create form element--> 
          </div>
        </div>
    </div>
  
</main><!-- /.container -->

<?php require 'html/footer.php'; ?>
      
      
      