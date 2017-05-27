<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php'); 

  if (!$_SESSION['username'] || !$_SESSION['user_id']) {
    header('Location: ' . $BASE_URL);
    exit;
  }
  
  $countries=getAllCountries();
  $user=getUserInfo($_SESSION['username'])[0];
  $smarty->assign('profile', 0);
  $smarty->assign('user', $user);
  $smarty->assign('username', $_SESSION['username']);

  function fetchInterests($user_id)
  {
     $subcategories = getUserInterests($user_id);
     return $subcategories;
  }

 function fetchMostPopularArticle($user_id){
    $popular=getMostPopularArticle($user_id);
    return $popular;
 }
  $smarty->assign('title', 'Profile');
  $smarty->assign('countries',$countries);
  $smarty->display('common/header.tpl');
  $smarty->display('users/profile.tpl');
  $smarty->display('common/footer.tpl');
?>