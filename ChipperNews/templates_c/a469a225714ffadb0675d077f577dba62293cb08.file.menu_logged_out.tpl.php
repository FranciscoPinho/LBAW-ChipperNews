<?php /* Smarty version Smarty-3.1.15, created on 2017-04-18 22:07:13
         compiled from "C:\wamp64\www\LBAW\LBAW-ChipperNews\ChipperNews\templates\common\menu_logged_out.tpl" */ ?>
<?php /*%%SmartyHeaderCode:875258f68e11206019-84544137%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a469a225714ffadb0675d077f577dba62293cb08' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW\\LBAW-ChipperNews\\ChipperNews\\templates\\common\\menu_logged_out.tpl',
      1 => 1492551419,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '875258f68e11206019-84544137',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f68e11216c39_68938387',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f68e11216c39_68938387')) {function content_58f68e11216c39_68938387($_smarty_tpl) {?><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/register.php">Register</a>
<form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/login.php" method="post">
  <input type="text" placeholder="username" name="username">
  <input type="password" placeholder="password" name="password">
  <input type="submit" value=">">
</form>
<?php }} ?>
