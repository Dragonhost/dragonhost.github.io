            
<!--- display user only if user is in session -->

<?php if(isset($_SESSION['user'])){ ?>
<div class="p-3 bg-light border mt-3 mb-3">
    hi !
    <h3><?php echo $_SESSION['user']; ?></h3>
</div>
<?php } ?>



            <div >
            <!-- Right side element with popular items-->
                <h1>Popular</h1>
                    <div class="list-group">
                    <?php foreach($blogitems as $b){ ?>
                      <a href="view.php?id=<?php echo $b['id']; ?>" class="list-group-item list-group-item-action"><?php echo $b['title']; ?></a>
                      
                    <?php } ?>
                </div>
            <!-- End of popular items -->
              </div>