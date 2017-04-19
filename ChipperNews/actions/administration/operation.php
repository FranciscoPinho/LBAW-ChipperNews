<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/administration.php');
  include_once($BASE_DIR .'database/users.php');

  $operation = $_POST['operation'];
  $users = $_POST['users'];

  foreach ($users as $user) {
    switch($operation)
    {
      case "user": permissionToUser($user);break;
      case "colaborator": permissionToColaborator($user);break;
      case "moderator": permissionToModerator($user);break;
      default: break;
    }
  }
  debug_to_console($users);
  header("Location: $BASE_URL" . 'pages/admin/sysadmin.php');
?>
