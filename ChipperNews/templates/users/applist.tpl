<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Applications Review</title>
    <link rel="stylesheet" type="text/css" href="{$BASE_URL}css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{$BASE_URL}css/styles-posthistory.css">
    <link rel="stylesheet" type="text/css" href="{$BASE_URL}css/styles-header.css">
    <link href="https://fonts.googleapis.com/css?family=Lato|Lora|Playfair+Display:700" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://www.w3schools.com/lib/w3data.js"></script>
	<span class="base_url" id="base_url" hidden>{$BASE_URL}</span>
    <script src="{$BASE_URL}js/bootstrap.min.js"></script>
    <script src="{$BASE_URL}js/main.js"></script>
    <!-- Optional Bootstrap theme -->
    <!--<link rel="stylesheet" href="css/bootstrap-theme.min.css">-->
</head>

<body>

    <div class=allcontent>
        <div id="bg">
            <img class="bg" src="{$BASE_URL}images/assets/circuit.jpg" alt="">
        </div>


        <div class="container-fluid" id="postheader">
            <h1 class="nf"> Applications Review </h1>
        </div>
         {foreach $apps as $app}
            <div class="container comment-snip" id="">
                <div class="app">
                    <div class="mycomment">
						
                        <h6>(here will appeat the name but for now ID) By <a style="color:black; font-style:italic">{$app.user_id}</a></h6>
                        <p>Achievements: {$app.achievements}</p>
						<p>Motivation: {$app.motivation}</p>
						<p>References: {$app.reference}</p>
						<button type="button" class="btn btn-default" onclick="deleteApp('{$app.app_id}')">Delete</button>
						<button type="button" class="btn btn-primary" onclick="acceptApp('{$app.user_id}')">Accept</button> 
                    </div>
                </div>
            </div>
         {/foreach}
    </div>
	
<script>
function deleteApp(app_id){
                var base_url = $("#base_url").text();
                return $.ajax({
                    type: "POST",
                    url: base_url + "actions/users/delete_collabapp.php",
                    data: "app_id=" + encodeURI(app_id),
                    success: reload
                });
		}
		
function acceptApp(user_id){
                var base_url = $("#base_url").text();
                return $.ajax({
                    type: "POST",
                    url: base_url + "actions/users/accept_collabapp.php",
                    data: "user_id=" + encodeURI(user_id),
                    success: reload
                });
		}
		
function reload(data){
			location.reload();
		}
</script>
</body>



</html>