<?php /* Smarty version Smarty-3.1.15, created on 2017-05-29 20:28:41
         compiled from "C:\wamp64\www\LBAW\LBAW-ChipperNews\ChipperNews\templates\users\friendlist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14996592a347ce8b080-93510921%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '518acc30502f65392bd105360df02edf43e2e6e7' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW\\LBAW-ChipperNews\\ChipperNews\\templates\\users\\friendlist.tpl',
      1 => 1496089702,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14996592a347ce8b080-93510921',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_592a347ce8db67_59792505',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'pending' => 0,
    'counter' => 0,
    'first' => 0,
    'pend' => 0,
    'friends' => 0,
    'friend' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592a347ce8db67_59792505')) {function content_592a347ce8db67_59792505($_smarty_tpl) {?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Friendships</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/bootstrap.min.js"></script>
    <span class="base_url" id="base_url" hidden><?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
</span>
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/styles-friendlist.css">
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
        <?php if (sizeof($_smarty_tpl->tpl_vars['pending']->value)==0) {?>
        <p> No current pending requests ;_;</p>
        <?php }?>
        <?php $_smarty_tpl->tpl_vars['counter'] = new Smarty_variable(1, null, 0);?>
            <?php  $_smarty_tpl->tpl_vars['pend'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pend']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pending']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pend']->key => $_smarty_tpl->tpl_vars['pend']->value) {
$_smarty_tpl->tpl_vars['pend']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['counter']->value==1) {?>
            <div class="row">
             <?php $_smarty_tpl->tpl_vars['first'] = new Smarty_variable(0, null, 0);?> 
             <?php }?>
             <?php if ($_smarty_tpl->tpl_vars['counter']->value%4==0&&$_smarty_tpl->tpl_vars['first']->value!=0) {?>
             <div class="row mb-5">
             <?php }?>
           
              <?php if ($_smarty_tpl->tpl_vars['pend']->value['user1_username']!=$_SESSION['username']) {?>
                <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/view_profile.php?usr=<?php echo $_smarty_tpl->tpl_vars['pend']->value['user1_username'];?>
" style="color:black; text-decoration:none" >
                    <div class="card">
                        <img class="card-img-top" id="profilepic" alt="<?php echo $_smarty_tpl->tpl_vars['pend']->value['user1_username'];?>
" src="<?php echo getImage($_smarty_tpl->tpl_vars['pend']->value['user1_username']);?>
">
                        <div class="card-block">
                            <h4 class="card-title"><?php echo $_smarty_tpl->tpl_vars['pend']->value['user1_name'];?>
</h4>
                            <div class="meta">
                                Pending Approval
                            </div>
                            <div class="card-text">
                                <?php echo $_smarty_tpl->tpl_vars['pend']->value['user1_bio'];?>

                            </div>
                        </div>
                        </a>
                        <div class="card-footer">
                            <button class="btn btn-secondary btn-success float-right btn-sm" onclick="acceptFriend(<?php echo $_smarty_tpl->tpl_vars['pend']->value['user_id1'];?>
)"><i class="fa fa-plus"></i> Accept</button>
                            <button class="btn btn-secondary btn-danger float-left btn-sm" onclick="delFriend(<?php echo $_smarty_tpl->tpl_vars['pend']->value['user_id1'];?>
)"><i class="fa fa-times"></i> Reject</button>
                        </div>
                    </div>
                    <br>
                    <br>
            </div>
            <?php } else { ?>
                <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                    <div class="card">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/view_profile.php?usr=<?php echo $_smarty_tpl->tpl_vars['pend']->value['user2_username'];?>
" style="color:black; text-decoration:none">
                        <img class="card-img-top" id="profilepic" alt="<?php echo $_smarty_tpl->tpl_vars['pend']->value['user2_username'];?>
" src="<?php echo getImage($_smarty_tpl->tpl_vars['pend']->value['user2_username']);?>
">
                        <div class="card-block">
                            <h4 class="card-title"><?php echo $_smarty_tpl->tpl_vars['pend']->value['user2_name'];?>
</h4>
                            <div class="meta">
                                Pending Approval
                            </div>
                            <div class="card-text">
                                <?php echo $_smarty_tpl->tpl_vars['pend']->value['user2_bio'];?>

                            </div>
                        </div>
                        </a>
                        <div class="card-footer">
                            <button class="btn btn-secondary btn-success float-right btn-sm" onclick="acceptFriend(<?php echo $_smarty_tpl->tpl_vars['pend']->value['user_id2'];?>
)"><i class="fa fa-plus"></i> Accept</button>
                            <button class="btn btn-secondary btn-danger float-left btn-sm" onclick="delFriend(<?php echo $_smarty_tpl->tpl_vars['pend']->value['user_id2'];?>
)"><i class="fa fa-times"></i> Reject</button>
                        </div>
                    </div>
                    <br>
                    <br>
                </div>
            <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['counter']->value%4==0) {?>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['first']->value==0) {?>
                <?php $_smarty_tpl->tpl_vars['first'] = new Smarty_variable(1, null, 0);?>
                <?php }?>
            <?php }?>
            <?php $_smarty_tpl->tpl_vars['counter'] = new Smarty_variable($_smarty_tpl->tpl_vars['counter']->value+1, null, 0);?>
            <?php } ?>
             </div>
         </div>
    </div>

<div id="friendsdiv">
    <div class="progress progress-striped active">
        <div class="progress-bar progress-bar-success" style="width: 100%"></div>
    </div>
    <div class="container">
    <?php if (sizeof($_smarty_tpl->tpl_vars['friends']->value)==0) {?>
        <p> Forever alone ... </p>
    <?php }?>
        <?php $_smarty_tpl->tpl_vars['counter'] = new Smarty_variable(1, null, 0);?>
         
            <?php  $_smarty_tpl->tpl_vars['friend'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['friend']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['friends']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['friend']->key => $_smarty_tpl->tpl_vars['friend']->value) {
$_smarty_tpl->tpl_vars['friend']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['counter']->value==1) {?>
            <div class="row">
             <?php $_smarty_tpl->tpl_vars['first'] = new Smarty_variable(0, null, 0);?> 
             <?php }?>
             <?php if ($_smarty_tpl->tpl_vars['counter']->value%4==0&&$_smarty_tpl->tpl_vars['first']->value!=0) {?>
             <div class="row mb-5">
             <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['friend']->value['user1_username']!=$_SESSION['username']) {?>
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
            <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/view_profile.php?usr=<?php echo $_smarty_tpl->tpl_vars['friend']->value['user1_username'];?>
" style="color:black; text-decoration:none" >
                <div class="card">
                    <img class="card-img-top" id="profilepic" alt="<?php echo $_smarty_tpl->tpl_vars['friend']->value['user1_username'];?>
" src="<?php echo getImage($_smarty_tpl->tpl_vars['friend']->value['user1_username']);?>
">
                    <div class="card-block">
                        <h4 class="card-title"><?php echo $_smarty_tpl->tpl_vars['friend']->value['user1_name'];?>
</h4>
                        <div class="meta">
                            Friends
                        </div>
                        <div class="card-text">
                            <?php echo $_smarty_tpl->tpl_vars['friend']->value['user1_bio'];?>

                        </div>
                    </div>
                    </a>
                    <div class="card-footer">
                        <button class="btn btn-secondary float-right btn-sm" onclick="delFriend(<?php echo $_smarty_tpl->tpl_vars['friend']->value['user_id1'];?>
)"><i class="fa fa-minus"></i> Unfriend</button>
                    </div>
                </div>
             <br>
            <br>
            </div>
        <?php } else { ?>
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card">
                <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/view_profile.php?usr=<?php echo $_smarty_tpl->tpl_vars['friend']->value['user2_username'];?>
" style="color:black; text-decoration:none">
                    <img class="card-img-top" id="profilepic" alt="<?php echo $_smarty_tpl->tpl_vars['friend']->value['user2_username'];?>
" src="<?php echo getImage($_smarty_tpl->tpl_vars['friend']->value['user2_username']);?>
">
                    <div class="card-block">
                        <h4 class="card-title"><?php echo $_smarty_tpl->tpl_vars['friend']->value['user2_name'];?>
</h4>
                        <div class="meta">
                            <a href="#">Friends</a>
                        </div>
                        <div class="card-text">
                            <?php echo $_smarty_tpl->tpl_vars['friend']->value['user2_bio'];?>

                        </div>
                    </div>
                    </a>
                    <div class="card-footer">
                        <button class="btn btn-secondary float-right btn-sm" onclick="delFriend(<?php echo $_smarty_tpl->tpl_vars['friend']->value['user_id2'];?>
)"><i class="fa fa-minus"></i> Unfriend</button>
                    </div>
                </div>
                <br>
                <br>
             </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['counter']->value%4==0) {?>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['first']->value==0) {?>
                <?php $_smarty_tpl->tpl_vars['first'] = new Smarty_variable(1, null, 0);?>
                <?php }?>
        <?php }?>           
        <?php $_smarty_tpl->tpl_vars['counter'] = new Smarty_variable($_smarty_tpl->tpl_vars['counter']->value+1, null, 0);?>
        <?php } ?>
        <br>
    </div>
</div>
</body>

</html><?php }} ?>
