<?php
  function getArticle($article_id)
  {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM article WHERE article_id = ?");
    $stmt->execute(array($article_id));
    return $stmt->fetchAll();
  }
   function getArticles()
    {
      global $conn;
      $stmt = $conn->prepare(" SELECT article.*, COALESCE(SUM(rating_article.score),0) AS sum_score   
        FROM article  
        LEFT JOIN rating_article ON article.article_id=rating_article.article_id   
        WHERE (current_date-article.published_date) < 50   
        GROUP BY article.author,article.article_id 
        ORDER BY sum_score DESC;  ");
      $stmt->execute();
      return $stmt->fetchAll();
    }
  function createArticle($title, $lead, $content) 
  {

    global $conn;
    $stmt = $conn->prepare("INSERT INTO article(author,title,lead,content) 
    VALUES (?, ?, ?, ?) RETURNING article_id AS id");
    $stmt->execute(array($_SESSION['user_id'],$title,$lead,$content));
    return $stmt->fetchAll();
  }
 
  function createArticleTransaction($title, $lead, $content, $tags) 
  {
    try{
     global $conn;
      $conn->beginTransaction();
      $stmt = $conn->prepare("INSERT INTO article(author,title,lead,content) 
      VALUES (?, ?, ?, ?) RETURNING article_id AS id");
      $stmt->execute(array($_SESSION['user_id'],$title,$lead,$content));
      $res=$stmt->fetchAll();
      foreach($tags as &$tag){
            $stmt = $conn->prepare("INSERT INTO article_category(article_id,sub_id) 
            VALUES (?, ?)");
            print($tag);
            $stmt->execute(array($res[0]['id'],$tag));
      }
      
      $conn->commit();
    return $res[0]['id'];
    }
    catch (PDOException $e) {
      $conn->rollBack();
      throw $e;
    }
  }
?>