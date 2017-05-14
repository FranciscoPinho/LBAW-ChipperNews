<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');

  if (!$_SESSION['username'] || !$_SESSION['user_id']) {
    header('Location: ' . $BASE_URL);
    exit;
  }

  $comments = getCommentHistory($_SESSION['user_id']);

  $smarty->assign('comments', $comments);
  $smarty->assign('user', $_SESSION['username']);


  $smarty->display('common/header.tpl');
  $smarty->display('users/post-history.tpl');
  $smarty->display('common/footer.tpl');
?>
