<?php
function getArticle($article_id)
  {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM article WHERE article_id = ?");
    $stmt->execute(array($article_id));
    return $stmt->fetchAll();
  }
?>