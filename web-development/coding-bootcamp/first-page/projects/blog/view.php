<?php require 'logic/includes.php'; ?>
<?php  require 'html/head.php'; ?>
<?php  require 'html/nav.php'; ?>

<main role="main" class="container">
<br><br>  
    <div class="row">
        <div class="col-12 col-md-8">
            <div >
            <!-- Here we will page the blog items-->
            <?php  if($blog){ ?>
                <div class="blog-element mb-3">
                <div class=" border p-3">
                    <h3 class="mb-4"><?php  echo $blog['title']; ?></h3>
                    
                    <?php if(isset($_SESSION['user'])){ ?>
                    <a href="edit.php?id=<?php  echo $id; ?>">
                        <button class="btn btn-primary">Edit</button>
                    </a>
                    
                    <a href="delete.php?id=<?php  echo $id; ?>">
                    <button class="btn btn-danger">Delete</button>
                    </a>
                    <?php }?>
                    
                    <p class="bg-light p-3"><?php  echo $blog['description']; ?></p>
                </div>
                </div>
            <?php } else {?>
                <div class="bg-light border p-3">No data to display</div>
            <?php } ?>
            <!-- End of blog items -->
          </div>
        </div>
        <div class="col-12 col-md-4">
           <?php require 'html/popular.php'; ?>
        </div>
    </div>
</main><!-- /.container -->
<?php require 'html/footer.php'; ?>