<?php /* Smarty version Smarty-3.1.15, created on 2017-05-26 21:25:04
         compiled from "C:\wamp64\www\LBAW-ChipperNews\ChipperNews\templates\common\header-nocategories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2744259289cd2cce2d6-40870078%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a923d84b2d135b6f836bfeb9a58c694ceb28e61' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW-ChipperNews\\ChipperNews\\templates\\common\\header-nocategories.tpl',
      1 => 1495833903,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2744259289cd2cce2d6-40870078',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_59289cd2dd5443_98935890',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'USERNAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59289cd2dd5443_98935890')) {function content_59289cd2dd5443_98935890($_smarty_tpl) {?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Header</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://www.w3schools.com/lib/w3data.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/styles-header.css">
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/bootstrap.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/main.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/articleScripts.js"></script>
    <!-- Animals graphic by -->
    <!--a href="http://www.flaticon.com/authors/zlatko-najdenovski">Zlatko Najdenovski</a> from <a href="http://www.flaticon.com/">Flaticon</a> is licensed under <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0">CC BY 3.0</a>. Made with <a href="http://logomakr.com" title="Logo Maker">Logo Maker</a>-->
    <!-- Optional Bootstrap theme -->
    <!--<link rel="stylesheet" href="css/bootstrap-theme.min.css">-->
</head>

<body>
   <div class="jumbotron">
            <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/search/frontpage.php">
            <img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/logo_navigation.png" alt"logo">
		    </a>
            <br>
           <ul class="nav navbar-nav">
                    <?php if ($_smarty_tpl->tpl_vars['USERNAME']->value) {?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/logout.php">Logout</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/profile.php">Profile</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/articles/newsfeed.php">Feed</a></li>
					<?php if ($_SESSION['permission']==2) {?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/reviewapps.php">Review Applications</a></li>
					<?php }?>
                     <?php if ($_SESSION['permission']==3) {?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/sysadmin.php">Admin Panel</a></li>
                     <?php }?>
                    <?php } else { ?>
                     <li><a data-toggle="modal" data-target="#myModal" href="">Login</a></li>     
                     <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/register.php">Register</a></li>
                    <?php }?>          
                </ul> 
    </div>
  
</body>

</html><?php }} ?>
