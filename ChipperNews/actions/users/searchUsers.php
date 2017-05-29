<?php
    include_once('../../config/init.php');
    include_once($BASE_DIR .'database/users.php');

    $search_name = $_POST['search_name'];

    $users = search_users($search_name);
    //$count = $counts[0]['count'];

     $smarty->assign('users', $users);
     $output = $smarty->fetch('ajax/usertable-ajax.tpl');
     echo $output;
?>
