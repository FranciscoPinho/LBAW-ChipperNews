<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');  
  if (!isset($_SESSION['user_id']) || !isset($_POST['reported']) || !isset($_POST['description'])) {
    $_SESSION['error_messages'][] = 'Couldn\'t vote, server failure';
    exit;
  }
  try {
    if(newReport($_SESSION['user_id'],$_POST['reported'],$_POST['description'])){
        echo 0;
    }
    else echo -1;
  } catch (PDOException $e) {
     $_SESSION['error_messages'][] = $e->getMessage();
     exit;
  }
  exit
?>