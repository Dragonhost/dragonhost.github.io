<?php


if(isset($_GET['error'])){
    if($_GET['error'] == "emptyfields"){
      echo '<p class="signuperror">Fill in all the fields</p>';
    }
    elseif($_GET['error'] == "wrongpwd"){
      echo '<p class="signuperror">Invalid Password</p>';
    }
    elseif($_GET['error'] == "nouser"){
      echo '<p class="signuperror">No Users Exists</p>';
    }
  }