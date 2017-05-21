<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');

  if (!$_SESSION['username'] || !$_SESSION['user_id']) {
    header('Location: ' . $BASE_URL);
    exit;
  }

  $apps = getApplicationList();

  $smarty->assign('apps', $apps);

  $smarty->display('common/header.tpl');
  $smarty->display('users/applist.tpl');
  $smarty->display('common/footer.tpl');
?>
