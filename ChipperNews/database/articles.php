<?php
  function rateArticle($article_id,$user_id,$score)
  {
      global $conn; 
      $stmt = $conn->prepare("SELECT * FROM rate_article(?,?,?)");
      $stmt->execute(array($article_id,$user_id,$score));
      return $stmt->fetchAll();
  }

  function getArticle($article_id)
  {
    global $conn;
    $stmt = $conn->prepare("SELECT article.*,users.name AS authorname, COALESCE(SUM(rating_article.score),0) AS sum_score,
          (SELECT COUNT(rating_article.score) 
           FROM rating_article
           WHERE  rating_article.score=1 AND rating_article.article_id = ?) AS posratings,
          (SELECT COUNT(rating_article.score) 
          FROM rating_article
          WHERE rating_article.score=-1 AND rating_article.article_id = ?) AS negratings 
          FROM article  
          LEFT JOIN rating_article ON article.article_id=rating_article.article_id
          LEFT JOIN users ON article.author=users.user_id
          WHERE article.article_id = ?  
          GROUP BY article.author,users.name,article.article_id 
        ");
    $stmt->execute(array($article_id,$article_id,$article_id));
    $article= $stmt->fetchAll();
    return $article[0];
  }

  function getMyRating($article_id,$user_id){
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM rating_article WHERE article_id=? AND user_id=?");
    $stmt->execute(array($article_id,$user_id));
    $article= $stmt->fetchAll();
    return $article[0];
  }

  function getArticleComments($article_id){
     global $conn;
     $stmt = $conn->prepare("SELECT comment.comment_id,comment.content,to_char(comment.posted_date,'DD-MM-YY HH24:MI') AS posted_date,users.username AS commenter, COALESCE(SUM(rating_comment.score),0) AS sum_score
          FROM comment
          LEFT JOIN rating_comment ON comment.comment_id=rating_comment.comment_id
          LEFT JOIN users ON comment.user_id=users.user_id
          WHERE comment.article_id = ?  
          GROUP BY comment.user_id,users.username,comment.comment_id 
          ORDER BY comment.posted_date DESC; 
        ");
    $stmt->execute(array($article_id));
    return $stmt->fetchAll();

  }

   function getArticleCommentsOldest($article_id){
     global $conn;
     $stmt = $conn->prepare("SELECT comment.comment_id,comment.content,to_char(comment.posted_date,'DD-MM-YY HH24:MI') AS posted_date,users.username AS commenter, COALESCE(SUM(rating_comment.score),0) AS sum_score
          FROM comment
          LEFT JOIN rating_comment ON comment.comment_id=rating_comment.comment_id
          LEFT JOIN users ON comment.user_id=users.user_id
          WHERE comment.article_id = ?  
          GROUP BY comment.user_id,users.username,comment.comment_id 
          ORDER BY comment.posted_date ASC; 
        ");
    $stmt->execute(array($article_id));
    return $stmt->fetchAll();

  }

  function getArticleCommentsPopular($article_id){
     global $conn;
     $stmt = $conn->prepare("SELECT comment.comment_id,comment.content,to_char(comment.posted_date,'DD-MM-YY HH24:MI') AS posted_date,users.username AS commenter, COALESCE(SUM(rating_comment.score),0) AS sum_score
          FROM comment
          LEFT JOIN rating_comment ON comment.comment_id=rating_comment.comment_id
          LEFT JOIN users ON comment.user_id=users.user_id
          WHERE comment.article_id = ?  
          GROUP BY comment.user_id,users.username,comment.comment_id 
          ORDER BY sum_score DESC; 
        ");
    $stmt->execute(array($article_id));
    return $stmt->fetchAll();

  }

    function getArticleCommentsControversial($article_id){
     global $conn;
     $stmt = $conn->prepare("SELECT comment.comment_id,comment.content,to_char(comment.posted_date,'DD-MM-YY HH24:MI') AS posted_date,users.username AS commenter, COALESCE(SUM(rating_comment.score),0) AS sum_score
          FROM comment
          LEFT JOIN rating_comment ON comment.comment_id=rating_comment.comment_id
          LEFT JOIN users ON comment.user_id=users.user_id
          WHERE comment.article_id = ?  
          GROUP BY comment.user_id,users.username,comment.comment_id 
          ORDER BY sum_score ASC; 
        ");
    $stmt->execute(array($article_id));
    return $stmt->fetchAll();

  }

  function getRecentArticles()
  {
      global $conn;
      $stmt = $conn->prepare(" SELECT article.*, COALESCE(SUM(rating_article.score),0) AS sum_score,
       (SELECT COUNT(rating_article.score) 
        FROM rating_article
        WHERE  rating_article.score=1 AND rating_article.article_id = article.article_id) AS posratings,
        (SELECT COUNT(rating_article.score) 
        FROM rating_article
        WHERE rating_article.score=-1 AND rating_article.article_id = article.article_id) AS negratings   
        FROM article  
        LEFT JOIN rating_article ON article.article_id=rating_article.article_id   
        WHERE (current_date-article.published_date) < 50   
        GROUP BY article.author,article.article_id 
        ORDER BY article.published_date DESC;  ");
      $stmt->execute();
      return $stmt->fetchAll();
  } 
  function getControversialArticles()
  {
      global $conn;
      $stmt = $conn->prepare(" SELECT article.*, COALESCE(SUM(rating_article.score),0) AS sum_score   
        FROM article  
        LEFT JOIN rating_article ON article.article_id=rating_article.article_id   
        WHERE (current_date-article.published_date) < 50   
        GROUP BY article.author,article.article_id 
        ORDER BY article.sum_score DESC;  ");
      $stmt->execute();
      return $stmt->fetchAll();
  }
    function getPopularArticles()
  {
      global $conn;
      $stmt = $conn->prepare(" SELECT article.*, COALESCE(SUM(rating_article.score),0) AS sum_score   
        FROM article  
        LEFT JOIN rating_article ON article.article_id=rating_article.article_id   
        WHERE (current_date-article.published_date) < 50   
        GROUP BY article.author,article.article_id 
        ORDER BY article.sum_score ASC;  ");
      $stmt->execute();
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