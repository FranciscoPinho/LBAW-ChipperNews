<?php /* Smarty version Smarty-3.1.15, created on 2017-05-27 16:23:28
         compiled from "C:\wamp64\www\LBAW-ChipperNews\ChipperNews\templates\common\header-categories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:164475929a63ed74323-59916378%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e17029332126250520347ec71b9d06da44c0232' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW-ChipperNews\\ChipperNews\\templates\\common\\header-categories.tpl',
      1 => 1495902207,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164475929a63ed74323-59916378',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5929a63f26c993_84643140',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'USERNAME' => 0,
    'reportcenter' => 0,
    'ERROR_MESSAGES' => 0,
    'error' => 0,
    'SUCCESS_MESSAGES' => 0,
    'success' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5929a63f26c993_84643140')) {function content_5929a63f26c993_84643140($_smarty_tpl) {?><!DOCTYPE html>
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
           <ul class="nav navbar-nav">
                    <li><a class="categorySearch" cat="1" href="#">Programming</a></li>
                    <li><a class="categorySearch" cat="2" href="#">Hardware</a></li>
                    <li><a class="categorySearch" cat="3" href="#">Software</a></li>
                    <li><a class="categorySearch" cat="4" href="#">Industry</a></li>
                    <li><a class="categorySearch" cat="5" href="#">Technology</a></li>
                </ul> 
    </div>
    <nav class="navbar navbar-default headernav">
        <div class="container-fluid">
            <div class="navbar-header">
              
                <ul class="nav navbar-nav navbar-right">
                    <?php if ($_smarty_tpl->tpl_vars['USERNAME']->value) {?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/logout.php">Logout</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/profile.php">Profile</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/newsfeed.php">Feed</a></li>
					<?php if ($_SESSION['permission']>=2) {?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/reviewapps.php">Review Applications</a></li>
                      <?php if (isset($_smarty_tpl->tpl_vars['reportcenter']->value)) {?>
                     <li style="background:white"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/reportPanel.php">Report Center</a></li>
                    <?php } else { ?>
                     <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/reportPanel.php">Report Center</a></li>
                     <?php }?>
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
            <div class="navbar-right">
                
               <form class="navbar-form navbar-right">
                        <div class="form-group has-feedback">
                            <input type="text" style="border-radius:16px;color:#C5C9A4" class="form-control" placeholder="Search">
                            <span class="glyphicon glyphicon-search form-control-feedback"></span>
                        </div>

                 </form>
            </div>
            </div>     <!-- /.container-fluid -->
                            <div id="error_messages">
                            <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
                            <div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<a class="close" href="#">X</a></div>
                            <?php } ?>
                            </div>
                            <div id="success_messages">
                            <?php  $_smarty_tpl->tpl_vars['success'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['success']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SUCCESS_MESSAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['success']->key => $_smarty_tpl->tpl_vars['success']->value) {
$_smarty_tpl->tpl_vars['success']->_loop = true;
?>
                            <div class="success"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
<a class="close" href="#">X</a></div>
                            <?php } ?>
                            </div>
    </nav>
</body>

</html><?php }} ?>
