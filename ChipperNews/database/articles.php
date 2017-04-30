<?php
function getArticle($article_id)
  {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM article WHERE article_id = ?");
    $stmt->execute(array($article_id));
    return $stmt->fetchAll();
  }
  function createArticle($title, $lead, $content) 
  {

    global $conn;
    $stmt = $conn->prepare("INSERT INTO article(author,title,lead,content) 
    VALUES (?, ?, ?, ?) RETURNING article_id");
    $stmt->execute(array($_SESSION['user_id'],$title,$lead,$content));
    return $stmt->fetchAll();
  }
  
?>