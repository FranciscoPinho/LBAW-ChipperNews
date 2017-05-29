<?php

 function countMessages($sender_id,$receiver_id){
    global $conn; 
    $stmt = $conn->prepare("SELECT COUNT(*) FROM message WHERE sender_id = ? AND receiver_id = ?");
    $stmt->execute(array($sender_id,$receiver_id));
    return $stmt->fetchAll();
}
 function countUnreadMessages($receiver_id){
    global $conn; 
    $stmt = $conn->prepare("SELECT COUNT(*) FROM message WHERE receiver_id = ? AND is_read = false");
    $stmt->execute(array($receiver_id));
    return $stmt->fetchAll();
}


  function getReceivedMessages($user_id,$type)
  {
    global $conn;
    $stmt = $conn->prepare("SELECT message.*,users.username as username
    FROM message
    LEFT JOIN users ON message.sender_id=users.user_id
    WHERE receiver_id=? AND is_read=".$type.";");
    $stmt->execute(array($user_id));
    return $stmt->fetchAll(); 
  }

   function getAllReceivedMessages($user_id)
  {
    global $conn;
    $stmt = $conn->prepare("SELECT message.*,users.username as username
    FROM message
    LEFT JOIN users ON message.sender_id=users.user_id
    WHERE receiver_id=?;");
    $stmt->execute(array($user_id));
    return $stmt->fetchAll(); 
  }
  function getSentMessages($user_id,$type)
  {
    global $conn;
    $stmt = $conn->prepare("SELECT message.*,users.username as username
    FROM message
    LEFT JOIN users ON message.receiver_id=users.user_id
    WHERE sender_id=? AND is_read=".$type.";");
    $stmt->execute(array($user_id));
    return $stmt->fetchAll(); 
  }
  
  function sendMessage($sender,$receiver,$content){
      global $conn; 
      $stmt = $conn->prepare("INSERT INTO message(sender_id,receiver_id,content) VALUES (?,?,?)");
      return $stmt->execute(array($sender,$receiver,$content));
  }
?>