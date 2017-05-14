<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/articles.php');  
  include_once($BASE_DIR .'database/users.php');  
  
  

  if (!$_POST['title'] || !$_POST['lead'] || !$_POST['body']) {
    $_SESSION['error_messages'][] = 'Fill out all the mandatory fields';
    $_SESSION['form_values'] = $_POST;
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
  }

  $title = strip_tags($_POST['title']);
  $lead = strip_tags($_POST['lead']);
  $body = $_POST['body'];
  $tags = $_POST['tags'];

  $photo = $_FILES['pic']; 
  $extension = end(explode(".", $photo["name"]));

  try {
    $ar_id=createArticleTransaction($title,$lead,$body,$tags);
    move_uploaded_file($photo["tmp_name"], $BASE_DIR . "images/articles/" . $ar_id . '.' . $extension); // this is dangerous
    chmod($BASE_DIR . "images/articles/" . $ar_id . '.' . $extension, 0644);
  } catch (PDOException $e) {
  
     $_SESSION['error_messages'][] = $e->getMessage();
     $_SESSION['form_values'] = $_POST;
     header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
  }
  $_SESSION['success_messages'][] = 'Article created';   //send to article page when done
  header('Location: ' . $_SERVER['HTTP_REFERER']);
?>


