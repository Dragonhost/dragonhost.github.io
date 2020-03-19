<?php

  include "includes/header.php";
  include "includes/nav_top.php";
  include "logic/messagelogic.php";

?>

<div class="col-lg-6 container message">
  <h1 class="mt-5 mb-5 text-center text-md-left">Message me</h1>
  <div class=" bg-white p-5 message_container">
    <form method="POST">
      <?php
        if(!empty($error)){
          if($error != "Message Sent"){
            echo "<h5 class='text-danger mb-3'>$error</h5>";
          }else{
            echo "<h5 class='text-success mb-3'>$error</h5>";
          }
          
        }
 
      ?>
      <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your name" name="name" value="<?php if(!empty($name)){echo $name;}?>">
      </div>
      <div class="form-group">
        <label>Email</label>
        <div class="input-group mb-3">
          <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2" placeholder="Your email" name="email" value="<?php if(!empty($mail)){echo $mail;}?>">
        </div>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Message</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Anything is fine!" name="message"><?php if(!empty($message)){echo $message;}?></textarea>
      </div>
      <button type="submit" class="btn btn-primary" name="send">Send</button>
    </form>
  </div>

</div>


<?php

  include "includes/nav_bottom.php";
  include "includes/footer.php";

?>
