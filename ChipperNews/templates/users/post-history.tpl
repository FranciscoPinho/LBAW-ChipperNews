<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Post History</title>
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
            <h1 class="nf"> My Comment History </h1>
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle pull-right" type="button" data-toggle="dropdown" id="dropdownbutton"><span class="droptext">Newest</span>
		<span class="caret caret-reversed"></span> 
		</button>
                <ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="menu1">
                    <li><a href="#" onclick="changeDropdown('Newest')">Newest</a></li>
                    <li><a href="#" onclick="changeDropdown('Oldest')">Oldest</a></li>
                    <li><a href="#" onclick="changeDropdown('Popular')">Popular</a></li>
                    <li><a href="#" onclick="changeDropdown('Controversial')">Controversial</a></li>
                </ul>
            </div>
        </div>
         {foreach $comments as $comment}
            <div class="container comment-snip" id="">
                <div class="thumbcontent">
                    <div class="container image">
                        <img src="{$BASE_URL}images\articles\{$comment.article_id}" alt="..." style=" width: 100%; height: auto;">
                    </div>
                    <h2 id="headline"><a href="{$BASE_URL}pages\articles\article?id={$comment.article_id}" style="color:black" id="articleAnchor">{$comment.article_title}</a></h3>
                </div>
                <div class="comment">
                    <div class="mycomment">
                        <h6>By <a style="color:black; font-style:italic">{$user}</a> {$comment.posted_date}</h6>
                        <p>{$comment.content}</p>
                        {if $comment.sum_score >= 0}
                            <h5>Votes: <span class="posrating" style="font-weight:bold;color:#357266">+{$comment.sum_score}</span></h5>
                        {else}
                            <h5>Votes: <span class="negrating" style="font-weight:bold;color:#f11066">{$comment.sum_score}</span></h5>
                        {/if}
                    </div>
                </div>
            </div>
         {/foreach}
    </div>
</body>



</html>