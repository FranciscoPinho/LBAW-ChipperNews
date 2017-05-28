<?php
function getReports(){
    global $conn; 
    $stmt = $conn->prepare("SELECT * FROM report");
    $stmt->execute();
    return $stmt->fetchAll();
}
function clearReport($report_id){
    global $conn; 
    $stmt = $conn->prepare("DELETE FROM report WHERE report_id = ?");
    $stmt->execute(array($report_id));
    return $stmt->fetchAll();
}
function getReport($report_id){
    global $conn; 
    $stmt = $conn->prepare("SELECT * FROM report WHERE report_id = ?");
    $stmt->execute(array($report_id));
    return $stmt->fetchAll();
}
function getReported($report_id){
    global $conn; 
    $stmt = $conn->prepare("SELECT reported FROM report WHERE report_id = ?");
    $stmt->execute(array($report_id));
    return $stmt->fetchAll();
}
?>