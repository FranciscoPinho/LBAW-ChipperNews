<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/categories.php');

  $subs = $_POST['subs'];

  foreach ($subs as $sub) {
    deleteSubcategory($sub);
  }
  header("Location: $BASE_URL" . 'pages/admin/syscategories.php');
?>
