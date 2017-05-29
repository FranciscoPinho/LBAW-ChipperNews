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
    <span class="base_url" id="base_url" hidden>{$BASE_URL}</span>
    <link rel="stylesheet" type="text/css" href="{$BASE_URL}css/styles-friendlist.css">
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <a class="navbar-brand" href="#">My Friends</a>
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

    var base_url = $("#base_url").text();
    function acceptFriend(userid) 
    {
        $.ajax({
            type: "POST",
            url: base_url + 'actions/users/accept.php',
            data: "user_accept="+userid,
            success: reload
        });
    }

    function delFriend(userid) 
    {
        $.ajax({
            type: "POST",
            url: base_url + 'actions/users/unfriend_deny.php',
            data: " user_del="+userid,
            success:reload
        });
    }
    
    function reload(data)
    {
			location.reload();
	}
    </script>


    <div id="pendingdiv">
        <div class="container">
        {if sizeof($pending)==0}
        <h4> No current pending requests :(</h4>
        {/if}
        {$counter=1}
            {foreach $pending as $pend}
            {if $pend.who_sent neq $smarty.session.user_id}
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
                        </a>
                        <div class="card-footer">
                            <button class="btn btn-secondary btn-success float-right btn-sm" onclick="acceptFriend({$pend.user_id1})"><i class="fa fa-plus"></i> Accept</button>
                            <button class="btn btn-secondary btn-danger float-left btn-sm" onclick="delFriend({$pend.user_id1})"><i class="fa fa-times"></i> Reject</button>
                        </div>
                    </div>
                    <br>
                    <br>
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
                        </a>
                        <div class="card-footer">
                            <button class="btn btn-secondary btn-success float-right btn-sm" onclick="acceptFriend({$pend.user_id2})"><i class="fa fa-plus"></i> Accept</button>
                            <button class="btn btn-secondary btn-danger float-left btn-sm" onclick="delFriend({$pend.user_id2})"><i class="fa fa-times"></i> Reject</button>
                        </div>
                    </div>
                    <br>
                    <br>
                </div>
            {/if}
                {if $counter mod 4==0}
                </div>
                {if $first eq 0}
                {$first=1}
                {/if}
                {/if}
                {$counter=$counter+1}
            {/if}
            {/foreach}
             </div>
         </div>
    </div>

<div id="friendsdiv">
    <div class="progress progress-striped active">
        <div class="progress-bar progress-bar-success" style="width: 100%"></div>
    </div>
    <div class="container">
    {if sizeof($friends)==0}
        <p> Forever alone TT_TT </p>
    {/if}
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
                    </a>
                    <div class="card-footer">
                        <button class="btn btn-secondary float-right btn-sm" onclick="delFriend({$friend.user_id1})"><i class="fa fa-minus"></i> Unfriend</button>
                    </div>
                </div>
             <br>
            <br>
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
                    </a>
                    <div class="card-footer">
                        <button class="btn btn-secondary float-right btn-sm" onclick="delFriend({$friend.user_id2})"><i class="fa fa-minus"></i> Unfriend</button>
                    </div>
                </div>
                <br>
                <br>
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