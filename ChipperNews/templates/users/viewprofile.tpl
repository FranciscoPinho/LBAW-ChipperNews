<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{$BASE_URL}css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{$BASE_URL}css/styles-profile.css">
    <link href="https://fonts.googleapis.com/css?family=Lora|Oswald|Slabo+27px" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://www.w3schools.com/lib/w3data.js"></script>
    <script src="{$BASE_URL}js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script> 
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <link href="{$BASE_URL}/css/bootstrap-editable.css" rel="stylesheet">
    <script src="{$BASE_URL}/js/bootstrap-editable.js"></script>
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <span class="base_url" id="base_url" hidden>{$BASE_URL}</span>
    <!-- Optional Bootstrap theme -->
    <!--<link rel="stylesheet" href="css/bootstrap-theme.min.css">-->
</head>

<body>
    <div class="container">
        <div id="bg">
            <img class="bg" src="{$BASE_URL}images/assets/circuit.jpg" alt="">
        </div>
        <div class="row">
            <div class="col-sm-3">
                <ul class="nav nav-pills nav-stacked nav-email shadow mb-20">
                    <li>
                        <a href="{$BASE_URL}pages/users/chatbox.php">
                            <i class="fa fa-envelope-o fa-fw"></i> Inbox <span class="label label-info pull-right inbox-notification"></span>
                        </a>
                    </li>
                    <li>
                        <a href="{$BASE_URL}pages/users/posthistory.php"><i class="fa fa-book fa-fw"></i> Comment History </a>
                    </li>
                    <li>
                        <a href="{$BASE_URL}pages/users/friendlist.php">
                            <i class="fa fa-users fa-fw"></i> Friends <span class="label label-info pull-right inbox-notification">{$user.user_id|getNumberFriends}</span>
                        </a>
                    </li>
                </ul>
                <!-- /.nav -->

                {if $user.permission_level >= '1'}
                <h5 class="nav-email-subtitle" style="color:black"><b>More Actions</b></h5>
                <ul class="nav nav-pills nav-stacked nav-email mb-20 rounded shadow">
                    <li>
                        <a href="{$BASE_URL}pages/articles/newarticle.php">
                            <i class="fa fa-file-text-o fa-fw"></i> Write New Article
                        </a>
                    </li>
                    <li>
                        <a href="{$BASE_URL}pages/users/myarticles.php">
                            <i class="fa fa-file-text-o fa-fw"></i> Article History <span class="label label-info pull-right inbox-notification"></span>
                        </a>
                    </li>
                </ul>
                {/if}
                <!-- /.nav -->
            </div>

            <div class="col-sm-9">
                <div class="panel panel-default">
                    <div class="panel-heading resume-heading">
                        <div class="col-lg-12">
                            <h3> {$username} </h3>
                            <h5> {$user.name} <small> some rep points? </small> </h5>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-xs-12 col-sm-4">
                                    <figure>
                                        <img class="img-responsive" id="profilepic" alt="{$username}" src="{$username|getImage}">
                                    </figure>
                                    <div class="text-content">
                                        <div class="col-lg-12">
                                            <div class="col-xs-12 col-sm-12">
                                                <p>
                                                    <ul class="list-unstyled">
                                                    <li><i class="fa fa-certificate fa-fw" aria-hidden="false"></i>
                                                    {if $user.permission_level eq '0'}Reader
                                                    {elseif $user.permission_level eq '1'}Collaborator
                                                    {elseif $user.permission_level eq '2'}Moderator
                                                    {else}Administrator
                                                    {/if}
                                                    <li><i class="fa fa-envelope fa-fw" aria-hidden="false"></i> {$user.email}</li>
                                                    <li><i class="fa fa-map-marker fa-fw" aria-hidden="false"></i> {$user.local}</li>
                                                    {if ((ageCalc($user.birthdate) neq 0) && !($user.hide_birthdate))}
                                                        <li><i class="fa fa-birthday-cake fa-fw" aria-hidden="false"></i>
                                                        {ageCalc($user.birthdate)} years old
                                                    {/if}</li>
                                                    </ul>

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-8">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#info" data-toggle="tab">Info</a></li>
                                        <li><a href="#interests" data-toggle="tab">Interests</a></li>
                                        <li><a href="#settings" data-toggle="tab">Settings <i class="fa fa-cogs"></i></a></li>
                                        <li><a href="#security" data-toggle="tab">Security <i class="fa fa-key"></i></a></li>
                                    </ul>
                                    <div id="myTabContent" class="tab-content">
                                        <div class="tab-pane fade active in" id="info">
                                            <ul class="list-group">
                                                <li class="list-group-item"><b>Full name </b><a href="#" data-name="fname" id="fullname" data-type="text" data-pk="1" data-title="Full name ">{$user.name}  </a><i class="fa fa-pencil"></i></li>
                                                <li class="list-group-item"><b>Bio </b><a href="#" id="bio" data-name="bio" data-type="textarea" data-pk="1" data-title="Bio " title="Edit">{$user.bio} </a><i class="fa fa-pencil"></i></li>
                                                <li class="list-group-item"><b>Last logged in </b> {$user.last_login}</li>
                                                <li class="list-group-item"><b>Associated newspapers or publications </b><a href="#" id="assoc" data-name="assocpub" data-type="textarea" data-pk="1" data-title="Associated newspapers or publications" title="Edit">{$user.assoc_publications} </a><i id="pencil" class="fa fa-pencil"></i></li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane fade" id="interests">
                                            <p>
                                            {$interests = fetchInterests($user.user_id)}
                                            {foreach $interests as $interest}
                                                {if $interest.category==1}
                                                    <span class="label label-primary ">{$interest.name}</span>
                                                {/if}
                                                {if $interest.category==2}
                                                    <span class="label label-warning ">{$interest.name}</span>
                                                {/if}
                                                {if $interest.category==3}
                                                    <span class="label label-info ">{$interest.name}</span>
                                                {/if}
                                                {if $interest.category==4}
                                                    <span class="label label-default ">{$interest.name}</span>
                                                {/if}
                                                {if $interest.category==5}
                                                    <span class="label label-danger ">{$interest.name}</span>
                                                {/if}
                                                {if $interest.category==6}
                                                    <span class="label label-success ">{$interest.name}</span>
                                                {/if}     
                                            {/foreach}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                <div class="bs-callout bs-callout-danger">
                    {$article = fetchMostPopularArticle($user.user_id)}
                    {if $article neq null}
                    <h4>Most Popular Contribution</h4>
                    <p>
                        <small> <i> from </i></small><a href="{$BASE_URL}pages/articles/article.php?id={$article.article_id}"><b>{$article.title}</b></a>
                        <div class="highlight">
                            <i class="fa fa-quote-left" aria-hidden="false"></i> {$article.lead} <i class="fa fa-quote-right" aria-hidden="false"></i>
                        </div>
                        <br>
                        <div id="ratings3">
                            <span id="postext3" style="color:#357266">{$article.posratings}</span>
                            <button type="button" class="btn btn-default btn-circle btnlike">
					<img src="{$BASE_URL}images/assets/chipart1.png" alt="" style="width:100%;height:100%;"> 
				</button>
                            <span id="negtext3" style="color:#f11066">{$article.negratings}</span>
                            <button type="button" class="btn btn-default btn-circle btndislike">
					<img src="{$BASE_URL}images/assets/chipart1.png" alt="" style="width:100%;height:100%;filter:hue-rotate(198deg);"> 
				</button>                
                        </div>
                    </p>
                    {else}
                    <h5>This user has no contributions yet</h5>
                    {/if}
                </div>
            </div>
        </div>
    </div>
    <!-- resume -->
    <br>
</body>

</html>