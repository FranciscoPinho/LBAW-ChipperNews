<?php
function getUser($user_id)
  {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM users WHERE user_id = ?");
    $stmt->execute(array($user_id));
    return $stmt->fetchAll();
  }
  function getComments($user_id)
  {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM comment WHERE user_id = ? ORDER BY posted_date");
    $stmt->execute(array($user_id));
    return $stmt->fetchAll();
  }
  function getRatings($comment_id)
  {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM rating_comment WHERE comment_id = ?");
    $stmt->execute(array($comment_id));
    return $stmt->fetchAll();
  }
?>