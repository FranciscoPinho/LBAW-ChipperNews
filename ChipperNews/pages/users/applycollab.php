<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');
 
	if($_SESSION['permission'] != 0){
		header('Location: '.$BASE_DIR);
	}
	else {
		$apps=0;
		$smarty->assign('title', 'Apply Collaborator');
		$smarty->assign('apps',$apps)
		$smarty->display('users/applycollab.tpl');
	}
?>
