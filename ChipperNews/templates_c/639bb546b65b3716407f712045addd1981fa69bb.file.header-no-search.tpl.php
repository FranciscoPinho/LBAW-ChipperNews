<?php /* Smarty version Smarty-3.1.15, created on 2017-05-29 21:21:35
         compiled from "C:\wamp64\www\LBAW-ChipperNews\ChipperNews\templates\common\header-no-search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28131592b2295c7c4c9-21479004%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '639bb546b65b3716407f712045addd1981fa69bb' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW-ChipperNews\\ChipperNews\\templates\\common\\header-no-search.tpl',
      1 => 1496078088,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28131592b2295c7c4c9-21479004',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_592b2295d8a887_69343721',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'USERNAME' => 0,
    'profile' => 0,
    'feed' => 0,
    'apps' => 0,
    'reportcenter' => 0,
    'adminpanel' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592b2295d8a887_69343721')) {function content_592b2295d8a887_69343721($_smarty_tpl) {?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
js/pollingMessageCount.js"></script>
    <!-- Animals graphic by -->
    <!--a href="http://www.flaticon.com/authors/zlatko-najdenovski">Zlatko Najdenovski</a> from <a href="http://www.flaticon.com/">Flaticon</a> is licensed under <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0">CC BY 3.0</a>. Made with <a href="http://logomakr.com" title="Logo Maker">Logo Maker</a>-->
    <!-- Optional Bootstrap theme -->
    <!--<link rel="stylesheet" href="css/bootstrap-theme.min.css">-->
    <span class="base_url" id="base_url" hidden><?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
</span>
</head>

<body>
   <div class="jumbotron">
            <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/search/frontpage.php">
            <img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/logo_navigation.png" alt"logo">
		    </a>
            <br>
           <ul class="nav navbar-nav nabvar-left">
                    <?php if ($_smarty_tpl->tpl_vars['USERNAME']->value) {?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/logout.php">Logout</a></li>
                     <?php if (isset($_smarty_tpl->tpl_vars['profile']->value)) {?>
                     <li style="background:white"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/profile.php">Profile</a></li>
                     <?php } else { ?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/profile.php">Profile</a></li>
                    <?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['feed']->value)) {?>
                       <li style="background:white"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/articles/newsfeed.php">Feed</a></li>
                    <?php } else { ?>
                       <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/newsfeed.php">Feed</a></li>
                     <?php }?>
                  
					<?php if ($_SESSION['permission']>=2) {?>
                    <?php if (isset($_smarty_tpl->tpl_vars['apps']->value)) {?>
                     <li style="background:white"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/reviewapps.php">Review Applications</a></li>
                    <?php } else { ?>
                     <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/reviewapps.php">Review Applications</a></li>
                     <?php }?>
                     <?php if (isset($_smarty_tpl->tpl_vars['reportcenter']->value)) {?>
                     <li style="background:white"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/reportPanel.php">Report Center</a></li>
                    <?php } else { ?>
                     <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/reportPanel.php">Report Center</a></li>
                     <?php }?>
                     <?php }?> 
                
                     <?php if ($_SESSION['permission']==3) {?>
                     <?php if (isset($_smarty_tpl->tpl_vars['adminpanel']->value)) {?>
                     <li style="background:white"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/sysadmin.php">Admin Panel</a></li>
                    <?php } else { ?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/sysadmin.php">Admin Panel</a></li>
                     <?php }?>
                     <?php }?>
                     <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/inbox.php"><i class="fa fa-envelope-o fa-fw"></i><span class="label label-info pull-right inbox-notification" id="unreadMessages"></span></a></li>
                    <?php } else { ?>
                     <li><a data-toggle="modal" data-target="#myModal" href="">Login</a></li>     
                     <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/register.php">Register</a></li>
                    <?php }?>    
                </ul>             
    </div>
</body>

</html><?php }} ?>
