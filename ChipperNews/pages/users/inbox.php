<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/messages.php');
 
	if(!$_SESSION['permission']){
		header('Location: '.$BASE_DIR);
		exit;
	}
    $messages = getAllReceivedMessages($_SESSION['user_id']);
    $smarty->assign('messages',$messages);
	$smarty->assign('inbox',0);
    $smarty->display('common/header.tpl');
	$smarty->display('users/inbox.tpl');
    $smarty->display('common/footer.tpl');
	
?>
