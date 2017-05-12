<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/articles.php');
  include_once($BASE_DIR .'database/users.php');
  include_once($BASE_DIR .'database/categories.php');

  $article = getArticle($_GET['id']);
  $smarty->assign('article', $article);

   function fetchSubcategories($article_id)
   {
     $subcatories = getArticleSubcategories($article_id);
     return $subcatories;
   }
   function fetchComments($article_id){
       $comments = getArticleComments($article_id);
       return $comments;
   }
   function fetchOldestComments($article_id){
       $comments = getArticleCommentsOldest($article_id);
       return $comments;
   }
   function fetchPopularComments($article_id){
       $comments = getArticleCommentsPopular($article_id);
       return $comments;
   }
   function fetchControversialComments($article_id){
       $comments = getArticleCommentsControversial($article_id);
       return $comments;
   }

  $smarty->display('common/header.tpl');
  $smarty->display('articles/article.tpl');
  $smarty->display('articles/article-comments.tpl');
  $smarty->display('users/login.tpl');
  $smarty->display('common/footer.tpl');
?>
