<?php
  function upgradeUser($user_id)
  {
    global $conn;
    $stmt->execute();
  }
  function demoteUser($user_id)
  {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM users");
    $stmt->execute();
  }
?>
