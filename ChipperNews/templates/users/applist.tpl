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
						<button type="button" class="btn btn-default">Delete</button>
						<button type="button" class="btn btn-primary">Accept</button> 
                    </div>
                </div>
            </div>
         {/foreach}
    </div>
</body>



</html>