<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php'); 

  if ($_SESSION['username'] == $_GET['usr']) 
  {
    header('Location: ' . $BASE_URL .  'pages/users/profile.php');
    exit;
  }
  
  $countries=getAllCountries();
  $user=getUserInfo($_GET['usr'])[0];
  $smarty->assign('user', $user);
  $smarty->assign('username', $_GET['usr']);

  function fetchInterests($user_id)
  {
     $subcategories = getUserInterests($user_id);
     return $subcategories;
  }

 function fetchMostPopularArticle($user_id)
 {
    $popular=getMostPopularArticle($user_id);
    return $popular;
 }

  $smarty->assign('title', 'Profile');
  $smarty->assign('countries',$countries);
  $smarty->display('common/header.tpl');
  $smarty->display('users/login.tpl');
  $smarty->display('users/view_profile.tpl');
  $smarty->display('common/footer.tpl');
?>