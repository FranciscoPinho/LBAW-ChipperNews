<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');
  $countries=getAllCountries();

 
  $smarty->assign('title', 'Profile');
  $smarty->assign('countries',$countries);
  $smarty->display('common/header.tpl');
  $smarty->display('users/profile.tpl');
  $smarty->display('common/footer.tpl');
?>