<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php'); 

  if (!$_SESSION['username'] || !$_SESSION['user_id']) {
    header('Location: ' . $BASE_URL);
    exit;
  }
  
  $countries=getAllCountries();
  $user=$_SESSION['userinfo'];
  $smarty->assign('user', $user);
  $smarty->assign('username', $_SESSION['username']);

  function fetchInterests($user_id)
  {
     $subcategories = getUserInterests($user_id);
     return $subcategories;
  }

  function getMostPopularArticle($user_id)
  {
      global $conn;
      $stmt = $conn->prepare("SELECT article.*, COALESCE(SUM(rating_article.score),0) AS sum_score,
       (SELECT COUNT(rating_article.score) 
        FROM rating_article
        WHERE  rating_article.score=1 AND rating_article.article_id = article.article_id) AS posratings,
        (SELECT COUNT(rating_article.score) 
        FROM rating_article
        WHERE rating_article.score=-1 AND rating_article.article_id = article.article_id) AS negratings   
        FROM article  
        LEFT JOIN rating_article ON article.article_id=rating_article.article_id   
        WHERE article.author=:author   
        GROUP BY article.author,article.article_id 
        LIMIT 1;");
      $stmt->bindParam(':author', $user_id, PDO::PARAM_INT);
      $stmt->execute();
      return $stmt->fetchAll()[0];
  }
  
  $smarty->assign('title', 'Profile');
  $smarty->assign('countries',$countries);
  $smarty->display('common/header.tpl');
  $smarty->display('users/profile.tpl');
  $smarty->display('common/footer.tpl');
?>