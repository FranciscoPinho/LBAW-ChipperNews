<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/articles.php');
  include_once($BASE_DIR .'database/categories.php');
  include_once($BASE_DIR .'database/users.php');
  

  if (!$_SESSION['username'] || !$_SESSION['user_id'] || $_SESSION['permission'] <1) {
    header('Location: ' . $BASE_URL);
    exit;
  }
  $subcategories = getSubcategories();
  $programming = array();
  $hardware = array();
  $software = array();
  $industry = array();
  $technology = array();
  $others = array();
  
  foreach ($subcategories as $k => &$sub) {
    switch($sub['category']){
      case 1:
      $programming[]=$sub;
      break;
      case 2:
      $hardware[]=$sub;
      break;
      case 3:
      $software[]=$sub;
      break;
      case 4:
      $industry[]=$sub;
      break;
      case 5:
      $technology[]=$sub;
      break;
      case 6:
      $others[]=$sub;
      break;
      default:
      debug_to_console("Subcategory triage failing");
      break;
    }
  }
  $smarty->assign('programming',$programming);
  $smarty->assign('hardware',$hardware);
  $smarty->assign('software',$software);
  $smarty->assign('industry',$industry);
  $smarty->assign('technology',$technology);
  $smarty->assign('others',$others);
  $smarty->display('common/header.tpl');
  $smarty->display('articles/newarticle.tpl');
  $smarty->display('common/footer.tpl');
?>

