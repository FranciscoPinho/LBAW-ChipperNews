<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');  
  if (!$_POST['username'] || !$_POST['password']) {
    $_SESSION['error_messages'][] = 'Invalid login';
    $_SESSION['form_values'] = $_POST;
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
  }

  $username = $_POST['username'];
  $password = $_POST['password'];

  if (isLoginCorrect($username, $password)) {
    $_SESSION['permission'] = getCredentials($username);
    $_SESSION['user_id'] = getUserID($username);
    $_SESSION['username'] = $username;
    $_SESSION['userinfo'] = getUserInfo($username)[0];
    $_SESSION['success_messages'][] = 'Hello '. $username . ', you have successfully logged in';  
  } 
   elseif(isUserBanned($username))
  {
    $_SESSION['error_messages'][] = 'Sorry '. $username . ', but you have been banned';
  }
 
  elseif(isUserDeleted($username))
  {
    $_SESSION['error_messages'][] = 'Sorry but '. $username . "'s account has been deleted";
  }
  
  else {
    $_SESSION['error_messages'][] = 'Login failed';  
  }
  header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
