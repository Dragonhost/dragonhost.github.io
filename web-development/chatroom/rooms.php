<?php

    include 'includes/includes.php';
    if(empty($_SESSION['username'])){
      header("Location: login.php");
    }
    include 'html/header.php';

?>

<div class="container p-5 rounded">
    <ul class="nav nav-pills nav-fill mb-5 justify-content-center border p-3 rounded" id="pills-tab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Create</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">My Rooms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Shared Rooms</a>
      </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <h1 class="text-info">Create a room</h1>
        <h6 class="text-danger ml-2"><?php if(isset($_REQUEST['roomNameTaken'])){echo 'Room name taken! Please choose another one';}?></h6> 
        <form method="GET" class="mt-3">
            <input type="text" class="form-control form-control-lg mb-3" placeholder="Enter the room name" name="room_name">
            <input type="password" class="form-control form-control-lg" placeholder="Enter the password" name="room_password">
            <button type="submit" class="btn btn-success mt-3" name="create_room">Create</button>
        </form>
      </div>
      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        <?php foreach($all_rooms_id_result as $a_r_r){?>
          <div class="container text-center">
            <p class="px-3 d-inline"><?php echo $a_r_r['room_name'];?></p>
            <a href="room.php?room_id=<?php echo $a_r_r['room_id'];?>" class="btn btn-outline-success">open</a>
            <hr>
          </div>      
        <?php }?>
      </div>
      <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
    </div>
</div>

<?php

  include 'html/footer.php';

?>
