<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/posthistory.php');
  include_once($BASE_DIR .'database/articles.php');

  if (!$_SESSION['username'] || !$_SESSION['user_id']) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
  }

  $comments = getComments($_SESSION['user_id']);
  $user = getUser($_SESSION['user_id']);

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
