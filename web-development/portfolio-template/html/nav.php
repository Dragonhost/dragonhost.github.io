<?php require 'scripts/request.php'?>

<div class="navbar">
    <div class="content">
        <a href="#index.html" class="logo">Kamal Teja</a>
        <div class="menu">
            <a href="index.php" class="<?php if($path == 'index.php' || $path == '' ) echo 'active';?>">Home</a>
            <a href="projects.php" class="<?php if($path == 'projects.php') echo 'active';?>">Projects</a>
            <a href="resume.php" class="<?php if($path == 'resume.php') echo 'active';?>">Resume</a>
            <a href="contact.php" class="<?php if($path == 'contact.php') echo 'active';?>">Contact</a>
        </div>
    </div>
</div>