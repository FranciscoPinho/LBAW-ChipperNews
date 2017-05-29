<?php /* Smarty version Smarty-3.1.15, created on 2017-05-29 15:47:24
         compiled from "C:\wamp64\www\LBAW-ChipperNews\ChipperNews\templates\common\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:226345929a63f9fdb71-71476331%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7e6f27e1222acb3df29b4245c36a25d5b0e335a' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW-ChipperNews\\ChipperNews\\templates\\common\\footer.tpl',
      1 => 1496072780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '226345929a63f9fdb71-71476331',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5929a63fa43cb8_14898320',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'USERNAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5929a63fa43cb8_14898320')) {function content_5929a63fa43cb8_14898320($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/styles-header.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://www.w3schools.com/lib/w3data.js"></script>	
	<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/bootstrap.min.js"></script>
    <!-- Optional Bootstrap theme -->
    <!--<link rel="stylesheet" href="css/bootstrap-theme.min.css">-->
</head>
<body>
     <div class="jumbotron">
          
           <ul class="nav navbar-nav">
					<?php if ($_smarty_tpl->tpl_vars['USERNAME']->value) {?>
					<?php if ($_SESSION['permission']==0) {?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/applycollab.php">Become a Collaborator</a></li>
					<?php }?>
					<?php }?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/help.php">Help</a></li>
                    <li><a href="#">Contact Info</a></li>
                </ul>
    </div>
</body>
</html><?php }} ?>
