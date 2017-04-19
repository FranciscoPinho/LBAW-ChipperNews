<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/administration.php');
  include_once($BASE_DIR .'database/users.php');

  $operation = $_POST['operation'];
  $users = $_POST['users'];

  foreach ($users as $user) {
    upgradeUser($user);
  }
  debug_to_console($users);
  header("Location: $BASE_URL" . 'pages/admin/sysadmin.php');
?>
