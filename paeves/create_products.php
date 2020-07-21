<?php

include "includes/includes.php";
include "html/header.php";
include "breadcrumb.php";

?>

<div class="container">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#product" role="tab" aria-controls="pills-home" aria-selected="true">Product</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#category" role="tab" aria-controls="pills-profile" aria-selected="false">Category</a>
        </li>
    </ul>
    <div class="tab-content bg-light p-4 rounded" id="pills-tabContent">
        <div class="tab-pane fade show active" id="product" role="tabpanel" aria-labelledby="pills-home-tab">
            <form method="POST">
                <h6 class="border-left border-dark pl-1">Name</h6>
                <input type="text" placeholder="Avengers Tshirt..." class="form-control mb-3">
                <h6 class="border-left border-dark pl-1">Description</h6>
                <input type="text" placeholder="This is a..." class="form-control mb-3">
                <h6 class="border-left border-dark pl-1">Tags</h6>
                <input type="text" placeholder="White, Avengers, Comics... " class="form-control">
                <button class="btn btn-dark mt-3">Create</button>
            </form>
        </div>
        <div class="tab-pane fade" id="category" role="tabpanel" aria-labelledby="pills-profile-tab">
            <form method="GET">
                <input type="text" class="form-control" placeholder="Category name">
                <select name="category" class="form-control mt-3">
                    <option value="new_category">New Category</option>
                    <option value="">Available categories</option>
                </select>
                <button class="btn btn-dark mt-3">Create</button>
            </form>
        </div>
    </div>
</div>

<?php

include "html/footer.php";

?>