<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/articles.php');
  include_once($BASE_DIR .'database/users.php');
  include_once($BASE_DIR .'database/categories.php'); 
  if($_SESSION['user_id']){
    $rating = getMyRating($_GET['id'],$_SESSION['user_id']);
    if($rating==null)
        $smarty->assign('rating',-1);
    else $smarty->assign('rating',$rating);
  }
  $article = getArticle($_GET['id']);
  $smarty->assign('article', $article);
  $smarty->assign('article_id',$_GET['id']);

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
   function dateDiffDays($mydate){
       $now = time(); // or your date as well
       $mydate = strtotime($mydate);
       $datediff = $now - $mydate;
       return floor($datediff / (60 * 60 * 24));
   }
  $comment_ratings=getAllMyCommentRatings($_SESSION['user_id'],$_GET['id']);
  $smarty->assign('ratings', $comment_ratings);
  $smarty->display('common/header.tpl');
  $smarty->display('articles/article.tpl');
  $smarty->display('articles/article-comments.tpl');
  $smarty->display('users/login.tpl');
  $smarty->display('articles/report-modal.tpl');
  $smarty->display('common/footer.tpl');
?>
