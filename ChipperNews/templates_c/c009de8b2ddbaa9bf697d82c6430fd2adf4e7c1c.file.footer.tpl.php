<?php /* Smarty version Smarty-3.1.15, created on 2017-05-28 02:22:52
         compiled from "C:\wamp64\www\LBAW\LBAW-ChipperNews\ChipperNews\templates\common\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14653592a347cea7590-96456977%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c009de8b2ddbaa9bf697d82c6430fd2adf4e7c1c' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW\\LBAW-ChipperNews\\ChipperNews\\templates\\common\\footer.tpl',
      1 => 1495844990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14653592a347cea7590-96456977',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'USERNAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_592a347cf23d20_74837077',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592a347cf23d20_74837077')) {function content_592a347cf23d20_74837077($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Footer</title>
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
