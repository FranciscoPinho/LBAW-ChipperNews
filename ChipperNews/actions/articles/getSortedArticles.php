<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/categories.php');
  include_once($BASE_DIR .'database/users.php');
  include_once($BASE_DIR .'database/articles.php');
  
  if(!isset($_POST['type']))
    echo -1;

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
   function fetchSubcategories($article_id)
   {
     $subcatories = getArticleSubcategories($article_id);
     return $subcatories;
   } 

  $smarty->assign('articles', $articles);
  $output = $smarty->fetch('ajax/my-articles-sorted.tpl');
  echo $output;
?>
