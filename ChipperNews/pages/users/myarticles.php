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
 
   function fetchMyRecentArticles(){
       $articles = getMyArticlesRecent($_SESSION['user_id']);
       return $articles;
   }
   function fetchMyPopularArticles(){
       $articles = getMyArticlesPopular($_SESSION['user_id']);
       return $articles;
   }
   function fetchMyControversialArticles(){
       $articles = getMyArticlesControversial($_SESSION['user_id']);
       return $articles;
   }
   function fetchMyOldestArticles(){
       $articles = getMyArticlesOldest($_SESSION['user_id']);
       return $articles;
   }
   function dateDiffDays($mydate){
       $now = time(); // or your date as well
       $mydate = strtotime($mydate);
       $datediff = $now - $mydate;
       return floor($datediff / (60 * 60 * 24));
   }
  $articles = getMyArticlesRecent($_SESSION['user_id']);
  $smarty->assign('articles', $articles);
  $smarty->display('common/header.tpl');
  $smarty->display('users/myarticles.tpl');
  $smarty->display('common/footer.tpl');
?>
