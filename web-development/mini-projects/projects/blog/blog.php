<?php

include "includes/includes.php";
    
?>

<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="row container">
                <h3 class="mt-3 mb-3">Blog Posts</h3>
                
                <?php foreach($result as $r){?>
                
                    <div class="col-12 bg-light border p-3 mb-3">
                        <?php
                            echo $r['title'];
                            echo "<br>";
                            echo "<br>";
                            echo substr($r['description'],0,100);
                            echo "...";
                        ?>
                        <a href="view.php?id=<?php echo $r['id']?>"><button class="btn btn-primary mt-3">Continue Reading</button></a>
                    </div>
                
                <?php }?>
            </div>
        </div>
        <div class="col-6 ">
            <div class="container mt-3 bg-light border p-3">
                <h3 class="text-center mb-3">
                    Popular Blogs
                </h3>
                <ul>
                    <a href="£"><li>Blog Post 1</li></a>
                    <li>Blog Post 2</li>
                    <li>Blog Post 3</li>
                </ul>
            </div>
     
        </div>
    </div>

</div>




<?php

include "html/footer.php";

?>