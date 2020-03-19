<?php require 'logic/includes.php'; ?>
<?php  require 'html/head.php'; ?>
<?php  require 'html/nav.php'; ?>

<main role="main" class="container">
<br>
<br>

    
    
    <div class="row">
        <div class="col-12 col-md-8">
            <h2 class="mb-4">Delete the Blog Item</h2>
            <div class="bg-light p-3 border ">
            <!-- This is the Delete element -->
            <form method="get" action="delete.php">
                
              <h3><?php echo $blog['title']; ?></h3>
                
              <p>This action is permanent, you cannot reverse it.</p>
                
              <input type="hidden" name="id" value="<?php echo $id; ?>" />
                
             <input type="hidden" name="delete" value="1" />
                  
              <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <!-- End of delete element-->
          </div>
        </div>
        <div class="col-12 col-md-4">
        </div>
    </div>

</main><!-- /.container -->

<?php require 'html/footer.php'; ?>
