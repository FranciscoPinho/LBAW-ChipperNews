<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Header</title>
    <link rel="stylesheet" type="text/css" href="{$BASE_URL}css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://www.w3schools.com/lib/w3data.js"></script>
    <link rel="stylesheet" type="text/css" href="{$BASE_URL}css/styles-header.css">
    <script src="{$BASE_URL}js/bootstrap.min.js"></script>
    <script src="{$BASE_URL}js/main.js"></script>
    <!-- Animals graphic by -->
    <!--a href="http://www.flaticon.com/authors/zlatko-najdenovski">Zlatko Najdenovski</a> from <a href="http://www.flaticon.com/">Flaticon</a> is licensed under <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0">CC BY 3.0</a>. Made with <a href="http://logomakr.com" title="Logo Maker">Logo Maker</a>-->
    <!-- Optional Bootstrap theme -->
    <!--<link rel="stylesheet" href="css/bootstrap-theme.min.css">-->
</head>

<body>
   <div class="jumbotron">
            <a href="{$BASE_URL}pages/search/frontpage.php">
            <img class="img-responsive" src="{$BASE_URL}images/assets/logo_navigation.png" alt"logo">
		    </a>
           <ul class="nav navbar-nav">
                    <li><a class="categorySearch" cat="1" href="#">Programming</a></li>
                    <li><a class="categorySearch" cat="2" href="#">Hardware</a></li>
                    <li><a class="categorySearch" cat="3" href="#">Software</a></li>
                    <li><a class="categorySearch" cat="4" href="#">Industry</a></li>
                    <li><a class="categorySearch" cat="5" href="#">Technology</a></li>
                </ul> 
    </div>
    <nav class="navbar navbar-default headernav">
        <div class="container-fluid">
            <div class="navbar-header">
              
                <ul class="nav navbar-nav navbar-right">
                    {if $USERNAME}
                    <li><a href="{$BASE_URL}actions/users/logout.php">Logout</a></li>
                    <li><a href="{$BASE_URL}pages/users/profile.php">Profile</a></li>
                    <li><a href="{$BASE_URL}pages/users/newsfeed.php">Feed</a></li>
					{if $smarty.session.permission>=2}
					<li><a href="{$BASE_URL}pages/users/reviewapps.php">Review Applications</a></li>
                      {if isset($reportcenter)}
                     <li style="background:white"><a href="{$BASE_URL}pages/admin/reportPanel.php">Report Center</a></li>
                    {else}
                     <li><a href="{$BASE_URL}pages/admin/reportPanel.php">Report Center</a></li>
                     {/if}
					{/if}
                     {if $smarty.session.permission==3}
                    <li><a href="{$BASE_URL}pages/admin/sysadmin.php">Admin Panel</a></li>
                     {/if}
                    {else}
                     <li><a data-toggle="modal" data-target="#myModal" href="">Login</a></li>     
                     <li><a href="{$BASE_URL}pages/users/register.php">Register</a></li>
                    {/if}          
                </ul>          
            </div>
            <div class="navbar-right">
                
               <form class="navbar-form navbar-right" action="{$BASE_URL}pages/search/results.php" enctype="multipart/form-data" method="post" data-lang="en_GB">
                        <div class="form-group has-feedback" >
                            <input type="text" style="border-radius:16px;color:#C5C9A4" class="form-control" placeholder="Search" name="query">
                            <span class="glyphicon glyphicon-search form-control-feedback"></span>
                        </div>

                 </form>
            </div>
            </div>     <!-- /.container-fluid -->
                            <div id="error_messages">
                            {foreach $ERROR_MESSAGES as $error}
                            <div class="error">{$error}<a class="close" href="#">X</a></div>
                            {/foreach}
                            </div>
                            <div id="success_messages">
                            {foreach $SUCCESS_MESSAGES as $success}
                            <div class="success">{$success}<a class="close" href="#">X</a></div>
                            {/foreach}
                            </div>
    </nav>
</body>

</html>