<?php

// Getting url, splitting and adding it to an array
$url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
// $url = 'https://paeves.com/blogs.php';
$url = explode("/", $url);
$j = 0;
// Adding the path items to a new array
for($i = 3; $i < sizeof($url); $i++){
  $path[$j] =  $url[$i];
  $j++;
}
// removing .php from last item
$last = explode(".", end($path));
$path[sizeof($path)-1] = $last[0];

// $path is the final array
?>

<nav aria-label="breadcrumb" class="container mt-3">
  <ol class="breadcrumb ">
    <li class="breadcrumb-item"><a href="index.php" class="text-muted"><i class="fas fa-home mr-1"></i>Home</a></li>
    <?php for($i = 0; $i < sizeof($path)-1; $i++){?>
      <li class="breadcrumb-item"><a href="<?php echo $path[$i];?>.php" class="text-muted"><?php echo $path[$i];?></a></li>
    <?php } ?>
    <li class="breadcrumb-item active text-dark font-weight-bold" aria-current="page"><?php echo end($path);?></li>
  </ol>
</nav>