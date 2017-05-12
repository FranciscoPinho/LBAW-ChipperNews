<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Basic Bootstrap Template</title>
    <link rel="stylesheet" type="text/css" href="{$BASE_URL}css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{$BASE_URL}css/styles-profile.css">
    <link rel="stylesheet" type="text/css" href="{$BASE_URL}css/styles-header.css">
    <link href="https://fonts.googleapis.com/css?family=Lora|Oswald|Slabo+27px" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://www.w3schools.com/lib/w3data.js"></script>
    <script src="{$BASE_URL}js/bootstrap.min.js"></script>
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
                            <i class="fa fa-envelope-o"></i> Inbox <span class="label label-info pull-right inbox-notification"></span>
                        </a>
                    </li>
                    <li>
                        <a href="{$BASE_URL}pages/users/posthistory.php"><i class="fa fa-book"></i> Comment History </a>
                    </li>
                    <li>
                        <a href="{$BASE_URL}pages/users/friendlist.php">
                            <i class="fa fa-users"></i> Friends <span class="label label-info pull-right inbox-notification">23</span>
                        </a>
                    </li>
                </ul>
                <!-- /.nav -->

                <h5 class="nav-email-subtitle" style="color:black"><b>More Actions</b></h5>
                <ul class="nav nav-pills nav-stacked nav-email mb-20 rounded shadow">
                    <li>
                        <a href="{$BASE_URL}pages/articles/newarticle.php">
                            <i class="fa fa-file-text-o"></i> Write New Article
                        </a>
                    </li>
                    <li>
                        <a href="{$BASE_URL}pages/users/myarticles.php">
                            <i class="fa fa-file-text-o"></i> Article History <span class="label label-info pull-right inbox-notification">6</span>
                        </a>
                    </li>
                </ul>
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
                                        <img class="img-responsive" id="profilepic" alt="{$utilizador.username}" src="{$user.user_id|getImage}">
                                    </figure>
                                    <div class="text-content">
                                        <div class="col-lg-12">
                                            <div class="col-xs-12 col-sm-8">
                                                <p>
                                                    <i class="fa fa-certificate" aria-hidden="false"></i>
                                                    {if $user.permission_level eq '0'}
                                                    Reader
                                                    {elseif $user.permission_level eq '1'}
                                                    Collaborator
                                                    {elseif $user.permission_level eq '2'}
                                                    Moderator
                                                    {else}
                                                    Administrator
                                                    {/if}
                                                    <br/><i class="fa fa-envelope" aria-hidden="false"><span style="font-family:arial">&nbsp{$user.email}</span></i>
                                                    <br/><i class="fa fa-map-marker" aria-hidden="false"></i> {$user.local}
                                                    {if (ageCalc($user.birthdate) neq 0) || !($user.hide_birthdate)}
                                                    <br/> <i class="fa fa-birthday-cake" aria-hidden="false"></i> 
                                                    {ageCalc($user.birthdate)} years old
                                                    {/if}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-8">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#info" data-toggle="tab">Info</a></li>
                                        <li><a href="#interests" data-toggle="tab">Interests</a></li>
                                    </ul>
                                    <div id="myTabContent" class="tab-content">
                                        <div class="tab-pane fade active in" id="info">
                                            <ul class="list-group">
                                                <li class="list-group-item"><b>Full name:</b> {$user.name} <i class="fa fa-pencil"></i></li>
                                                <li class="list-group-item"><b>Bio: </b> {$user.bio} <i class="fa fa-pencil"></i></li>
                                                <li class="list-group-item"><b>Last logged in: </b> {$user.last_login}</li>
                                                <li class="list-group-item"><b>Associated newspapers or publications: </b>{$user.assoc_publications}<i class="fa fa-pencil"></i></li>
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
                <div class="bs-callout bs-callout-danger">
                    <h4>Most Popular Contribution</h4>
                    <p>
                        <small> <i> from </i></small><a href="article.html"><b>C++ is alive and kicking</b></a>
                        <div class="highlight">
                            <i class="fa fa-quote-left" aria-hidden="false"></i> Even all the parallel programming languages/techniques (Cuda, MPI, etc) rely on your knowledge of C++ (pointer, dereferencing, arithmetic, etc) to accomplish a task. In my
                            field of computer architecture, for instance, every famous simulator out there is written in C++. <i class="fa fa-quote-right" aria-hidden="false"></i>
                        </div>
                        <br>
                        <div id="ratings3">

                            <span id="postext3" style="color:#357266">42</span>
                            <button type="button" class="btn btn-default btn-circle btnlike">
					<img src="{$BASE_URL}images/assets/chipart1.png" alt="" style="width:100%;height:100%;"> 
				</button>
                            <span id="negtext3" style="color:#f11066">29</span>
                            <button type="button" class="btn btn-default btn-circle btndislike">
					<img src="{$BASE_URL}images/assets/chipart1.png" alt="" style="width:100%;height:100%;filter:hue-rotate(198deg);"> 
				</button>

                            <script>
                                $('#ratings3').find('.btn.btn-default.btn-circle.btnlike').on("click", function() {

                                    if ($('#ratings3').find('.btn.btn-default.btn-circle.btndislike').is(
                                            ":disabled")) {
                                        $('#ratings3').find('.btn.btn-default.btn-circle.btndislike').prop(
                                            "disabled", false);
                                        $('span#postext3').empty();
                                        $('span#postext3').append('42');
                                    } else {
                                        $('#ratings3').find('.btn.btn-default.btn-circle.btndislike').prop(
                                            "disabled", true);
                                        $('span#postext3').empty();
                                        $('span#postext3').append('43');
                                    }
                                });

                                $('#ratings3').find('.btn.btn-default.btn-circle.btndislike').on("click", function() {

                                    if ($('#ratings3').find('.btn.btn-default.btn-circle.btnlike').is(
                                            ":disabled")) {
                                        $('#ratings3').find('.btn.btn-default.btn-circle.btnlike').prop(
                                            "disabled", false);
                                        $('span#negtext3').empty();
                                        $('span#negtext3').append('29');
                                    } else {
                                        $('#ratings3').find('.btn.btn-default.btn-circle.btnlike').prop(
                                            "disabled", true);
                                        $('span#negtext3').empty();
                                        $('span#negtext3').append('30');
                                    }
                                });
                            </script>
                        </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- resume -->
    <br>
</body>

</html>