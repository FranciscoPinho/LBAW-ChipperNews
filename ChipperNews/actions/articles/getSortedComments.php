<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/categories.php');
  include_once($BASE_DIR .'database/articles.php');
  include_once($BASE_DIR .'database/users.php');

  if(!isset($_POST['type']) || !isset($_POST['article_id'])){
      echo json_encode(-1);
  }
 
  $type= $_POST['type'];
  $article_id = $_POST['article_id'];
  switch($type)
  {
    case 'newest':
    $updated_comments = getArticleComments($article_id);
	break;
    case "oldest":
    $updated_comments = getArticleCommentsOldest($article_id);
    break;
    case 'popular':
    $updated_comments = getArticleCommentsPopular($article_id);
	break;
	case 'controversial':
    $updated_comments = getArticleCommentsControversial($article_id);
	break;
  }  

   function fetchSubcategories($article_id)
   {
     $subcatories = getArticleSubcategories($article_id);
     return $subcatories;
   } 
   function unsetrating(){
       $smarty->assign(rating,-1);
   }
   $comment_ratings=getAllMyCommentRatings($_SESSION['user_id'],$article_id);
   $article = getArticle($_POST['article_id']);
   $smarty->assign('article', $article);
   $smarty->assign('comments', $updated_comments);
   $smarty->assign('ratings', $comment_ratings);
   $output = $smarty->fetch('ajax/article-comments-updated.tpl');
   echo $output;
?>
