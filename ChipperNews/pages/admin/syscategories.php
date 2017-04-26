<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/categories.php');
  $smarty->display('common/header.tpl');
  $smarty->display('admin/categoriespanel.tpl');
  $smarty->display('common/footer.tpl');
?>
