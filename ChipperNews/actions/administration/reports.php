<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/administration.php');
  include_once($BASE_DIR .'database/users.php');
  include_once($BASE_DIR .'database/reports.php');

  $operation = $_POST['operation'];
  $reports = $_POST['reports'];
  foreach ($reports as $report) {
    $reported = getReported($report);
    $reportedID = $reported[0];
    debug_to_console($reportedID);
    switch($operation)
    {
      case "ban": banUser($reportedID);break;
      case "clear": clearReport($report);break;
      default: break;
    }
  }
  function fetchUser($id)
  {
     $users = getUser($id);
     return $users[0];
  }
  //debug_to_console($reports);
  header("Location: $BASE_URL" . 'pages/admin/reportPanel.php');
?>
