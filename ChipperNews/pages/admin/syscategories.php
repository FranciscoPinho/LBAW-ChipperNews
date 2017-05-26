<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/categories.php');

  $subcategories = getSubcategories();

  $smarty->assign('subcategories', $subcategories);

  function fetchCategory($sub_id)
  {
     $category = getCategory($sub_id);
     return $category[0];
  }
  $smarty->assign('adminpanel', 0);
  $smarty->display('common/header.tpl');
  $smarty->display('admin/categoriespanel.tpl');
  $smarty->display('common/footer.tpl');
?>
