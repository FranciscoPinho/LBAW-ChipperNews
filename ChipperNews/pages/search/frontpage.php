<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/articles.php');
  include_once($BASE_DIR .'database/categories.php');

  $articles = getArticles();
  $smarty->assign('articles', $articles);

   function fetchSubcategories($article_id)
   {
     $subcatories = getArticleSubcategories($article_id);
     return $subcatories;
   }
   function fetchSubcategory($sub_id)
   {
     $subcategory = getSubcategory($sub_id);
     return $subcategory[0];
   }

  $smarty->display('common/header.tpl');
  $smarty->display('search/frontpage.tpl');
  $smarty->display('users/login.tpl');
  $smarty->display('common/footer.tpl');
?>
