<?php
    include_once('../../config/init.php');
    include_once($BASE_DIR .'database/messages.php');
    include_once($BASE_DIR .'database/users.php');

    echo 123;
    //$receive_id = $_SESSION['user_id'];
    $receive_id = 3;
    $sender_id = $_POST['sender_id'];

    debug_to_console($receive_id);
    $count = countMessages($sender_id,$receive_id);
    debug_to_console($count);
    echo 321;

?>