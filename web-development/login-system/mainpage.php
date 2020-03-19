<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
      href="https://fonts.googleapis.com/css?family=Signika:400,600,700"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="mainpage.css"/>
    <title>Document</title>
</head>
<body>
  <div class="links">
  <a href="https://github.com/Dragonhost/Dragonhost.github.io" target="_blank" class="click">Source Code</a>
  <a href="https://dragonhost.github.io" target="_blank" class="click">Website</a></div>
  <form action="includes/logout.inc.php" method= "post">
    <button type="submit" name="<?= $logOutButton?>" class="logout-btn">Logout</button>
  </form>
</body>
</html>