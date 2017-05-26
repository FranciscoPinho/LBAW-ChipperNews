<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/articles.php');  
  include_once($BASE_DIR .'database/users.php');  
  if (!isset($_POST['article_id']) || $_SESSION['permission']<2) {
    $_SESSION['error_messages'][] = 'Couldn\'t archive, server failure';
    exit;
  }
  try {
    if(archiveArticle($_POST['article_id'])){
        echo 0;
    }
    else echo json_encode(-1);
  } catch (PDOException $e) {
     $_SESSION['error_messages'][] = $e->getMessage();
     exit;
  }
  exit
?>
