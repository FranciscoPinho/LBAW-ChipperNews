<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');
  
  $smarty->display('common/header.tpl');
  $smarty->display('admin/adminpanel.tpl');
  $smarty->display('common/footer.tpl');
?>
