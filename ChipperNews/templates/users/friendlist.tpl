<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Friendships</title>
    <link rel="stylesheet" type="text/css" href="{$BASE_URL}css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="{$BASE_URL}js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="{$BASE_URL}css/styles-friendlist.css">
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <a class="navbar-brand" href="#">My Friends</a>
                <form class="navbar-form navbar-right">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Friend search">
                    </div>
                    <button type="submit" class="btn btn-default"><i class="fa fa-search" aria-hidden="false"></i></button>
                </form>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <div class="col-md-12 text-center">
        <ul class="nav nav-pills nav-justified center-pills">
            <li class="active"><a href="#pendingdiv">Pending Requests</a></li>
            <li><a href="#friendsdiv">Friends</a></li>
        </ul>
        <br>
        <br>
        <br>
    </div>
    
    <script>
    $('ul.nav.nav-pills li a').click(function() 
    {           
        $(this).parent().addClass('active').siblings().removeClass('active');           
    });
    </script>

    <div id="pendingdiv">
        <div class="container">
        {$counter=1}
            {foreach $pending as $pend}
            {if $counter eq 1}
            <div class="row">
             {$first = 0} 
             {/if}
             {if $counter mod 4==0 && $first neq 0}
             <div class="row mb-5">
             {/if}
           
              {if $pend.user1_username!=$smarty.session.username}
                <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <a href="{$BASE_URL}pages/users/view_profile.php?usr={$pend.user1_username}" style="color:black; text-decoration:none" >
                    <div class="card">
                        <img class="card-img-top" id="profilepic" alt="{$pend.user1_username}" src="{$pend.user1_username|getImage}">
                        <div class="card-block">
                            <h4 class="card-title">{$pend.user1_name}</h4>
                            <div class="meta">
                                Pending Approval
                            </div>
                            <div class="card-text">
                                {$pend.user1_bio}
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-secondary btn-success float-right btn-sm" onclick="acceptFriend()"><i class="fa fa-plus"></i> Accept</button>
                            <button class="btn btn-secondary btn-danger float-left btn-sm" onclick="rejectFriend()"><i class="fa fa-times"></i> Reject</button>
                        </div>
                    </div>
                    <br>
                    <br>
                </a>
            </div>
            {else}
                <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                    <div class="card">
                    <a href="{$BASE_URL}pages/users/view_profile.php?usr={$pend.user2_username}" style="color:black; text-decoration:none">
                        <img class="card-img-top" id="profilepic" alt="{$pend.user2_username}" src="{$pend.user2_username|getImage}">
                        <div class="card-block">
                            <h4 class="card-title">{$pend.user2_name}</h4>
                            <div class="meta">
                                Pending Approval
                            </div>
                            <div class="card-text">
                                {$pend.user2_bio}
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-secondary btn-success float-right btn-sm" onclick="acceptFriend()"><i class="fa fa-plus"></i> Accept</button>
                            <button class="btn btn-secondary btn-danger float-left btn-sm" onclick="rejectFriend()"><i class="fa fa-times"></i> Reject</button>
                        </div>
                    </div>
                    <br>
                    <br>
                    </a>
                </div>
            {/if}
                {if $counter mod 4==0}
                </div>
                {if $first eq 0}
                {$first=1}
                {/if}
            {/if}
            {$counter=$counter+1}
            {/foreach}
             </div>
         </div>
    </div>

<div id="friendsdiv">
    <div class="container">
        {$counter=1}
         
            {foreach $friends as $friend}
            {if $counter eq 1}
            <div class="row">
             {$first = 0} 
             {/if}
             {if $counter mod 4==0 && $first neq 0}
             <div class="row mb-5">
             {/if}
            {if $friend.user1_username!=$smarty.session.username}
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
            <a href="{$BASE_URL}pages/users/view_profile.php?usr={$friend.user1_username}" style="color:black; text-decoration:none" >
                <div class="card">
                    <img class="card-img-top" id="profilepic" alt="{$friend.user1_username}" src="{$friend.user1_username|getImage}">
                    <div class="card-block">
                        <h4 class="card-title">{$friend.user1_name}</h4>
                        <div class="meta">
                            Friends
                        </div>
                        <div class="card-text">
                            {$friend.user1_bio}
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-secondary float-right btn-sm"><i class="fa fa-minus"></i> Unfriend</button>
                    </div>
                </div>
             <br>
            <br>
            </a>
            </div>
        {else}
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card">
                <a href="{$BASE_URL}pages/users/view_profile.php?usr={$friend.user2_username}" style="color:black; text-decoration:none">
                    <img class="card-img-top" id="profilepic" alt="{$friend.user2_username}" src="{$friend.user2_username|getImage}">
                    <div class="card-block">
                        <h4 class="card-title">{$friend.user2_name}</h4>
                        <div class="meta">
                            <a href="#">Friends</a>
                        </div>
                        <div class="card-text">
                            {$friend.user2_bio}
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-secondary float-right btn-sm"><i class="fa fa-minus"></i> Unfriend</button>
                    </div>
                </div>
                <br>
                <br>
                </a>
                </div>


        {/if}
        {if $counter mod 4==0}
                </div>
                {if $first eq 0}
                {$first=1}
                {/if}
        {/if}           
        {$counter=$counter+1}
        {/foreach}
        <br>
    </div>
</div>
</body>

</html>