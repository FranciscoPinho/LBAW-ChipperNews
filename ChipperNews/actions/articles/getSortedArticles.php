<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/categories.php');
  include_once($BASE_DIR .'database/users.php');
  $type= $_POST['type'];
  switch($type)
  {
    case 'newest':
    $articles = getMyArticlesRecent($_SESSION['user_id']);
		break;
    case "oldest":
    $articles = getMyArticlesOldest($_SESSION['user_id']);
    break;
    case 'popular':
    $articles = getMyArticlesPopular($_SESSION['user_id']);
		break;
		case 'controversial':
    $articles = getMyArticlesControversial($_SESSION['user_id']);
		break;
  }  
    function dateDiffDays($mydate){
       $now = time(); // or your date as well
       $mydate = strtotime($mydate);
       $datediff = $now - $mydate;
       return floor($datediff / (60 * 60 * 24));
   }
   function fetchSubcategories($article_id)
   {
     $subcatories = getArticleSubcategories($article_id);
     return $subcatories;
   } 

  $smarty->assign('articles', $articles);
  $output = $smarty->fetch('ajax/my-articles-sorted.tpl');
  echo $output;
?>
