<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/articles.php');  
  include_once($BASE_DIR .'database/users.php');  
  if (!isset($_POST['article_id']) || !isset($_SESSION['user_id']) || !isset($_POST['content'])) {
    echo json_encode(-1);
    exit;
  }
  try {
    if(newComment($_POST['article_id'],$_SESSION['user_id'],$_POST['content'])){
        $updated_comments=getArticleComments($_POST['article_id']);
        $smarty->assign('comments', $updated_comments);
        $output = $smarty->fetch('ajax/article-comments-updated.tpl');
        echo $output;
    }
    else echo json_encode(-2);
  } catch (PDOException $e) {
     $_SESSION['error_messages'][] = $e->getMessage();
     exit;
  }
  exit
?>
