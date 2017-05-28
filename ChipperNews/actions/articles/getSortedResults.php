<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/categories.php');
  include_once($BASE_DIR .'database/users.php');
  include_once($BASE_DIR .'database/articles.php');
  
  if(!isset($_POST['type']) || !isset($_POST['query']))
    echo -1;

  $type= $_POST['type'];
  $query= $_POST['query'];
  switch($type)
  {
    case 'newest':
    $updated_articles = articles_fulltextsearch(strtok($query, " "),"search_article.published_date DESC");
		break;
    case "oldest":
    $updated_articles = articles_fulltextsearch(strtok($query, " "),"search_article.published_date ASC");
    break;
    case 'popular':
    $updated_articles = articles_fulltextsearch(strtok($query, " "),"sum_score DESC");
		break;
	case 'controversial':
    $updated_articles = articles_fulltextsearch(strtok($query, " "),"sum_score ASC");
	break;
  }  
   function fetchSubcategories($article_id)
   {
     $subcatories = getArticleSubcategories($article_id);
     return $subcatories;
   } 


  $smarty->assign('articles', $updated_articles);
  $output = $smarty->fetch('ajax/results-ajax.tpl');
  echo $output
  
?>
