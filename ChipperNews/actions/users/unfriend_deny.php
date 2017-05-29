<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');  
  
  $userid_to_del=strip_tags($_POST['user_del']);
  
  try {
    unfriendDeny($_SESSION['user_id'], $userid_to_del);
    $_SESSION['success_messages'][] = 'User deleted from friends';  
    echo 0;
  } catch (PDOException $e) {
    }
?>
