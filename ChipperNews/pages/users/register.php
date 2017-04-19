<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');
  $smarty->assign('title', 'Register');
  $smarty->display('users/register.tpl');
?>
