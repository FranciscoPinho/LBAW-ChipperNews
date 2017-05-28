<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');
  include_once($BASE_DIR .'database/articles.php');
  include_once($BASE_DIR .'database/categories.php');

  if (!$_SESSION['username'] || !$_SESSION['user_id']) {
    header('Location: ' . $BASE_URL);
    exit;
  }

  $articles = getMeNewsfeed($_SESSION['user_id']);
  function fetchSubcategories($article_id)
   {
     $subcatories = getArticleSubcategories($article_id);
     return $subcatories;
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
  if(sizeof($articles)==0){
    $_SESSION['error_messages'][] = 'Sorry '. $_SESSION['username'] . ', but your newsfeed is empty, add more user interests and make friends to fill your feed';
    header('Location: ' . $BASE_URL);
    exit;
  }
  $smarty->assign('articles',$articles);
  $smarty->assign('user', $_SESSION['username']);
  $smarty->display('common/header.tpl');
  $smarty->display('users/newsfeed.tpl');
  $smarty->display('common/footer.tpl');
?>
