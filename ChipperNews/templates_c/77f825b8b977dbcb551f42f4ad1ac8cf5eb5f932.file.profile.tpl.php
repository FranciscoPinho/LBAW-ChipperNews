<?php /* Smarty version Smarty-3.1.15, created on 2017-05-17 11:36:43
         compiled from "C:\wamp64\www\LBAW-ChipperNews\ChipperNews\templates\users\profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25195590b34960f0d48-49678860%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77f825b8b977dbcb551f42f4ad1ac8cf5eb5f932' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW-ChipperNews\\ChipperNews\\templates\\users\\profile.tpl',
      1 => 1495011642,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25195590b34960f0d48-49678860',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_590b3496194f68_55723827',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'user' => 0,
    'username' => 0,
    'utilizador' => 0,
    'interests' => 0,
    'interest' => 0,
    'article' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590b3496194f68_55723827')) {function content_590b3496194f68_55723827($_smarty_tpl) {?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/styles-profile.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/styles-header.css">
    <link href="https://fonts.googleapis.com/css?family=Lora|Oswald|Slabo+27px" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://www.w3schools.com/lib/w3data.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/bootstrap.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script> 
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/css/bootstrap-editable.css" rel="stylesheet">
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/js/bootstrap-editable.js"></script>
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <link href="select2/select2.css" rel="stylesheet" type="text/css"></link>  
    <script src="select2/select2.js"></script> 
    <link href="select2-bootstrap.css" rel="stylesheet" type="text/css"></link>  
    <!-- Optional Bootstrap theme -->
    <!--<link rel="stylesheet" href="css/bootstrap-theme.min.css">-->
</head>

<body>
    <div class="container">
        <div id="bg">
            <img class="bg" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/circuit.jpg" alt="">
        </div>
        <div class="row">
            <div class="col-sm-3">
                <ul class="nav nav-pills nav-stacked nav-email shadow mb-20">
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/chatbox.php">
                            <i class="fa fa-envelope-o"></i> Inbox <span class="label label-info pull-right inbox-notification"></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/posthistory.php"><i class="fa fa-book"></i> Comment History </a>
                    </li>
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/friendlist.php">
                            <i class="fa fa-users"></i> Friends <span class="label label-info pull-right inbox-notification"><?php echo getNumberFriends($_smarty_tpl->tpl_vars['user']->value['user_id']);?>
</span>
                        </a>
                    </li>
                </ul>
                <!-- /.nav -->

                <?php if ($_smarty_tpl->tpl_vars['user']->value['permission_level']>='1') {?>
                <h5 class="nav-email-subtitle" style="color:black"><b>More Actions</b></h5>
                <ul class="nav nav-pills nav-stacked nav-email mb-20 rounded shadow">
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/articles/newarticle.php">
                            <i class="fa fa-file-text-o"></i> Write New Article
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/myarticles.php">
                            <i class="fa fa-file-text-o"></i> Article History <span class="label label-info pull-right inbox-notification"></span>
                        </a>
                    </li>
                </ul>
                <?php }?>
                <!-- /.nav -->
            </div>

            <div class="col-sm-9">
                <div class="panel panel-default">
                    <div class="panel-heading resume-heading">
                        <div class="col-lg-12">
                            <h3> <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
 </h3>
                            <h5> <?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
 <small> some rep points? </small> </h5>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-xs-12 col-sm-4">
                                    <figure>
                                        <img class="img-responsive" id="profilepic" alt="<?php echo $_smarty_tpl->tpl_vars['utilizador']->value['username'];?>
" src="<?php echo getImage($_smarty_tpl->tpl_vars['user']->value['user_id']);?>
">
                                    </figure>
                                    <div class="text-content">
                                        <div class="col-lg-12">
                                            <div class="col-xs-12 col-sm-8">
                                                <p>
                                                    <i class="fa fa-certificate" aria-hidden="false"></i>
                                                    <?php if ($_smarty_tpl->tpl_vars['user']->value['permission_level']=='0') {?>
                                                    Reader
                                                    <?php } elseif ($_smarty_tpl->tpl_vars['user']->value['permission_level']=='1') {?>
                                                    Collaborator
                                                    <?php } elseif ($_smarty_tpl->tpl_vars['user']->value['permission_level']=='2') {?>
                                                    Moderator
                                                    <?php } else { ?>
                                                    Administrator
                                                    <?php }?>
                                                    <br/><i class="fa fa-envelope" aria-hidden="false"><span style="font-family:arial">&nbsp<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</span></i>
                                                    <br/><i class="fa fa-map-marker" aria-hidden="false"></i> <?php echo $_smarty_tpl->tpl_vars['user']->value['local'];?>

                                                    <!-- isto e p view como outra pessoa -->
                                                    <?php if (((ageCalc($_smarty_tpl->tpl_vars['user']->value['birthdate'])!=0)&&!($_smarty_tpl->tpl_vars['user']->value['hide_birthdate']))) {?>
                                                    <br/> <i class="fa fa-birthday-cake" aria-hidden="false"></i> 
                                                    <?php echo ageCalc($_smarty_tpl->tpl_vars['user']->value['birthdate']);?>
 years old
                                                    <?php }?>
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
                                                <li class="list-group-item"><b>Full name </b><a href="#" id="fullname" data-type="text" data-pk="1" data-title="Full name "><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
  </a><i id="pencil" onclick="pencil()" class="fa fa-pencil"></i></li>
                                                <li class="list-group-item"><b>Bio </b><a href="#" id="bio" data-type="textarea" data-pk="1" data-title="Bio " title="Edit"><?php echo $_smarty_tpl->tpl_vars['user']->value['bio'];?>
 </a><i class="fa fa-pencil"></i></li>
                                                <li class="list-group-item"><b>Last logged in </b> <?php echo $_smarty_tpl->tpl_vars['user']->value['last_login'];?>
</li>
                                                <li class="list-group-item"><b>Associated newspapers or publications </b><a href="#" id="assoc" data-type="textarea" data-pk="1" data-title="Associated newspapers or publications" title="Edit"><?php echo $_smarty_tpl->tpl_vars['user']->value['assoc_publications'];?>
 </a><i id="pencil" class="fa fa-pencil"></i></li>
                                            </ul>
                                        </div>
                                        <script>
                                            $.fn.editable.defaults.mode = 'inline';
                                            $('#fullname').editable();
                                            $('#bio').editable();
                                            $('#assoc').editable();
                                            $('#local').editable();
                                        </script>
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
                                        <div class="tab-pane fade" id="settings">
                                            <ul class="list-group">
                                                <li class="list-group-item"><b>Email visible to anyone who visits my profile </b><input type="checkbox" checked data-toggle="toggle" data-size="small" data-onstyle="success"></li>
                                                <li class="list-group-item"><b>Location visible to anyone who visits my profile </b><input type="checkbox" checked data-toggle="toggle" data-size="small" data-onstyle="success"></li>
                                                <li class="list-group-item"><b>Email visible to anyone who visits my profile </b><input type="checkbox" checked data-toggle="toggle" data-size="small" data-onstyle="success"></li>
                                                <li class="list-group-item"><b>Update location </b><a href="#" id="fullname" data-type="select2" data-pk="1" data-title="Current localisation " data-source="$countries"><?php echo $_smarty_tpl->tpl_vars['user']->value['local'];?>
  </a><i id="pencil" class="fa fa-pencil"></i></li>
                                            </ul>
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
                <div class="bs-callout bs-callout-danger">
                    <?php $_smarty_tpl->tpl_vars['article'] = new Smarty_variable(getMostPopularArticle($_smarty_tpl->tpl_vars['user']->value['user_id']), null, 0);?>
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
