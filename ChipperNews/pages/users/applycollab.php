<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');
 
	if($_SESSION['permission'] != 0){
		header('Location: '.$BASE_DIR);
	}
	else {
		$smarty->assign('title', 'Apply Collaborator');
		$smarty->display('users/applycollab.tpl');
	}
?>
