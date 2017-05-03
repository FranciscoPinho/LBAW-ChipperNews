<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chipper News</title>
    <link rel="stylesheet" type="text/css" href="{$BASE_URL}css/bootstrap.min.css">
    <!-- Optional Bootstrap theme -->
    <!--<link rel="stylesheet" href="css/bootstrap-theme.min.css">-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="{$BASE_URL}js/bootstrap.min.js"></script>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{$BASE_URL}css/bootstrap-social.css">
    <link rel="stylesheet" type="text/css" href="{$BASE_URL}css/styles-ricardo.css">
    <link href="https://fonts.googleapis.com/css?family=Lato|Lora|Playfair+Display:700" rel="stylesheet">

</head>
<body>
   
    <nav class="navbar navbar-default ">
        <h1 class="text-center "> Featured </h1>
    </nav>
    <div class="row " style="padding-left:4%;padding-right:4% ">
       {for $i=0 to 2}
            {$art = $articles[$i] }
            {$subcategories = fetchSubcategories($art.article_id)}
            <div class="col-sm-6 col-md-4 ">
                <a class="thumbnail " href="article.html" style="text-decoration:none ">
                    <img src="{$BASE_URL}images\articles\{$art.article_id}" alt="... ">
                    <div class="caption ">
                        <h3>{$art.title}</h3>
                        <p>{$art.lead}</p>
                        {foreach $subcategories as $subart}
                            {$sub = fetchSubcategory($subart.sub_id)}
                            <span class="label label-success ">{$sub.name}</span>
                        {/foreach}
                    </div>
                </a>
            </div>
        {/for}
    </div>

    <nav class="navbar navbar-default ">
        <h1 class="text-center " href="# "> News </h1>
    </nav>
    <div class="row " style="padding-left:4%;padding-right:4% ">
        {foreach $articles as $art}
            {$subcategories = fetchSubcategories($art.article_id)}
            <div class="col-6 col-lg-4 ">
            <h2>{$art.title}</h2>
            <p>{$art.lead}</p>
            {foreach $subcategories as $subart}
                {$sub = fetchSubcategory($subart.sub_id)}
                <span class="label label-success ">{$sub.name}</span>
            {/foreach}
            <p><a class="btn btn-secondary " href="article.html" role="button ">View details »</a></p>
            </div>
        {/foreach}
        
        <!--/span-->
        <div class="col-md-12 text-center" style="margin-bottom:10px">
            <button id="moreNews " name="singlebutton " class="btn btn-primary ">More News</button>
        </div>

    </div>


    </div>
</body>

</html>