<?php
  
  function createUser($username, $name, $password, $local_id, $email, $bio, $birthdate) 
  {

    global $conn;
    $stmt = $conn->prepare("INSERT INTO users(username,name,password,local_id,email,permission_level, bio, birthdate) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute(array($username, $name, password_hash($password,PASSWORD_DEFAULT), $local_id, $email, '0', $bio, $birthdate));
  }
  
  function createCollabApplication($fullname, $description, $motivation, $refs, $assoc)
  {
	 
	global $conn;
	$stmt = $conn->prepare("INSERT INTO collaborator_application(applicantname, achievements, motivation, references, associations) VALUES (?, ?, ?, ?, ?)");
	$stmt->execute(array($fullname, $description, $motivation, $refs, $assoc));
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
  function getUserInfo($username){
    global $conn;
    $stmt = $conn->prepare("SELECT user_id,users.name,permission_level,localization.name AS local,email,bio,birthdate,last_login,assoc_publications,hide_posthistory,hide_local,hide_birthdate,hide_email
                            FROM users 
                            LEFT JOIN localization ON users.local_id=localization.local_id
                            WHERE username = ?");
    $stmt->execute(array($username));
    $userinfo = $stmt->fetchAll();
    return $userinfo;
  }
  function getUserInterests($username){
    global $conn;
    $stmt = $conn->prepare("SELECT name
                            FROM subcategory 
                            LEFT JOIN user_interests ON subcategory.sub_id=user_interests.sub_id   
                            WHERE USER.interests.user_id=?");
    $stmt->execute(array($username));
    $userinterests = $stmt->fetchColumn();
    return $userinterests;
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

  function getCurrName()
  {

  }

 function editUser($user_id, $name, $email, $bio, $assoc_publications)
  {
    //convert to smarty
    //botoes e settings tab
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

  //useful for debugging
  function debug_to_console( $data ) {
    $output = $data;
    if ( is_array( $output ) )
        $output = implode( ',', $output);

    echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
 }
 
?>
