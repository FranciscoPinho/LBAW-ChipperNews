<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');

    //$_SESSION['user_id']
    //header('Location: ' . $BASE_URL);
    //$user_id= $_GET['id'];
  $canDisplay = false;
  $user_id= $_GET['id'];
  $viewer_id = $_SESSION['user_id'];

  if($user_id == $viewer_id) $canDisplay = true;
  else
  {
      $user = getUser($user_id);
      $hide = $user[0]['hide_posthistory'];
      if($hide == false )$canDisplay = true;
      else $canDisplay = false;
  }
 
  if($canDisplay)
  {
    $comments = getCommentHistory($user_id);
    $smarty->assign('comments', $comments);
    $smarty->assign('user', $user[0]);
    $smarty->display('common/header.tpl');
    $smarty->display('users/post-history.tpl');
    $smarty->display('common/footer.tpl');
  }
  else header('Location: ' . $BASE_URL);
?>
