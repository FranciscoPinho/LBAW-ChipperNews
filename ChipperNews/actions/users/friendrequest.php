<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');  
  
  $userid_to_add=strip_tags($_POST['user_add']);
  
  try {
    friendRequest($_SESSION['user_id'], $userid_to_add);
    $_SESSION['success_messages'][] = 'Friend request sent';  
    echo 0;
  } catch (PDOException $e) {
    }
?>
