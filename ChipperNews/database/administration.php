<?php
  function permissionToUser($user_id)
  {
    global $conn;
    $stmt = $conn->prepare("UPDATE users SET permission_level = 1 WHERE user_id = ?");
    $stmt->execute(array($user_id));
  }
  function permissionToColaborator($user_id)
  {
    global $conn;
    $stmt = $conn->prepare("UPDATE users SET permission_level = 2 WHERE user_id = ?");
    $stmt->execute(array($user_id));
  }
  function permissionToModerator($user_id)
  {
    global $conn;
    $stmt = $conn->prepare("UPDATE users SET permission_level = 3 WHERE user_id = ?");
    $stmt->execute(array($user_id));
  }
?>
