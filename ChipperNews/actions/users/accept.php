<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');  
  
  $userid_to_accept=strip_tags($_POST['user_accept']);
  

  try {
    acceptFriendship($_SESSION['user_id'], $userid_to_accept);
    $_SESSION['success_messages'][] = 'Accepted friend request';  
    echo 0;
  } catch (PDOException $e) {
    }
?>
