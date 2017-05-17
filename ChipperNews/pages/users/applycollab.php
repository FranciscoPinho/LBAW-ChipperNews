<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');
 
  $smarty->assign('title', 'Apply Collaborator');
  $smarty->display('users/applycollab.tpl');
?>
