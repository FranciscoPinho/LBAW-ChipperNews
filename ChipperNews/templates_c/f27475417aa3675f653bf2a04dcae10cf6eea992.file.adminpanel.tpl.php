<?php /* Smarty version Smarty-3.1.15, created on 2017-05-28 18:42:43
         compiled from "C:\wamp64\www\LBAW\LBAW-ChipperNews\ChipperNews\templates\admin\adminpanel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2300859079185ed15a4-18378822%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f27475417aa3675f653bf2a04dcae10cf6eea992' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW\\LBAW-ChipperNews\\ChipperNews\\templates\\admin\\adminpanel.tpl',
      1 => 1495993013,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2300859079185ed15a4-18378822',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_590791863ba4e7_88561835',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'users' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590791863ba4e7_88561835')) {function content_590791863ba4e7_88561835($_smarty_tpl) {?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chipper News</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/styles-frontpage.css">
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cogs"></i> Admin Options <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/syscategories.php">Category Management</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/reportPanel.php">Report Management</a></li>
                            <li><a href="#">Shut down for maintenance</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-right">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search user">
                    </div>
                    <button type="submit" class="btn btn-default"><i class="fa fa-search" aria-hidden="false"></i></button>
                </form>

                <ul class="nav navbar-nav navbar-right">
                </div>
            </div>
            <!-- /.navbar-collapse -->
        <!-- /.container-fluid -->
    </nav>
        <div>
            <h1> Users </h1>
            <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/administration/operation.php" method="post">
                <div class="radio">
                    <label class="radio-inline"><input type="radio" name="operation" value="ban" >Ban</label>
                    <label class="radio-inline"><input type="radio" name="operation" value="delete">Delete</label>
                    <label class="radio-inline"><input type="radio" name="operation" value="colaborator">Promote</label>
                    <label class="radio-inline"><input type="radio" name="operation" value="unban">Unban</label>
                </div>
                <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Icon</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Banned?</th>
                        <th>Deleted?</th>
                        <th>Last Login</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['user']->value['permission_level']==0) {?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_id'];?>
</td>
                        <td><img class="media-object" src="<?php echo getImage($_smarty_tpl->tpl_vars['user']->value['username']);?>
" alt="..." style="height:30px;width:30px"></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['user']->value['is_banned']==true) {?>
                                TRUE
                            <?php } else { ?>
                                FALSE
                            <?php }?>
                        </td>
                        <td> 
                            <?php if ($_smarty_tpl->tpl_vars['user']->value['is_deleted']==true) {?>
                                TRUE
                            <?php } else { ?>
                                FALSE
                            <?php }?>
                        </td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['user']->value['last_login'];?>
</td>
                        <td>
                            <input type="checkbox" name="users[]" value=<?php echo $_smarty_tpl->tpl_vars['user']->value['user_id'];?>
><br>
                        </td>  
                    </tr>
                    <?php }?>
                    <?php } ?>
                </tbody>
                </table>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
        <div>
            <h1> Collaborators </h1>
            <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/administration/operation.php" method="post">
                <div class="radio">
                    <label class="radio-inline"><input type="radio" name="operation" value="ban" >Ban</label>
                    <label class="radio-inline"><input type="radio" name="operation" value="delete">Delete</label>
                    <label class="radio-inline"><input type="radio" name="operation" value="moderator">Promote</label>
                    <label class="radio-inline"><input type="radio" name="operation" value="user">Demote</label>
                </div>
                <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Icon</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Banned?</th>
                        <th>Deleted?</th>
                        <th>Last Login</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['user']->value['permission_level']==1) {?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_id'];?>
</td>
                        <td><img class="media-object" src="<?php echo getImage($_smarty_tpl->tpl_vars['user']->value['username']);?>
" alt="..." style="height:30px;width:30px"></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['user']->value['is_banned']==true) {?>
                                TRUE
                            <?php } else { ?>
                                FALSE
                            <?php }?>
                        </td>
                        <td> 
                            <?php if ($_smarty_tpl->tpl_vars['user']->value['is_deleted']==true) {?>
                                TRUE
                            <?php } else { ?>
                                FALSE
                            <?php }?>
                        </td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['user']->value['last_login'];?>
</td>
                        <td>
                            <input type="checkbox" name="users[]" value=<?php echo $_smarty_tpl->tpl_vars['user']->value['user_id'];?>
><br>
                        </td>    
                    </tr>
                    <?php }?>
                    <?php } ?>
                </tbody>
                </table>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>

        <div>
            <h1> Moderators </h1>
            <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/administration/operation.php" method="post">
                <div class="radio">
                    <label class="radio-inline"><input type="radio" name="operation" value="ban" >Ban</label>
                    <label class="radio-inline"><input type="radio" name="operation" value="delete">Delete</label>
                    <label class="radio-inline"><input type="radio" name="operation" value="colaborator">Demote</label>
                </div>
                <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Icon</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Banned?</th>
                        <th>Deleted?</th>
                        <th>Last Login</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['user']->value['permission_level']==2) {?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_id'];?>
</td>
                        <td><img class="media-object" src="<?php echo getImage($_smarty_tpl->tpl_vars['user']->value['username']);?>
" alt="..." style="height:30px;width:30px"></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['user']->value['is_banned']==true) {?>
                                TRUE
                            <?php } else { ?>
                                FALSE
                            <?php }?>
                        </td>
                        <td> 
                            <?php if ($_smarty_tpl->tpl_vars['user']->value['is_deleted']==true) {?>
                                TRUE
                            <?php } else { ?>
                                FALSE
                            <?php }?>
                        </td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['user']->value['last_login'];?>
</td>
                        <td>
                            <input type="checkbox" name="users[]" value=<?php echo $_smarty_tpl->tpl_vars['user']->value['user_id'];?>
><br>
                        </td>  
                    </tr>
                    <?php }?>
                    <?php } ?>
                </tbody>
                </table>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <br>
        </div>
</body>

</html><?php }} ?>
