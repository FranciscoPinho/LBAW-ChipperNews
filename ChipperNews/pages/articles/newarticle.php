<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/articles.php');
  

  if (!$_SESSION['username'] || !$_SESSION['user_id'] || $_SESSION['permission'] <1) {
    header('Location: ' . $BASE_URL);
    exit;
  }

  $smarty->display('common/header.tpl');
  $smarty->display('articles/newarticle.tpl');
  $smarty->display('common/footer.tpl');
?>

