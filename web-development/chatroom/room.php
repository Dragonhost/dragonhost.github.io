<?php
    include 'includes/includes.php';
    if(empty($_SESSION['username'])){
      header("Location: login.php");
    }
    include 'html/header.php';
?>

<div class="container pb-3">
    <div class="d-flex pt-3 px-3 justify-content-between align-items-center border-bottom mb-3">
        <?php foreach($room_data as $r_d){?>
            <h6 class="d-inline m-0"><?php echo $r_d['room_name'];?></h6>

            <button type="button" class="btn" data-toggle="modal" data-target=".admin_modal_target"><img src="images/admin.png" style="width: 2rem;"></button>
            <div class="modal fade admin_modal_target" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <?php foreach($retrieve_user_result as $r_u_r){?>
                    	<p class="d-inline p-3 text-center m-0"><strong>Admin:</strong> <?php echo $r_u_r['username'];?></p>
                    <?php }?>
                </div>
            </div>
            </div>
    
        <?php }?>
    </div>

    <div class="container overflow-auto scrollbar scrollbar-morpheus-den" id="messages" style="height: 30rem;">
		<?php if($retrieve_all_messages_reload != 'empty'){foreach($retrieve_all_messages_reload as $r_a_m_r){?>
			<div class="border my-3 px-2 py-1 rounded">
				<h6 class="text-info mb-1"><?php echo $r_a_m_r['username'];?></h6>
				<p class="m-0"><?php echo $r_a_m_r['message'];?></p>
				<?php 
				
					$time = explode(" ", $r_a_m_r['time']);
					$time = explode(":", $time['1']);
					$time_hour = $time[0];
					$time_minutes = $time[1];
				
				?>
				<p class="text-muted text-right m-0"><?php echo $time_hour.":".$time_minutes;?></p>
			</div>
		<?php }}?>
    </div>       
	<form method="POST" class="message_group mt-3">
		<input type="text" class="form-control message" placeholder="Type a Message" id="msg_input">
		<i type="submit" class="fas fa-paper-plane btn add_msg_btn " onclick="add_msg('<?php echo $_SESSION['username'];?>', '<?php echo $_REQUEST['room_id'];?>')"></i>
	</form>          

</div>

<?php

  include 'html/footer.php';

?>