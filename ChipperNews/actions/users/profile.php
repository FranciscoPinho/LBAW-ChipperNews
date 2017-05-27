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

  
  
  //$password = strip_tags($_POST['password']);
  
  

  $photo = $_FILES['pic'];
  $extension = end(explode(".", $photo["name"]));

  try {
    editUser($_SESSION['user_id'], $name, $email, $bio, $assoc_pub);
    $_SESSION['success_messages'][] = 'User information updated successfully';  
    echo 0;
  } catch (PDOException $e) {
   
     $_SESSION['error_messages'][] = $e->getMessage();
    }
?>
