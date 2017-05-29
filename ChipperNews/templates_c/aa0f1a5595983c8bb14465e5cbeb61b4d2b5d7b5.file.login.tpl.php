<?php /* Smarty version Smarty-3.1.15, created on 2017-05-29 19:30:53
         compiled from "C:\wamp64\www\LBAW-ChipperNews\ChipperNews\templates\users\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:221015929a63f9a99e3-97394940%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa0f1a5595983c8bb14465e5cbeb61b4d2b5d7b5' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW-ChipperNews\\ChipperNews\\templates\\users\\login.tpl',
      1 => 1496085279,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '221015929a63f9a99e3-97394940',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5929a63f9c04b6_44658489',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5929a63f9c04b6_44658489')) {function content_5929a63f9c04b6_44658489($_smarty_tpl) {?>    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-sm">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="btn btn-default btn-sm" style="float: right;" data-dismiss="modal"><i class="fa fa-times fa-lg" aria-hidden="false"></i></button>
                    <h4 class="modal-title">Login</h4>
                </div>
                <div class="modal-body ">
                    <form class="form-signin" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/login.php" method="post">
                        <label for="inputUser " class="sr-only ">Username</label>
                        <input type="text" id="inputUser" class="form-control" placeholder="Username" name="username" required=" " autofocus=" ">
                        <br>
                        <label for="inputPassword" class="sr-only ">Password</label>
                        <input type="password" id="inputPassword" class="form-control " placeholder="Password" name="password" required=" ">
                        <br>
                        <button class="btn btn-lg btn-success btn-block" type="submit" value="submit">Sign in</button>
                    </form>
                    <br>
                </div>    
            </div>
        </div>
    </div><?php }} ?>
