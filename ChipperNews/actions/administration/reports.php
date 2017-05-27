<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/administration.php');
  include_once($BASE_DIR .'database/users.php');
  include_once($BASE_DIR .'database/reports.php');

  $operation = $_POST['operation'];
  $reports = $_POST['reports'];

  foreach ($reports as $report) {
    $r = getReport($report);
    $reportedID = $r.reported;

    switch($operation)
    {
      case "ban": banUser($eportedID);clearReport($report);break;
      case "clear": clearReport($report);break;
      default: break;
    }
  }
  debug_to_console($reports);
  header("Location: $BASE_URL" . 'pages/admin/reportPanel.php');
?>
