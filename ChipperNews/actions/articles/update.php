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
  $article_id = strip_tags($_POST['article_id']);

  try {
    $ar_id=updateArticle($article_id,$title,$lead,$body);
  } catch (PDOException $e) {
  
     $_SESSION['error_messages'][] = $e->getMessage();
     $_SESSION['form_values'] = $_POST;
     header('Location: ' . $_SERVER['HTTP_REFERER']);
     exit;
  }
  $_SESSION['success_messages'][] = 'Article updated';   //send to article page when done
  header('Location: ' . $BASE_URL.'pages/articles/article.php?id='.$article_id);
?>

