<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');
  include_once($BASE_DIR .'database/categories.php');
  $countries=getAllCountries();
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
  $smarty->assign('title', 'Register');
  $smarty->assign('countries',$countries);
  $smarty->display('users/register.tpl');
?>
