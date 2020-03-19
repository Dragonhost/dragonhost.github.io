<?php
  require "html/head.php";
  include "query/includes.php";
?>

<div class="container">
  <h2 class="mt-5 mb-3">Create a new Blog Post</h2>
  <div class="bg-light p-5 border">
    <form method="POST">
      <h5>Title</h5>
      <input type="text" class="form-control mt-3" name="title">
      <h5 class="mt-3">Description</h5>
      <textarea name="description" class="form-control mt-3"></textarea>
      <button name="create" class="btn btn-primary mt-3">Create</button>
    </form>
  </div>
</div>

<?php
  require "html/footer.php";
?>