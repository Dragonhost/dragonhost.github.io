<?php

if(isset($_GET['error'])){
    if($_GET['error'] == "emptyfields"){
      echo '<p class="signuperror">Fill in all the fields</p>';
    }
    elseif($_GET['error'] == "invaliduidmail"){
      echo '<p class="signuperror">Invalid Username and Email</p>';
    }
    elseif($_GET['error'] == "invalidmail"){
      echo '<p class="signuperror">Invalid Email</p>';
    }
    elseif($_GET['error'] == "invalidusername"){
      echo '<p class="signuperror">Invalid Username</p>';
    }
    elseif($_GET['error'] == "passwordcheck"){
      echo '<p class="signuperror">Passwords donot Match</p>';
    }
    elseif($_GET['error'] == "usernametaken"){
      echo '<p class="signuperror">Username already taken</p>';
    }
  }
elseif(isset($_GET['signUp'])){
    if($_GET['signUp'] == "success"){
        echo '<p class="signupsuccess">Signup Successful</p>';
    }
}
