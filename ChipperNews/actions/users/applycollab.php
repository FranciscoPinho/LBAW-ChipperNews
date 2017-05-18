<?php
	include_once('../../config/init.php');
	include_once($BASE_DIR .'database/users.php');
	
	
	if(!$_POST['description'] || !$_POST['motivation']) {
		$_SESSION['error_messages'][] = 'Fill out all the mandatory fields';
		$_SESSION['form_values'] = $_POST;
		header("Location: $BASE_URL" . 'pages/users/applycollab.php');
		exit;
	}
	$userID = $_SESSION['user_id'];	
	$description = strip_tags($_POST['description']);
	$motivation = strip_tags($_POST['motivation']);
	$refs = strip_tags($_POST['refs']);
	$assoc = strip_tags($_POST['assoc']);
	debug_to_console ("Teste");	
	try {
	createCollabApplication($userID, $description, $motivation, $refs, $assoc); 
	} catch (PDOException $e) {
		$_SESSION['form_values'] = $_POST;
		header("Location: $BASE_URL" . 'pages/users/applycollab.php');
		exit;
	}
	$_SESSION['success_messages'][] = 'Apply form sent successfully';
	header("Location: $BASE_URL");
	?>