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
