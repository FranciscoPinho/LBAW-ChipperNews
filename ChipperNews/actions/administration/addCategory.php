<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/categories.php');

  $categoryName = $_POST['categoryName'];
  if($categoryName != NULL) addCategory($categoryName);

  header("Location: $BASE_URL" . 'pages/admin/syscategories.php');
?>
