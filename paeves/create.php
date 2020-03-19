<?php

include "includes/includes.php";
include "html/header.php";
include "breadcrumb.php";
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-12 col-md-6 mb-2 mb-md-0">
            <a href="create_products.php" class="bg-dark d-block text-center p-3 text-white rounded-lg text-decoration-none" style="font-size: 1.7rem;">
                <i class="fas fa-tshirt" style="font-size: 1.5rem;"></i> Products
            </a> 
        </div>
        <div class="col-12 col-md-6">
            <a href="create_blog.php" class="bg-dark d-block text-center p-3 text-white rounded-lg text-decoration-none" style="font-size: 1.7rem;">
                <i class="fas fa-pager" style="font-size: 1.5rem;"></i> Blog
            </a> 
        </div>
    </div>
</div>

<?php

include "html/footer.php";

?>