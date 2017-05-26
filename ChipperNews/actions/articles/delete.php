<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/articles.php');  
  include_once($BASE_DIR .'database/users.php');  
  if (!isset($_POST['article_id']) || $_SESSION['permission']!=3) {
    $_SESSION['error_messages'][] = 'Couldn\'t delete, no permissions';
    exit;
  }
  try {
    if(deleteArticle($_POST['article_id'])){
        echo 0;
    }
    else echo json_encode(-1);
  } catch (PDOException $e) {
     $_SESSION['error_messages'][] = $e->getMessage();
     exit;
  }
  exit
?>
