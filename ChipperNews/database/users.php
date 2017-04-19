<?php
  
  function createUser($realname, $username, $password) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO users VALUES (?, ?, ?)");
    $stmt->execute(array($username, $realname,  password_hash($password ,PASSWORD_DEFAULT)));
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

  function getAllUsers()
  {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM users");
    $stmt->execute();
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
