<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/articles.php');
  include_once($BASE_DIR .'database/users.php');
  include_once($BASE_DIR .'database/categories.php'); 
  if (!$_SESSION['username'] || !$_SESSION['user_id']) {
    header('Location: ' . $BASE_URL);
    exit;
  }
   function fetchSubcategories($article_id)
   {
     $subcatories = getArticleSubcategories($article_id);
     return $subcatories;
   }

  $articles = getMyArticlesRecent($_SESSION['user_id']);
  $smarty->assign('articles', $articles);
  $smarty->display('common/header.tpl');
  $smarty->display('users/myarticles.tpl');
  $smarty->display('common/footer.tpl');
?>
