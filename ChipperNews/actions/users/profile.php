<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');  
  
  switch($_POST['name'])
  {
    case 'fname':
    $name = strip_tags($_POST['value']);
    break;

    case 'bio':
    $bio = strip_tags($_POST['value']);
    break;

    case 'assocpub':
    $assoc_pub = strip_tags($_POST['value']);
    break;

    case 'email':
    $email = strip_tags($_POST['value']);
    break;

    case 'local':
    $local = strip_tags($_POST['value']);
    break;
  }

  $email_hide=strip_tags($_POST['email_hide']);
  $local_hide=strip_tags($_POST['local_hide']);
  $age_hide=strip_tags($_POST['age_hide']);
  $post_hide=strip_tags($_POST['post_hide']);
  
  //$password = strip_tags($_POST['password']);
  
  

  $photo = $_FILES['pic'];
  $extension = end(explode(".", $photo["name"]));

  try {
    print_r($_POST['email_hide']);
    setEmailPrivacy($_SESSION['user_id'], $email_hide);
    $_SESSION['success_messages'][] = 'User privacy settings updated successfully';  
    echo 0;
  } catch (PDOException $e) {
   print_r($_POST['email_hide']);
     $_SESSION['error_messages'][] = $e->getMessage();
    }

  try {
    setLocalPrivacy($_SESSION['user_id'], $local_hide);
    $_SESSION['success_messages'][] = 'User privacy settings updated successfully';  
    echo 0;
  } catch (PDOException $e) {
   
     $_SESSION['error_messages'][] = $e->getMessage();
    }

  try {
    setAgePrivacy($_SESSION['user_id'], $age_hide);
    $_SESSION['success_messages'][] = 'User privacy settings updated successfully';  
    echo 0;
  } catch (PDOException $e) {
   
     $_SESSION['error_messages'][] = $e->getMessage();
    }
  
  try {
    setPostHPrivacy($_SESSION['user_id'], $post_hide);
    $_SESSION['success_messages'][] = 'User privacy settings updated successfully';  
    echo 0;
  } catch (PDOException $e) {
   
     $_SESSION['error_messages'][] = $e->getMessage();
    }

  try {
    editUser($_SESSION['user_id'], $name, $email, $bio, $assoc_pub);
    $_SESSION['success_messages'][] = 'User information updated successfully';  
    echo 0;
  } catch (PDOException $e) {
   
     $_SESSION['error_messages'][] = $e->getMessage();
    }
?>
