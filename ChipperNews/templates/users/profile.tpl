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
                                        <div class="tab-pane fade" id="settings">
                                            <ul class="list-group">     
                                                <li class="list-group-item"><b>Hide email from anyone who visits my profile </b><input type="checkbox" onchange="()" id="email_hide" name="email_hide" data-toggle="toggle" data-size="small" data-onstyle="success"></li>
                                                <li class="list-group-item"><b>Hide location from anyone who visits my profile </b><input type="checkbox" id="local_hide" name="local_hide" data-toggle="toggle" data-size="small" data-onstyle="success"></li>
                                                <li class="list-group-item"><b>Hide age from anyone who visits my profile </b><input type="checkbox" id="age_hide" name="age_hide" data-toggle="toggle" data-size="small" data-onstyle="success"></li>
                                                <li class="list-group-item"><b>Hide post history from anyone who visits my profile </b><input type="checkbox" id="post_hide" name="post_hide" data-toggle="toggle" data-size="small" data-onstyle="success"></li>
                                                <li class="list-group-item"><b>Update email </b><a href="#" id="email" data-name="email" data-type="email" data-pk="1" data-title="Email ">{$user.email}  </a><i id="pencil" class="fa fa-pencil"></i></li>
                                            </ul>
                                            <script>
                                            if('{$user.hide_email}' == true)
                                            {
                                                $('#email_hide').prop('checked', true).change()
                                            }

                                            if('{$user.hide_local}' == true)
                                            {
                                                $('#local_hide').prop('checked', true).change()
                                            }

                                            if('{$user.hide_birthdate}' == true)
                                            {
                                                $('#age_hide').prop('checked', true).change()
                                            }

                                            if('{$user.hide_posthistory}' == true)
                                            {
                                                $('#post_hide').prop('checked', true).change()
                                            }

                                            $(function() {
                                                console.log("here" + $(this).prop('checked'));
                                                $('#email_hide').change(function() 
                                                {
                                                    console.log("checked" + $(this).prop('checked'));
                                                    setEmailPrivacy($user_id,$(this).prop('checked'))
                                                })

                                                $("#local_hide").change(function()
                                                {
                                                    setLocalPrivacy($user_id,$(this).prop('checked'))
                                                })

                                                $("#age_hide").change(function()
                                                {
                                                    setAgePrivacy($user_id,$(this).prop('checked'))
                                                })

                                                $("#post_hide").change(function()
                                                {
                                                    setPostHPrivacy($user_id,$(this).prop('checked'))
                                                })
                                            })

                                            /*function checkEmail()
                                            {
                                                var c_box = document.getElementById('#email_hide')
                                                if(c_box.checked == true)
                                                {
                                                    setEmailPrivacy($user_id,'true')
                                                }
                                                else setEmailPrivacy($user_id,'false')
                                            }*/
                                            </script>
                                        </div>
                                        <div class="tab-pane fade" id="security">
                                            <form class="form-horizontal" id="fpassw" method="post">
                                            <fieldset class="responsive-fieldset">
                                            <div class="form-group">
                                                <label> Current password </label>
                                                <div class="container col-sm-12">
                                                    <div class="input-group">
                                                        <div class="input-group-btn">
                                                            <button class="btn btn-default"><i class="fa fa-unlock-alt"></i></button>
                                                        </div>
                                                        <input type="password" class="form-control" id="old_pw" placeholder="Please input your current password" name="old_psw" required> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label> New password </label>
                                                <div class="container col-sm-12">
                                                    <div class="input-group">
                                                        <div class="input-group-btn">
                                                            <button class="btn btn-default"><i class="fa fa-lock"></i></button>
                                                        </div>
                                                        <input type="password" class="form-control" id="new_pw" placeholder="Please input the new desired password" name="new_psw" required> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label> Confirm new password </label>
                                                <div class="container col-sm-12">
                                                    <div class="input-group">
                                                        <div class="input-group-btn">
                                                            <button class="btn btn-default"><i class="fa fa-lock"></i></button>
                                                        </div>
                                                        <input type="password" class="form-control" id="c_new_pw" placeholder="Confirm the new password" name="c_new_psw" required> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
				                                <div class="col-sm-4 col-sm-offset-4">
					                                <button type="reset" class="btn btn-default">Cancel</button>
					                                <button type="submit" class="btn btn-success">Submit</button>
				                                </div>
			                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script>

                function debug(data)
                {
                    console.log(data);
                };
                        var base_url = $("#base_url").text();
                        $.fn.editable.defaults.mode = 'inline';
                        $('#fullname').editable({
                            type: 'text',
                            url: base_url + 'actions/users/profile.php',
                            title: 'Edit name',
                            ajaxOptions:{
                            type:'post'
                           }
                            });
                        $('#bio').editable({
                            type: 'textarea',
                            url: base_url + 'actions/users/profile.php',
                            title: 'Edit bio',
                            ajaxOptions:
                            {
                            type:'post'
                           },
                            success: debug

                            });
                        $('#assoc').editable({
                            type: 'textarea',
                            pk: 1,
                            url: base_url + 'actions/users/profile.php',
                            title: 'Edit associated publications',
                            ajaxOptions:{
                            type:'post'
                           }
                            });
                        $('#local').editable({
                            type: 'select2',
                            pk: 1,
                            url: base_url + 'actions/users/profile.php',
                            title: 'Update localisation',
                            ajaxOptions:{
                            type:'post'
                           }
                            });
                        $('#email').editable({
                            type: 'email',
                            pk: 1,
                            url: base_url + 'actions/users/profile.php',
                            title: 'Update email',
                            ajaxOptions:{
                            type:'post'
                           }
                            });
                </script>
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