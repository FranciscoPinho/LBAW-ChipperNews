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
    case 'me':
    $articles = getMeNewsfeed($_SESSION['user_id']);
	break;
    case "friends":
    $articles = getFriendsNewsfeed($_SESSION['user_id']);
    break;
    case 'mixed':
    $articles = getMixedNewsfeed($_SESSION['user_id']);
    break;
  }  
     function fetchWhoLiked($user_id,$article_id)
   {
     $liked = friendsWhoLiked($user_id,$article_id);
     return $liked;
   }
   function appendFriend($string,$array)
   {
      $array[]=$string;
      return $array;
   }
   function fetchSubcategories($article_id)
   {
     $subcatories = getArticleSubcategories($article_id);
     return $subcatories;
   } 

  $smarty->assign('articles', $articles);
  $output = $smarty->fetch('ajax/newsfeed-articles.tpl');
  echo $output;
?>
