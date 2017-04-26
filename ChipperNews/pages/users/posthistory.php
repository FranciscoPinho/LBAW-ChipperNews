<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/posthistory.php');
  include_once($BASE_DIR .'database/articles.php');

  //We should be getting the currently logged in user, but at the moment its hardcoded to 9.
  $comments = getComments(9);
  $user = getUser(9);

  $smarty->assign('comments', $comments);
  $smarty->assign('user', $user);

  function getVotes($comment_id)
  {
    $total = 1;
    $ratings = getRatings($comment_id);
    foreach($ratings as $rating)
    {
        $total += $rating.score;
    }
    return $total;
  }
  function fetchArticle($article_id)
  {
     $article = getArticle($article_id);
     return $article[0];
  }

  $smarty->display('common/header.tpl');
  $smarty->display('users/post-history.tpl');
  $smarty->display('common/footer.tpl');
?>
