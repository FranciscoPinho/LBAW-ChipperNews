<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');
  include_once($BASE_DIR .'database/reports.php');
  /*
  if($_SESSION['permission']!=3)
   header('Location: ' . $BASE_URL);

   */
  $reports = getReports();

  $smarty->assign('reports', $reports);

  $smarty->display('common/header.tpl');
  $smarty->display('admin/reportPanel.tpl');
  $smarty->display('common/footer.tpl');
?>
