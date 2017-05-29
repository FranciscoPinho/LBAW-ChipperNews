<?php
    include_once('../../config/init.php');
    include_once($BASE_DIR .'database/categories.php');

    $search_name = $_POST['search_name'];

    $subcategories = search_subCategories($search_name);

    function fetchCategory($sub_id)
    {
        $category = getCategory($sub_id);
        return $category[0];
    }
     $smarty->assign('subcategories', $subcategories);
     $output = $smarty->fetch('ajax/subcategories-ajax.tpl');
     echo $output;
?>
