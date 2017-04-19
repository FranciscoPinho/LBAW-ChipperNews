<?php /* Smarty version Smarty-3.1.15, created on 2017-04-19 12:09:29
         compiled from "C:\wamp64\www\LBAW-ChipperNews\frmk\templates\common\menu_logged_in.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2340958f75379e57917-61353160%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed8619f0a53fa14c3ef158ea4cf5588188e4323b' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW-ChipperNews\\frmk\\templates\\common\\menu_logged_in.tpl',
      1 => 1386927924,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2340958f75379e57917-61353160',
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
  'unifunc' => 'content_58f75379e94c92_70966789',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f75379e94c92_70966789')) {function content_58f75379e94c92_70966789($_smarty_tpl) {?><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/logout.php">Logout</a>
<span class="username"><?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
</span>
<?php }} ?>
