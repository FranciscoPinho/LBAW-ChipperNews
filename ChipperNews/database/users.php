<?php
   function newReport($reportee,$reported,$description){
      global $conn; 
      $stmt = $conn->prepare("INSERT INTO report(reportee,reported,description) VALUES (?,?,?)");
      return $stmt->execute(array($reportee,$reported,$description));
  }
  function createUserTransaction($username, $name, $password, $local_id, $email, $bio, $birthdate,$interests) 
  {
    
    try{
        global $conn;
        $conn->beginTransaction();
        $stmt = $conn->prepare("INSERT INTO users(username,name,password,local_id,email,permission_level, bio, birthdate) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?) RETURNING user_id AS id");
        if($local_id=="null" && $birthdate=="")
        $stmt->execute(array($username, $name, password_hash($password,PASSWORD_DEFAULT), NULL, $email, '0', $bio, NULL));
        else if($local_id=="null" && $birthdate!="")
        $stmt->execute(array($username, $name, password_hash($password,PASSWORD_DEFAULT), NULL, $email, '0', $bio, $birthdate));
        else if($local_id!="null" && $birthdate=="")
        $stmt->execute(array($username, $name, password_hash($password,PASSWORD_DEFAULT), $local_id, $email, '0', $bio, NULL));
        else
        $stmt->execute(array($username, $name, password_hash($password,PASSWORD_DEFAULT), $local_id, $email, '0', $bio, $birthdate));
        $res=$stmt->fetchAll();
        foreach($interests as &$interest){
            $stmt = $conn->prepare("INSERT INTO user_interests(user_id,sub_id) 
            VALUES (?, ?)");
            $stmt->execute(array($res[0]['id'],$interest));
       }
      $conn->commit();
      return $res[0]['id'];
     }
    catch (PDOException $e) {
      $conn->rollBack();
      throw $e;
    }
  }
  
  function createCollabApplication($userID, $status, $motivation, $description, $refs, $assoc)
  {
	global $conn;
	$stmt = $conn->prepare("INSERT INTO collaborator_application(user_id, status, motivation, achievements, reference, associations) VALUES (?, ?, ?, ?, ?, ?)");
	$stmt->execute(array($userID, $status, $motivation, $description, $refs, $assoc));
	}
	
  function deleteApp($user_id){
    global $conn;
    $stmt = $conn->prepare("DELETE FROM collaborator_application WHERE user_id=?");
    return $stmt->execute(array($user_id));
  }
  
  function acceptApp($user_id){
    global $conn;
    $stmt = $conn->prepare("UPDATE users SET permission_level = 2 WHERE user_id=?");
    return $stmt->execute(array($user_id));
  }
  
  function getApplicationList()
  {
	global $conn;
    $stmt = $conn->prepare("SELECT * FROM collaborator_application");
    $stmt->execute();
    return $stmt->fetchAll();
  }
  
  function isLoginCorrect($username, $password) {
    global $conn;
    $stmt = $conn->prepare("SELECT password 
                            FROM users 
                            WHERE username = ? AND is_banned=FALSE AND is_deleted=FALSE");
    $stmt->execute(array($username));
    $retrieved_password = $stmt->fetchColumn();
    return password_verify($password,$retrieved_password);
  }

  function isUserBanned($username)
  {
    global $conn;
    $stmt = $conn->prepare("SELECT is_banned
                           FROM users
                           WHERE username = ?");
    $stmt->execute(array($username));
    $status = $stmt->fetchColumn();
    return $status;
  }
 
  function isUserDeleted($username)
  {
    global $conn;
    $stmt = $conn->prepare("SELECT is_deleted
                           FROM users
                           WHERE username = ?");
    $stmt->execute(array($username));
    $status = $stmt->fetchColumn();
    return $status;
  }

  function getCredentials($username){
    global $conn;
    $stmt = $conn->prepare("SELECT permission_level as permissions 
                            FROM users 
                            WHERE username = ?");
    $stmt->execute(array($username));
    $permission = $stmt->fetchColumn();
    return $permission;
  }

  function getUserID($username){
    global $conn;
    $stmt = $conn->prepare("SELECT user_id as id 
                            FROM users 
                            WHERE username = ?");
    $stmt->execute(array($username));
    $permission = $stmt->fetchColumn();
    return $permission;
  }

  function getUser($user_id)
  {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM users WHERE user_id = ?");
    $stmt->execute(array($user_id));
    return $stmt->fetchAll();
  }

  function getUserInfo($username){
    global $conn;
    $stmt = $conn->prepare("SELECT user_id,users.name AS name, permission_level,localization.name AS local,email,bio,birthdate,last_login,assoc_publications,hide_posthistory,hide_local,hide_birthdate,hide_email
                            FROM users 
                            LEFT JOIN localization ON users.local_id=localization.local_id
                            WHERE username = ?");
    $stmt->execute(array($username));
    $userinfo = $stmt->fetchAll();
    return $userinfo;
  }

  function getUserInterests($user_id){
    global $conn;
    $stmt = $conn->prepare("SELECT name, category
                            FROM subcategory 
                            LEFT JOIN user_interests ON subcategory.sub_id=user_interests.sub_id   
                            WHERE user_interests.user_id=?");
    $stmt->execute(array($user_id));
    return $stmt->fetchAll();
  }

  function ageCalc($birthdate)
  {
    if(!empty($birthdate))
    {
        $birthdate2 = new DateTime($birthdate);
        $today   = new DateTime('today');
        $age = $birthdate2->diff($today)->y;
        return $age;
    }
    else
    {
        return 0;
    }
  }

  function getImage($username)
  {
    $img = glob("../../images/users/{$username}.{jpg,jpeg,png}", GLOB_BRACE);
    return $img != false ? $img[0] : "http://lorempixel.com/300/300/";
  }

  function registerVisit($username)
  {
    global $conn;
	  $stmt = $conn->prepare("UPDATE users SET last_login=:last_login WHERE username=:username");
    $stmt->bindParam(':last_login', date("Y-m-d H:i:s"), PDO::PARAM_STR);
    $stmt->bindParam(':username', $_SESSION['username'], PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->fetchAll();
  }

  function setEmailPrivacy($user_id, $value)
  {
    global $conn;
	  $stmt = $conn->prepare("UPDATE users SET hide_email=:hide_email WHERE user_id=:user_id");
    $stmt->bindParam(':hide_email', $value, PDO::PARAM_BOOL);
    $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchAll();
  }

  function setLocalPrivacy($user_id, $value)
  {
    global $conn;
	  $stmt = $conn->prepare("UPDATE users SET hide_local=:hide_local WHERE user_id=:user_id");
    $stmt->bindParam(':hide_local', $value, PDO::PARAM_BOOL);
    $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchAll();
  }

  function setAgePrivacy($user_id, $value)
  {
    global $conn;
	  $stmt = $conn->prepare("UPDATE users SET hide_birthdate=:hide_birthdate WHERE user_id=:user_id");
    $stmt->bindParam(':hide_birthdate', $value, PDO::PARAM_BOOL);
    $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchAll();
  }

  function setPostHPrivacy($user_id, $value)
  {
    global $conn;
	  $stmt = $conn->prepare("UPDATE users SET hide_birthdate=:hide_birthdate WHERE user_id=:user_id");
    $stmt->bindParam(':hide_birthdate', $value, PDO::PARAM_BOOL);
    $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchAll();
  }

  function getAllUsers()
  {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM users");
    $stmt->execute();
    return $stmt->fetchAll();
  }

   function getAllCountries()
  {
    global $conn;
    $stmt = $conn->prepare("SELECT local_id as id, name as name FROM localization");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_KEY_PAIR);
  }

  function getNumberFriends($user_id)
  {
    global $conn;
    $stmt = $conn->prepare("SELECT * from friendship 
    WHERE user_id1=:user_id1 OR user_id2=:user_id2 AND accepted=TRUE");
    $stmt->bindParam(':user_id1', $user_id, PDO::PARAM_INT);
    $stmt->bindParam(':user_id2', $user_id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->rowCount();

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
        ORDER BY sum_score DESC
        LIMIT 1;");
      $stmt->bindParam(':author', $user_id, PDO::PARAM_INT);
      $stmt->execute();
      return $stmt->fetchAll()[0];
  }

 function editUser($user_id, $name, $email, $bio, $assoc_publications)
  {
    //points contribution rep
    //adicionar localidade e password
    global $conn;
    $query = "UPDATE users SET ";
    $columns = 0;
   
    if ($name!=null)
    {
      $query .= ($columns > 0 ? ', name = :name' : 'name = :name');
      $columns++;
    }
 
    if ($email!=null)
    {
      $query .= ($columns > 0 ? ', email = :email' : 'email = :email');
      $columns++;
    }
 
    if ($bio != null)
    {
      $query .= ($columns > 0 ? ', bio = :bio' : 'bio = :bio');
      $columns++;
    }

    if ($assoc_publications != null)
    {
      $query .= ($columns > 0 ? ', assoc_publications = :assoc_publications' : 'assoc_publications = :assoc_publications');
      $columns++;
    }
   
    $query .= ' WHERE user_id = :user_id';
   
    $stmt = $conn->prepare($query);
   
    $stmt->bindParam(":user_id", $user_id, PDO::PARAM_INT);
   
    if ($name != null)
    {
      $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    }
 
    if ($email != null)
    {
      $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    }
   
    if ($bio != null)
    {
      $stmt->bindParam(':bio', $bio, PDO::PARAM_STR);
    }

    if ($assoc_publications != null)
    {
      $stmt->bindParam(':assoc_publications', $assoc_publications, PDO::PARAM_STR);
    }
 
    $stmt->execute();
    return $stmt->rowCount();
  }
  
  function getCommentHistory($user_id)
  {
    global $conn;
    $stmt = $conn->prepare("SELECT title as article_title,comment.comment_id,comment.article_id,comment.content,to_char(comment.posted_date,'DD-MM-YY HH24:MI') AS posted_date, COALESCE(SUM(rating_comment.score),0) AS sum_score
    FROM comment 
    LEFT JOIN rating_comment 
    ON comment.comment_id=rating_comment.comment_id 
    LEFT JOIN article
    ON comment.article_id=article.article_id
    WHERE comment.user_id = ? 
    GROUP BY comment.comment_id,article.title
    ORDER BY posted_date");
    $stmt->execute(array($user_id));
    return $stmt->fetchAll();
  }
  function getMyArticlesRecent($user_id){
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
        WHERE article.author=?
        GROUP BY article.author,article.article_id,users.name
        ORDER BY article.published_date DESC;  ");
      $stmt->execute(array($user_id));
      return $stmt->fetchAll();
  }
  function getMyArticlesOldest($user_id){
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
        WHERE article.author=?
        GROUP BY article.author,article.article_id,users.name
        ORDER BY article.published_date ASC;  ");
      $stmt->execute(array($user_id));
      return $stmt->fetchAll();
  }
  function getMyArticlesControversial($user_id)
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
        WHERE article.author=?        
        GROUP BY article.author,article.article_id,users.name
        ORDER BY sum_score ASC;  ");
      $stmt->execute(array($user_id));
      return $stmt->fetchAll();
  }
  function getMyArticlesPopular($user_id)
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
        WHERE article.author=?        
        GROUP BY article.author,article.article_id,users.name
        ORDER BY sum_score DESC;  ");
       $stmt->execute(array($user_id));
      return $stmt->fetchAll();
  }

  function getMeNewsfeed($user_id){
      global $conn;
      $stmt = $conn->prepare("SELECT article.*,users.name AS authorname,user_interests.*,article_category.*,
                            (SELECT COUNT(rating_article.score) 
                              FROM rating_article
                              WHERE  rating_article.score=1 AND rating_article.article_id = article.article_id) AS posratings,
                              (SELECT COUNT(rating_article.score) 
                              FROM rating_article
                              WHERE rating_article.score=-1 AND rating_article.article_id = article.article_id) AS negratings  
                            FROM article
                            LEFT JOIN article_category ON article.article_id=article_category.article_id
                            LEFT JOIN user_interests ON article_category.sub_id=user_interests.sub_id 
                            LEFT JOIN users ON users.user_id=article.author
                            WHERE user_interests.user_id=?
                            GROUP BY article.article_id,user_interests.user_id,user_interests.sub_id,article_category.sub_id,article_category.artcat_id,users.name
                            ORDER BY article.published_date DESC;");
      $stmt->execute(array($user_id));
      return $stmt->fetchAll();   
  }

  function getFriendsNewsfeed($user_id){
    global $conn;
    $stmt = $conn->prepare("SELECT DISTINCT article.*,users.name AS authorname,
                              (SELECT COUNT(rating_article.score) 
                              FROM rating_article
                              WHERE  rating_article.score=1 AND rating_article.article_id = article.article_id) AS posratings,
                              (SELECT COUNT(rating_article.score) 
                              FROM rating_article
                              WHERE rating_article.score=-1 AND rating_article.article_id = article.article_id) AS negratings 
                              FROM article
                              LEFT JOIN rating_article ON article.article_id=rating_article.article_id
                              LEFT JOIN friendship ON (user_id1=? AND user_id2=rating_article.user_id) OR (user_id2=? AND user_id1=rating_article.user_id)  
                              LEFT JOIN users ON users.user_id=article.author
                              WHERE rating_article.score=1 AND (user_id1=? OR user_id2=?) 
                              GROUP BY article.article_id,rating_article.score,friendship.user_id1,friendship.user_id2,users.name
                              ORDER BY article.published_date DESC; ");
      $stmt->execute(array($user_id,$user_id,$user_id,$user_id));
      return $stmt->fetchAll();            
  }
  function friendsWhoLiked($user_id,$article_id){
    global $conn;
    $stmt = $conn->prepare("SELECT article.article_id,user_id1,user_id2,rating_article.score,
                              (SELECT username FROM users WHERE users.user_id=user_id2) as user1_name,
                              (SELECT username FROM users WHERE users.user_id=user_id1) as user2_name
                              FROM article
                              LEFT JOIN rating_article ON article.article_id=rating_article.article_id
                              LEFT JOIN friendship ON (user_id1=? AND user_id2=rating_article.user_id) OR (user_id2=? AND user_id1=rating_article.user_id)  
                              WHERE rating_article.score=1 AND (user_id1=? OR user_id2=?)  AND article.article_id=?
                              GROUP BY article.article_id,rating_article.score,friendship.user_id1,friendship.user_id2
                              ORDER BY article.published_date DESC; ");
      $stmt->execute(array($user_id,$user_id,$user_id,$user_id,$article_id));
      return $stmt->fetchAll();
  }
  function getMixedNewsfeed($user_id){
       global $conn;
    $stmt = $conn->prepare("(SELECT article.*,users.name AS authorname,
                            (SELECT COUNT(rating_article.score) 
                              FROM rating_article
                              WHERE  rating_article.score=1 AND rating_article.article_id = article.article_id) AS posratings,
                              (SELECT COUNT(rating_article.score) 
                              FROM rating_article
                              WHERE rating_article.score=-1 AND rating_article.article_id = article.article_id) AS negratings  
                            FROM article
                            LEFT JOIN article_category ON article.article_id=article_category.article_id
                            LEFT JOIN user_interests ON article_category.sub_id=user_interests.sub_id 
                            LEFT JOIN users ON users.user_id=article.author
                            WHERE user_interests.user_id=?
                            GROUP BY article.article_id,user_interests.user_id,user_interests.sub_id,article_category.sub_id,article_category.artcat_id,users.name
                            ORDER BY article.published_date DESC)
                              UNION
                              (SELECT article.*,users.name AS authorname,
                              (SELECT COUNT(rating_article.score) 
                              FROM rating_article
                              WHERE  rating_article.score=1 AND rating_article.article_id = article.article_id) AS posratings,
                              (SELECT COUNT(rating_article.score) 
                              FROM rating_article
                              WHERE rating_article.score=-1 AND rating_article.article_id = article.article_id) AS negratings 
                              FROM article
                              LEFT JOIN rating_article ON article.article_id=rating_article.article_id
                              LEFT JOIN friendship ON (user_id1=? AND user_id2=rating_article.user_id) OR (user_id2=? AND user_id1=rating_article.user_id)  
                              LEFT JOIN users ON users.user_id=article.author
                              WHERE rating_article.score=1 AND (user_id1=? OR user_id2=?) 
                              GROUP BY article.article_id,rating_article.score,friendship.user_id1,friendship.user_id2,users.name
                              ORDER BY article.published_date DESC); ");
      $stmt->execute(array($user_id,$user_id,$user_id,$user_id,$user_id));
      return $stmt->fetchAll();   
  }

  //useful for debugging
  function debug_to_console( $data ) {
    $output = $data;
    if ( is_array( $output ) )
        $output = implode( ',', $output);

    echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
 }
 
?>
