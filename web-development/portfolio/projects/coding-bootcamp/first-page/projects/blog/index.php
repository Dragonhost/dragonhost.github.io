<?php require 'logic/includes.php'; ?>
<?php  require 'html/head.php'; ?>
<?php  require 'html/nav.php'; ?>

<main role="main" class="container">
<br><br>
    
    <?php  if($update_status==1){ ?>
        <div class="bg-success p-3 mb-3"> 
                <?php echo $update_message; ?>
        </div>
    <?php  }  ?>
    
    <div class="row">
        <div class="col-12 col-md-8">
            <div >
            <h1>Home page</h1>
            <p class="lead">This is my blog page, where you can 
                read my view about the society etc etc</p>
            
            <!-- Here we will display the blog items-->
            <?php  foreach($blogitems as $blog){ ?>
            <div class="blog-element mb-3">
            <div class="bg-light border p-3">
                <h3><?php echo $blog['title']; ?></h3>
                <p><?php  echo substr($blog['description'],0,200); ?></p>
                <a href="view.php?id=<?php echo $blog['id']; ?>">
                    <button class="btn btn-primary">view more</button>
                </a>
            </div>
            </div>
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
      

