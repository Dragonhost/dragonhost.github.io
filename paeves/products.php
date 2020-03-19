<?php

include "includes/includes.php";
include "html/header.php";
include "breadcrumb.php";

?>

<div class="container-fluid">
    <div class="row">
        <!-- Visible on large screens -->
        <div class="col-12 col-md-3 categories d-none d-sm-block ">
            <div class="container bg-dark text-white rounded-lg mt-3 p-3">
                <h4 class="mb-3">Categories</h4>
                <hr class="bg-white">
                <div class="menu">
                    <h6 class="btn btn-light d-block m-0 d-flex justify-content-between align-items-center" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" style="cursor: pointer;">
                        Avengers<i class="fas fa-chevron-down"></i>
                    </h6>
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body text-dark bg-light rounded-0 p-2">
                            <a href="#" class="text-dark text-decoration-none pb-1">Avengers</a>
                            <a href="#"  class="text-dark text-decoration-none pb-1">DC</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Visible only on small screens -->
        <div class="col-12 col-md-3 categories d-block d-sm-none ">
            <button class="btn btn-dark"><i class="fas fa-angle-double-left"></i> Categories</button>
        </div>
        <div class="col-12 col-md-9 products">
        
        </div>
    </div>
</div>

<?php

include "html/footer.php";

?>