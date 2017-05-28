<?php
 
  function newComment($article_id,$user_id,$content){
      global $conn; 
      $stmt = $conn->prepare("INSERT INTO comment(article_id,user_id,content) VALUES (?,?,?)");
      return $stmt->execute(array($article_id,$user_id,$content));
  }
  function rateArticle($article_id,$user_id,$score)
  {
      global $conn; 
      $stmt = $conn->prepare("SELECT * FROM rate_article(?,?,?)");
      $stmt->execute(array($article_id,$user_id,$score));
      return $stmt->fetchAll();
  }
  function rateComment($comment_id,$user_id,$score)
  {
      global $conn; 
      $stmt = $conn->prepare("SELECT * FROM rate_comment(?,?,?)");
      $stmt->execute(array($comment_id,$user_id,$score));
      return $stmt->fetchAll();
  }
  function archiveArticle($article_id){
      global $conn; 
      $stmt = $conn->prepare("UPDATE article SET archived='true' WHERE article_id=?");
      return $stmt->execute(array($article_id));
  }
  function deleteArticle($article_id){
      global $conn; 
      $stmt = $conn->prepare("DELETE FROM article WHERE article_id=?");
      return $stmt->execute(array($article_id));
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
  function deleteComment($comment_id){
    global $conn;
    $stmt = $conn->prepare("DELETE FROM comment WHERE comment_id=?");
    return $stmt->execute(array($comment_id));
  }
  function getMyRating($article_id,$user_id){
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM rating_article WHERE article_id=? AND user_id=?");
    $stmt->execute(array($article_id,$user_id));
    $rating= $stmt->fetchAll();
    return $rating[0];
  }
  
  function getMyCommentRating($comment_id_id,$user_id){
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM rating_comment WHERE comment_id=? AND user_id=?");
    $stmt->execute(array($comment_id,$user_id));
    $rating= $stmt->fetchAll();
    return $rating[0];
  }
   function getAllMyCommentRatings($user_id,$article_id){
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM rating_comment LEFT JOIN comment ON rating_comment.comment_id=comment.comment_id WHERE rating_comment.user_id=? AND comment.article_id=?");
    $stmt->execute(array($user_id,$article_id));
    $ratings= $stmt->fetchAll();
    return $ratings;
  }
  function getArticleComments($article_id){
     global $conn;
     $stmt = $conn->prepare("SELECT comment.comment_id,comment.user_id AS commenter_id,comment.content,to_char(comment.posted_date,'DD-MM-YY HH24:MI') AS posted_date,users.username AS commenter,users.permission_level AS commenter_permission, COALESCE(SUM(rating_comment.score),0) AS sum_score
          FROM comment
          LEFT JOIN rating_comment ON comment.comment_id=rating_comment.comment_id
          LEFT JOIN users ON comment.user_id=users.user_id
          WHERE comment.article_id = ?  
          GROUP BY comment.user_id,users.username,comment.comment_id,users.permission_level
          ORDER BY comment.posted_date DESC; 
        ");
    $stmt->execute(array($article_id));
    return $stmt->fetchAll();

  }

   function getArticleCommentsOldest($article_id){
     global $conn;
     $stmt = $conn->prepare("SELECT comment.comment_id,comment.user_id AS commenter_id,comment.content,to_char(comment.posted_date,'DD-MM-YY HH24:MI') AS posted_date,users.username AS commenter,users.permission_level AS commenter_permission,  COALESCE(SUM(rating_comment.score),0) AS sum_score
          FROM comment
          LEFT JOIN rating_comment ON comment.comment_id=rating_comment.comment_id
          LEFT JOIN users ON comment.user_id=users.user_id
          WHERE comment.article_id = ?  
          GROUP BY comment.user_id,users.username,comment.comment_id,users.permission_level
          ORDER BY comment.posted_date ASC; 
        ");
    $stmt->execute(array($article_id));
    return $stmt->fetchAll();

  }

  function getArticleCommentsPopular($article_id){
     global $conn;
     $stmt = $conn->prepare("SELECT comment.comment_id,comment.user_id AS commenter_id,comment.content,to_char(comment.posted_date,'DD-MM-YY HH24:MI') AS posted_date,users.username AS commenter,users.permission_level AS commenter_permission,  COALESCE(SUM(rating_comment.score),0) AS sum_score
          FROM comment
          LEFT JOIN rating_comment ON comment.comment_id=rating_comment.comment_id
          LEFT JOIN users ON comment.user_id=users.user_id
          WHERE comment.article_id = ?  
          GROUP BY comment.user_id,users.username,comment.comment_id,users.permission_level
          ORDER BY sum_score DESC; 
        ");
    $stmt->execute(array($article_id));
    return $stmt->fetchAll();

  }

    function getArticleCommentsControversial($article_id){
     global $conn;
     $stmt = $conn->prepare("SELECT comment.comment_id,comment.user_id AS commenter_id,comment.content,to_char(comment.posted_date,'DD-MM-YY HH24:MI') AS posted_date,users.username AS commenter,users.permission_level AS commenter_permission,  COALESCE(SUM(rating_comment.score),0) AS sum_score
          FROM comment
          LEFT JOIN rating_comment ON comment.comment_id=rating_comment.comment_id
          LEFT JOIN users ON comment.user_id=users.user_id
          WHERE comment.article_id = ?  
          GROUP BY comment.user_id,users.username,comment.comment_id,users.permission_level 
          ORDER BY sum_score ASC; 
        ");
    $stmt->execute(array($article_id));
    return $stmt->fetchAll();

  }

  function getRecentArticles()
  {
      global $conn;
      $stmt = $conn->prepare(" SELECT article.*,users.name AS authorname,COALESCE(SUM(rating_article.score),0) AS sum_score,
       (SELECT COUNT(rating_article.score) 
        FROM rating_article
        WHERE  rating_article.score=1 AND rating_article.article_id = article.article_id) AS posratings,
        (SELECT COUNT(rating_article.score) 
        FROM rating_article
        WHERE rating_article.score=-1 AND rating_article.article_id = article.article_id) AS negratings   
        FROM article  
        LEFT JOIN rating_article ON article.article_id=rating_article.article_id
        LEFT JOIN users ON users.user_id=article.author
        WHERE (current_date-article.published_date) < 100 
        GROUP BY article.author,article.article_id,users.name
        ORDER BY article.published_date DESC;  ");
      $stmt->execute();
      return $stmt->fetchAll();
  }


  function getRecentArticlesByCategory($category)
  {
      global $conn;
      $stmt = $conn->prepare("SELECT article.* FROM article
      LEFT JOIN article_category 
      ON article.article_id = article_category.article_id
      LEFT JOIN subcategory
      ON article_category.sub_id = subcategory.sub_id
      WHERE subcategory.category = ?
      GROUP BY article.article_id
      ORDER BY article.published_date DESC;
      ");
      $stmt->execute(array($category));
      return $stmt->fetchAll();
  } 
  function getControversialArticles()
  {
      global $conn;
      $stmt = $conn->prepare(" SELECT article.*,users.name AS authorname, COALESCE(SUM(rating_article.score),0) AS sum_score,
      (SELECT COUNT(rating_article.score) 
        FROM rating_article
        WHERE  rating_article.score=1 AND rating_article.article_id = article.article_id) AS posratings,
        (SELECT COUNT(rating_article.score) 
        FROM rating_article
        WHERE rating_article.score=-1 AND rating_article.article_id = article.article_id) AS negratings  
        FROM article  
        LEFT JOIN rating_article ON article.article_id=rating_article.article_id
        LEFT JOIN users ON users.user_id=article.author
        WHERE (current_date-article.published_date) < 100  AND article.archived='false' 
        GROUP BY article.author,article.article_id,users.name
        ORDER BY article.sum_score DESC;  ");
      $stmt->execute();
      return $stmt->fetchAll();
  }
    function getPopularArticles()
  {
      global $conn;
      $stmt = $conn->prepare(" SELECT article.*,users.name AS authorname, COALESCE(SUM(rating_article.score),0) AS sum_score,
       (SELECT COUNT(rating_article.score) 
        FROM rating_article
        WHERE  rating_article.score=1 AND rating_article.article_id = article.article_id) AS posratings,
        (SELECT COUNT(rating_article.score) 
        FROM rating_article
        WHERE rating_article.score=-1 AND rating_article.article_id = article.article_id) AS negratings   
        FROM article  
        LEFT JOIN rating_article ON article.article_id=rating_article.article_id
        LEFT JOIN users ON users.user_id=article.author
        WHERE (current_date-article.published_date) < 100  AND article.archived='false' 
        GROUP BY article.author,article.article_id,users.name
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

   function updateArticle($article_id,$title,$lead,$content) 
  {
      global $conn; 
      $stmt = $conn->prepare("UPDATE article SET title=?, lead=?, content=? WHERE article_id=?");
      return $stmt->execute(array($title,$lead,$content,$article_id));
  }

  function dateDiffDays($mydate){
          $now = time(); // or your date as well
          $mydate = strtotime($mydate);
          $datediff = $now - $mydate;
          return floor($datediff / (60 * 60 * 24));
         }
?>