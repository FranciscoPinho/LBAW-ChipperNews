<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');

  $users = getAllUsers();
  $usersID = 1;  
  $smarty->assign('users', $users);
  $smarty->assign('usersID', $usersID);
  $smarty->display('common/header.tpl');
  $smarty->display('admin/adminpanel.tpl');
  $smarty->display('common/footer.tpl');
?>
