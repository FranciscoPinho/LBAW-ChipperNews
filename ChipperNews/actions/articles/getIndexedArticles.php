<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/articles.php');
  include_once($BASE_DIR .'database/users.php');
  include_once($BASE_DIR .'database/categories.php'); 
  $indexA = $_POST['indexA'];
  $indexB = $_POST['indexB'];
  $categoryID = $_POST['categoryID'];
  $articles;
  if($categoryID == 0 )
  {
    $articles =  getRecentArticles();
  }  
  else 
  {
    $articles =  getRecentArticlesByCategory($categoryID);
  }
  if($indexB > sizeof($articles)) $indexB = sizeof($articles);

  $smarty->assign('articles', $articles);
   $smarty->assign('indexA', $indexA);
  $smarty->assign('indexB', $indexB);
  $output = $smarty->fetch('ajax/articles-ajax.tpl');
  echo $output;

  function fetchSubcategories($article_id)
   {
     $subcatories = getArticleSubcategories($article_id);
     return $subcatories;
   }
  exit
?>
