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
                            WHERE username = ?");
    $stmt->execute(array($username));
    $retrieved_password = $stmt->fetchColumn();
    return password_verify($password,$retrieved_password);
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

  function editUser($user_id, $username, $name, $local_id, $email, $bio, $birthdate)
  {
    //usar concatenacao strings?

  }

  //useful for debugging
  function debug_to_console( $data ) {
    $output = $data;
    if ( is_array( $output ) )
        $output = implode( ',', $output);

    echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
 }
 
?>
