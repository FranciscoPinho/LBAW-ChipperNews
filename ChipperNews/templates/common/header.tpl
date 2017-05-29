<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{$BASE_URL}css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://www.w3schools.com/lib/w3data.js"></script>
    <link rel="stylesheet" type="text/css" href="{$BASE_URL}css/styles-header.css">
    <script src="{$BASE_URL}js/bootstrap.min.js"></script>
    <script src="{$BASE_URL}js/pollingMessageCount.js"></script>
    <script src="{$BASE_URL}js/main.js"></script>
    <!-- Animals graphic by -->
    <!--a href="http://www.flaticon.com/authors/zlatko-najdenovski">Zlatko Najdenovski</a> from <a href="http://www.flaticon.com/">Flaticon</a> is licensed under <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0">CC BY 3.0</a>. Made with <a href="http://logomakr.com" title="Logo Maker">Logo Maker</a>-->
    <!-- Optional Bootstrap theme -->
    <!--<link rel="stylesheet" href="css/bootstrap-theme.min.css">-->
    <span class="base_url" id="base_url" hidden>{$BASE_URL}</span>
</head>

<body>

   <div class="jumbotron">
            <a href="{$BASE_URL}pages/search/frontpage.php">
            <img class="img-responsive" src="{$BASE_URL}images/assets/logo_navigation.png" alt"logo">
		    </a>
            <br>
           <ul class="nav navbar-nav nabvar-left">
                    {if $USERNAME}
                    <li><a href="{$BASE_URL}actions/users/logout.php">Logout</a></li>
                     {if isset($profile)}
                     <li style="background:white"><a href="{$BASE_URL}pages/users/profile.php">Profile</a></li>
                     {else}
                    <li><a href="{$BASE_URL}pages/users/profile.php">Profile</a></li>
                    {/if}
                    {if isset($feed)}
                       <li style="background:white"><a href="{$BASE_URL}pages/articles/newsfeed.php">Feed</a></li>
                    {else}
                       <li><a href="{$BASE_URL}pages/users/newsfeed.php">Feed</a></li>
                     {/if}
                  
					{if $smarty.session.permission gte 2}
                    {if isset($apps)}
                     <li style="background:white"><a href="{$BASE_URL}pages/users/reviewapps.php">Review Applications</a></li>
                    {else}
                     <li><a href="{$BASE_URL}pages/users/reviewapps.php">Review Applications</a></li>
                     {/if}
                     {if isset($reportcenter)}
                     <li style="background:white"><a href="{$BASE_URL}pages/admin/reportPanel.php">Report Center</a></li>
                    {else}
                     <li><a href="{$BASE_URL}pages/admin/reportPanel.php">Report Center</a></li>
                     {/if}
                     {/if} 
                
                     {if $smarty.session.permission==3}
                     {if isset($adminpanel)}
                     <li style="background:white"><a href="{$BASE_URL}pages/admin/sysadmin.php">Admin Panel</a></li>
                    {else}
                    <li><a href="{$BASE_URL}pages/admin/sysadmin.php">Admin Panel</a></li>
                     {/if}
                     {/if}
                     {if isset($inbox)}
                     <li style="background:white"><a href="{$BASE_URL}pages/users/inbox.php"><i class="fa fa-envelope-o fa-fw"></i><span class="label label-info pull-right inbox-notification" id="unreadMessages"></span></a></li>
                     {else}
                     <li><a href="{$BASE_URL}pages/users/inbox.php"><i class="fa fa-envelope-o fa-fw"></i><span class="label label-info pull-right inbox-notification" id="unreadMessages"></span></a></li>
                     {/if}
                    {else}
                     <li><a data-toggle="modal" data-target="#myModal" href="">Login</a></li>     
                     <li><a href="{$BASE_URL}pages/users/register.php">Register</a></li>
                    {/if}    
                </ul> 
                <ul class="nav navbar-nav navbar-center">
               <form class="navbar-form navbar-right" action="{$BASE_URL}pages/search/results.php" enctype="multipart/form-data" method="post" data-lang="en_GB">
                        <div class="form-group has-feedback">
                            <input type="text" style="border-radius:16px;color:#C5C9A4" class="form-control" placeholder="Search" name="query">
                            <span class="glyphicon glyphicon-search form-control-feedback"></span>
                        </div>
                 </form>  
                 </ul>
               
    </div>
    <br>
    <br>
</body>

</html>