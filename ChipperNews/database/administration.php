<?php
  function permissionToUser($user_id)
  {
    global $conn;
    $stmt = $conn->prepare("UPDATE users SET permission_level = 0 WHERE user_id = ?");
    $stmt->execute(array($user_id));
  }
  function permissionToColaborator($user_id)
  {
    global $conn;
    $stmt = $conn->prepare("UPDATE users SET permission_level = 1 WHERE user_id = ?");
    $stmt->execute(array($user_id));
  }
  function permissionToModerator($user_id)
  {
    global $conn;
    $stmt = $conn->prepare("UPDATE users SET permission_level = 2 WHERE user_id = ?");
    $stmt->execute(array($user_id));
  }
  function banUser($user_id)
  {
    global $conn;
    $stmt = $conn->prepare("UPDATE users SET is_banned = TRUE WHERE user_id = ?");
    $stmt->execute(array($user_id));
  }
   function deleteUser($user_id)
  {
    global $conn;
    $stmt = $conn->prepare("UPDATE users SET is_deleted = TRUE WHERE user_id = ?");
    $stmt->execute(array($user_id));
  }
?>
