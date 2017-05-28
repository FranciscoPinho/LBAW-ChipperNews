<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');  
  if (!isset($_POST['user_id']) || !isset($_SESSION['user_id'])) {
    $_SESSION['error_messages'][] = 'Couldn\'t accept application, server failure';
    exit;
  }
  try {
    if(acceptApp($_POST['user_id'])){
        echo 0;
    }
    else echo json_encode(-1);
  } catch (PDOException $e) {
     $_SESSION['error_messages'][] = $e->getMessage();
     exit;
  }
  exit
?>