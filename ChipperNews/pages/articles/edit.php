<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/articles.php');
  include_once($BASE_DIR .'database/users.php');
  
  $article = getArticle($_GET['id']);
  if (!$_SESSION['username'] || !$_SESSION['user_id'] || $_SESSION['permission'] <1 ) { 
    
    header('Location: ' . $BASE_URL);
    exit;
  }
  if(($article['author']!=$_SESSION['user_id'] && $_SESSION['permission']<2) || $article['archived'] ){
    header('Location: ' . $BASE_URL);
    exit;
  }
  $smarty->assign('article', $article);
  $smarty->display('common/header.tpl');
  $smarty->display('articles/edit-article.tpl');
  $smarty->display('common/footer.tpl');
?>

