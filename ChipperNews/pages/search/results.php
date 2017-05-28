<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/articles.php');
  include_once($BASE_DIR .'database/categories.php');
  include_once($BASE_DIR .'database/users.php');
  $query = $_POST['query'];
  $articles = articles_fulltextsearch(strtok($query, " "),"search_article.published_date DESC");
    function fetchSubcategories($article_id)
   {
     $subcatories = getArticleSubcategories($article_id);
     return $subcatories;
   } 
  $users = search_users($query);
  $smarty->assign('query',$query);
  $smarty->assign('articles',$articles);
  $smarty->assign('users',$users);
  $smarty->display('common/header.tpl');
  $smarty->display('search/results.tpl');
  $smarty->display('users/login.tpl');
  $smarty->display('common/footer.tpl');
?>
