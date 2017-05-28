<?php
    include_once('../../config/init.php');
    include_once($BASE_DIR .'database/users.php');
    include_once($BASE_DIR .'database/messages.php');
    //echo json_encode(123);
    $receive_id = $_SESSION['user_id'];
    //$receive_id = 3;
    $sender_id = $_POST['sender_id'];

 
    $counts = countUnreadMessages($receive_id);
    $count = $counts[0]['count'];
    echo $count;
?>
