<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{$BASE_URL}css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="{$BASE_URL}css/styles-header.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://www.w3schools.com/lib/w3data.js"></script>	
	<script src="{$BASE_URL}js/bootstrap.min.js"></script>
    <!-- Optional Bootstrap theme -->
    <!--<link rel="stylesheet" href="css/bootstrap-theme.min.css">-->
</head>
<body>
     <div class="jumbotron">
          
           <ul class="nav navbar-nav">
					{if $USERNAME}
					{if $smarty.session.permission==0}
                    <li><a href="{$BASE_URL}pages/users/applycollab.php">Become a Collaborator</a></li>
					{/if}
					{/if}
                    <li><a href="{$BASE_URL}pages/users/help.php">Help</a></li>
                    <li><a href="{$BASE_URL}pages/admin/contactinfo.php">Contact Info</a></li>
                </ul>
    </div>
</body>
</html>