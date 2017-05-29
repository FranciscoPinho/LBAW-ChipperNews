<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');
  
  if (!$_SESSION['username'] || !$_SESSION['user_id']) {
    header('Location: ' . $BASE_URL);
    exit;
  }

  $users = getAllUsers();
  $smarty->assign('users', $users);

  $smarty->display('common/header-no-search.tpl');
  $smarty->display('users/friendlist.tpl');
  $smarty->display('common/footer.tpl');
?>