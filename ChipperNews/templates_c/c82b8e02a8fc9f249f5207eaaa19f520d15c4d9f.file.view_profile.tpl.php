<?php /* Smarty version Smarty-3.1.15, created on 2017-05-29 21:52:55
         compiled from "C:\wamp64\www\LBAW\LBAW-ChipperNews\ChipperNews\templates\users\view_profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3948592c2b39380ee4-36626652%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c82b8e02a8fc9f249f5207eaaa19f520d15c4d9f' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW\\LBAW-ChipperNews\\ChipperNews\\templates\\users\\view_profile.tpl',
      1 => 1496093488,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3948592c2b39380ee4-36626652',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_592c2b395ebb35_14106765',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'username' => 0,
    'user' => 0,
    'USERNAME' => 0,
    'result' => 0,
    'top_id' => 0,
    'score' => 0,
    'interests' => 0,
    'interest' => 0,
    'article' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592c2b395ebb35_14106765')) {function content_592c2b395ebb35_14106765($_smarty_tpl) {?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>View Profile</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/styles-profile.css">
    <link href="https://fonts.googleapis.com/css?family=Lora|Oswald|Slabo+27px" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://www.w3schools.com/lib/w3data.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script> 
    <span class="base_url" id="base_url" hidden><?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
</span>
    <span id="username" hidden><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</span>
</head>

<body>
    <div class="container">
    <script>

    var base_url = $("#base_url").text();
    function sendRequest(userid) 
    {
        $.ajax({
            type: "POST",
            url: base_url + 'actions/users/friendrequest.php',
            data: "user_add="+userid,
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
        <div id="bg">
            <img class="bg" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/circuit.jpg" alt="">
        </div>
        <div class="row">
            <div class="col-sm-3">
                <ul class="nav nav-pills nav-stacked nav-email shadow mb-20">
                <?php if (!($_smarty_tpl->tpl_vars['user']->value['hide_posthistory'])) {?>
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/posthistory.php?id=<?php echo $_smarty_tpl->tpl_vars['user']->value['user_id'];?>
"><i class="fa fa-book fa-fw"></i> See comment history </a>
                    </li>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['USERNAME']->value) {?>
                <?php $_smarty_tpl->tpl_vars['result'] = new Smarty_variable(friendshipExists($_smarty_tpl->tpl_vars['user']->value['user_id'],$_SESSION['user_id']), null, 0);?>
                <?php if ($_smarty_tpl->tpl_vars['result']->value==0) {?>
                 <li>
                    <a onclick="sendRequest(<?php echo $_smarty_tpl->tpl_vars['user']->value['user_id'];?>
)"><i class="fa fa-user-plus fa-fw"></i> Add <b><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</b> as friend</a>
                </li>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['result']->value===true) {?>
                 <li>
                    <a onclick="delFriend(<?php echo $_smarty_tpl->tpl_vars['user']->value['user_id'];?>
)"><i class="fa fa-user-times fa-fw"></i> Unfriend <b><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</b></button></a>
                </li>
                <?php }?>
                <?php }?>
                </ul>
            </div>
            <div class="col-sm-9">
                <div class="panel panel-default">
                    <div class="panel-heading resume-heading">
                        <div class="col-lg-12">
                            <?php $_smarty_tpl->tpl_vars['top_id'] = new Smarty_variable(whoTopCollaborator(), null, 0);?>
                            <?php if (($_smarty_tpl->tpl_vars['top_id']->value==$_smarty_tpl->tpl_vars['user']->value['user_id'])) {?>
                            <h3> <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
 <i class="fa fa-trophy fa-fw"></i></h3>
                            <?php } else { ?>
                            <h3> <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
 </h3>
                            <?php }?>
                            <?php $_smarty_tpl->tpl_vars['score'] = new Smarty_variable(calculateUserScore($_smarty_tpl->tpl_vars['user']->value['user_id']), null, 0);?>
                            <?php if (($_smarty_tpl->tpl_vars['score']->value==0)) {?>
                            <h5> <?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
 <small> no contribution points </small> </h5>
                            <?php } else { ?>
                            <h5> <?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
 <small> <?php echo $_smarty_tpl->tpl_vars['score']->value;?>
 contribution points </small> </h5>
                            <?php }?>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-xs-12 col-sm-4">
                                    <figure>
                                        <img class="img-responsive" id="profilepic" alt="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" src="<?php echo getImage($_smarty_tpl->tpl_vars['username']->value);?>
">
                                    </figure>
                                    <div class="text-content">
                                        <div class="col-lg-15">
                                            <div class="col-xs-12 col-sm-12">
                                                <p>
                                                    <ul class="list-unstyled">
                                                    <li><i class="fa fa-certificate fa-fw" aria-hidden="false"></i>
                                                    <?php if ($_smarty_tpl->tpl_vars['user']->value['permission_level']=='0') {?>Reader
                                                    <?php } elseif ($_smarty_tpl->tpl_vars['user']->value['permission_level']=='1') {?>Collaborator
                                                    <?php } elseif ($_smarty_tpl->tpl_vars['user']->value['permission_level']=='2') {?>Moderator
                                                    <?php } else { ?>Administrator
                                                    <?php }?>
                                                    <?php if (!($_smarty_tpl->tpl_vars['user']->value['hide_email'])) {?>
                                                    <li><i class="fa fa-envelope fa-fw" aria-hidden="false"></i> <?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</li>
                                                    <?php }?>
                                                    <?php if (!($_smarty_tpl->tpl_vars['user']->value['hide_local'])) {?>
                                                    <li><i class="fa fa-map-marker fa-fw" aria-hidden="false"></i> <?php echo $_smarty_tpl->tpl_vars['user']->value['local'];?>
</li>
                                                    <?php }?>
                                                    <?php if (((ageCalc($_smarty_tpl->tpl_vars['user']->value['birthdate'])!=0)&&!($_smarty_tpl->tpl_vars['user']->value['hide_birthdate']))) {?>
                                                        <li><i class="fa fa-birthday-cake fa-fw" aria-hidden="false"></i>
                                                        <?php echo ageCalc($_smarty_tpl->tpl_vars['user']->value['birthdate']);?>
 years old
                                                    <?php }?></li>
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
                                    </ul>
                                    <div id="myTabContent" class="tab-content">
                                        <div class="tab-pane fade active in" id="info">
                                            <ul class="list-group">
                                                <li class="list-group-item"><b>Full name </b><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</li>
                                                <li class="list-group-item"><b>Bio </b><?php echo $_smarty_tpl->tpl_vars['user']->value['bio'];?>
 </li>
                                                <li class="list-group-item"><b>Last logged in </b> <?php echo $_smarty_tpl->tpl_vars['user']->value['last_login'];?>
</li>
                                                <li class="list-group-item"><b>Associated newspapers or publications </b><?php echo $_smarty_tpl->tpl_vars['user']->value['assoc_publications'];?>
 </a></li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane fade" id="interests">
                                            <p>
                                            <?php $_smarty_tpl->tpl_vars['interests'] = new Smarty_variable(fetchInterests($_smarty_tpl->tpl_vars['user']->value['user_id']), null, 0);?>
                                            <?php  $_smarty_tpl->tpl_vars['interest'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['interest']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['interests']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['interest']->key => $_smarty_tpl->tpl_vars['interest']->value) {
$_smarty_tpl->tpl_vars['interest']->_loop = true;
?>
                                                <?php if ($_smarty_tpl->tpl_vars['interest']->value['category']==1) {?>
                                                    <span class="label label-primary "><?php echo $_smarty_tpl->tpl_vars['interest']->value['name'];?>
</span>
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['interest']->value['category']==2) {?>
                                                    <span class="label label-warning "><?php echo $_smarty_tpl->tpl_vars['interest']->value['name'];?>
</span>
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['interest']->value['category']==3) {?>
                                                    <span class="label label-info "><?php echo $_smarty_tpl->tpl_vars['interest']->value['name'];?>
</span>
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['interest']->value['category']==4) {?>
                                                    <span class="label label-default "><?php echo $_smarty_tpl->tpl_vars['interest']->value['name'];?>
</span>
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['interest']->value['category']==5) {?>
                                                    <span class="label label-danger "><?php echo $_smarty_tpl->tpl_vars['interest']->value['name'];?>
</span>
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['interest']->value['category']==6) {?>
                                                    <span class="label label-success "><?php echo $_smarty_tpl->tpl_vars['interest']->value['name'];?>
</span>
                                                <?php }?>     
                                            <?php } ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bs-callout bs-callout-danger">
                    <?php $_smarty_tpl->tpl_vars['article'] = new Smarty_variable(fetchMostPopularArticle($_smarty_tpl->tpl_vars['user']->value['user_id']), null, 0);?>
                    <?php if ($_smarty_tpl->tpl_vars['article']->value!=null) {?>
                    <h4>Most Popular Contribution</h4>
                    <p>
                        <small> <i> from </i></small><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/articles/article.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['article_id'];?>
"><b><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</b></a>
                        <div class="highlight">
                            <i class="fa fa-quote-left" aria-hidden="false"></i> <?php echo $_smarty_tpl->tpl_vars['article']->value['lead'];?>
 <i class="fa fa-quote-right" aria-hidden="false"></i>
                        </div>
                        <br>
                        <div id="ratings3">
                            <span id="postext3" style="color:#357266"><?php echo $_smarty_tpl->tpl_vars['article']->value['posratings'];?>
</span>
                            <button type="button" class="btn btn-default btn-circle btnlike">
					<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/chipart1.png" alt="" style="width:100%;height:100%;"> 
				</button>
                            <span id="negtext3" style="color:#f11066"><?php echo $_smarty_tpl->tpl_vars['article']->value['negratings'];?>
</span>
                            <button type="button" class="btn btn-default btn-circle btndislike">
					<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/chipart1.png" alt="" style="width:100%;height:100%;filter:hue-rotate(198deg);"> 
				</button>                
                        </div>
                    </p>
                    <?php } else { ?>
                    <h5>This user has no contributions yet</h5>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
    <!-- resume -->
    <br>
</body>

</html><?php }} ?>
