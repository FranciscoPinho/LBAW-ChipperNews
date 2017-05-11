<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');

  if (!$_SESSION['username'] || !$_SESSION['user_id']) {
    header('Location: ' . $BASE_URL);
    exit;
  }
  
  $countries=getAllCountries();
  $user=$_SESSION['userinfo'];
  $smarty->assign('user', $user);
  $smarty->assign('username', $_SESSION['username']);
  
  $smarty->assign('title', 'Profile');
  $smarty->assign('countries',$countries);
  $smarty->display('common/header.tpl');
  $smarty->display('users/profile.tpl');
  $smarty->display('common/footer.tpl');
?>