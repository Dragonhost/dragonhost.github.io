<?php

include "includes/includes.php";

?>

<div class="container bg-light border mt-5 p-3">
    <?php foreach($result_id as $r_id){?>
        <h1 class="text-center mt-3 mb-3 text-info"><?php echo $r_id['title']?></h1>
    
        <a href="edit.php?id=<?php echo $r_id['id']?>"><button class="btn btn-info mb-3">Edit</button></a>
        
        <a href="delete.php?id=<?php echo $r_id['id']?>"><button class="btn btn-danger  mb-3">Delete</button></a>
    
        <p><?php echo $r_id['description']?></p>
    <?php }?>
</div>


<?php

include "html/footer.php";

?>
    