<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/categories.php');

  $subcategoryName = $_POST['subcategoryName'];
  $parentID = $_POST['parentID'];
  if($subcategoryName != NULL && $parentID != NULL) 
  {
      addSubcategory($parentID,$subcategoryName);
  }

  header("Location: $BASE_URL" . 'pages/admin/syscategories.php');
?>
