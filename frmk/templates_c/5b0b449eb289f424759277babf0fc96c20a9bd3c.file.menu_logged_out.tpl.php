<?php /* Smarty version Smarty-3.1.15, created on 2017-04-18 21:44:40
         compiled from "C:\wamp64\www\LBAW\LBAW-ChipperNews\frmk\templates\common\menu_logged_out.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1436958f688c86baa18-35059930%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b0b449eb289f424759277babf0fc96c20a9bd3c' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW\\LBAW-ChipperNews\\frmk\\templates\\common\\menu_logged_out.tpl',
      1 => 1492551419,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1436958f688c86baa18-35059930',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f688c86cabd9_75612877',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f688c86cabd9_75612877')) {function content_58f688c86cabd9_75612877($_smarty_tpl) {?><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/register.php">Register</a>
<form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/login.php" method="post">
  <input type="text" placeholder="username" name="username">
  <input type="password" placeholder="password" name="password">
  <input type="submit" value=">">
</form>
<?php }} ?>
