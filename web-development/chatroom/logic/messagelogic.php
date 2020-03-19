<?php
    session_start();
    include '../includes/db.php';
    include '../includes/functions.php';

    if(isset($_REQUEST['username']) && isset($_REQUEST['message']) && isset($_REQUEST['room_id'])){
        if(!empty($_REQUEST['username']) && !empty($_REQUEST['message']) && !empty($_REQUEST['room_id'])){
            add_message($conn, $_REQUEST['message'], $_REQUEST['username'], $_REQUEST['room_id']);
        }
    }

    $retrieve_all_messages_result = retrieve_all_messages($conn, $_REQUEST['room_id']);

?>

<?php foreach($retrieve_all_messages_result as $r_a_m_r){?>
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
    
<?php }?>   