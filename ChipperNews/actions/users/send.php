<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');
  include_once($BASE_DIR .'database/messages.php');  
  
  $recv=strip_tags($_POST['receiver']);
  $msg=strip_tags($_POST['message']);
  $recvr=getUserID($recv);

  
  try {
    sendMessage($_SESSION['user_id'],$recvr, $msg);
    $_SESSION['success_messages'][] = 'Message sent';  
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
  } catch (PDOException $e) {
      $_SESSION['error_messages'][] = $e->getMessage();
          header('Location: ' . $_SERVER['HTTP_REFERER']);
      exit;
       
    }
?>