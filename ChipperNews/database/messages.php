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
?>