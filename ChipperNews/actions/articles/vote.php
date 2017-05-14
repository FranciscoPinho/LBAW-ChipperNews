<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/articles.php');  
  include_once($BASE_DIR .'database/users.php');  
  if (!isset($_POST['article_id']) || !isset($_POST['score'])) {
    $_SESSION['error_messages'][] = 'Couldn\'t vote, server failure';
    exit;
  }
  try {
    if(rateArticle($_POST['article_id'],$_SESSION['user_id'],$_POST['score'])){
        $updated_article=getArticle($_POST['article_id']);
        echo json_encode(array($_POST['score'],$updated_article['posratings'],$updated_article['negratings']));
    }
    else echo json_encode(-1);
  } catch (PDOException $e) {
     $_SESSION['error_messages'][] = $e->getMessage();
     exit;
  }
  exit
?>
