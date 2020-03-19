<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="landing.css" />
    <title>Document</title>
</head>
<body>
  <h1>This is the homepage</h1>
  <form action="includes/logout.inc.php" method= "post">
  <button type="submit" name="logout-submit" class="logout-btn">Logout</button>
</form>
</body>
</html>