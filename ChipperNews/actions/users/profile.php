<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');  

  $name = strip_tags($_POST['name']);
  $username = strip_tags($_POST['username']);
  $password = $_POST['password'];
  $local_id = strip_tags($_POST['local_id']);
  $email = strip_tags($_POST['email']);
  $bio = strip_tags($_POST['bio']);
  $birthdate = $_POST['birthdate'];


  $photo = $_FILES['pic'];
  $extension = end(explode(".", $photo["name"]));

  try {
    createUser($username, $name, $password, $local_id, $email, $bio, $birthdate);
    move_uploaded_file($photo["tmp_name"], $BASE_DIR . "images/users/" . $username . '.' . $extension); // this is dangerous
    chmod($BASE_DIR . "images/users/" . $username . '.' . $extension, 0644);
  } catch (PDOException $e) {
  
    if (strpos($e->getMessage(), 'users_pkey') !== false) {
      $_SESSION['error_messages'][] = 'Duplicate username';
      $_SESSION['field_errors']['username'] = 'Username already exists';
    }
    else $_SESSION['error_messages'][] = $e->getMessage();

    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/users/register.php');
    exit;
  }
  $_SESSION['success_messages'][] = 'User registered successfully';  
  header("Location: $BASE_URL");
?>
