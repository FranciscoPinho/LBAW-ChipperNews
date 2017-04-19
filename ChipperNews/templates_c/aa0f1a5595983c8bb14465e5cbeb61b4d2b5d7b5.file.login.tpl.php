<?php /* Smarty version Smarty-3.1.15, created on 2017-04-19 10:22:18
         compiled from "C:\wamp64\www\LBAW-ChipperNews\ChipperNews\templates\users\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1228958f737dd6c8253-72706655%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa0f1a5595983c8bb14465e5cbeb61b4d2b5d7b5' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW-ChipperNews\\ChipperNews\\templates\\users\\login.tpl',
      1 => 1492597334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1228958f737dd6c8253-72706655',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f737dd6cb191_13923568',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f737dd6cb191_13923568')) {function content_58f737dd6cb191_13923568($_smarty_tpl) {?>    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close " data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Login</h4>
                </div>
                <div class="modal-body ">
                    <form class="form-signin" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/login.php" method="post">
                        <label for="inputEmail " class="sr-only ">Email address</label>
                        <input type="email " id="inputEmail " class="form-control " placeholder="Email address " required=" " autofocus=" ">
                        <label for="inputPassword " class="sr-only ">Password</label>
                        <input type="password " id="inputPassword " class="form-control " placeholder="Password " required=" ">
                        <div class="checkbox">
                            <label>
                        <input type="checkbox" value="remember-me "> Remember me
                    </label>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block " type="submit ">Sign in</button>
                        <a class="btn btn-block btn-social btn-facebook ">
                            <span class="fa fa-facebook "></span> Sign in with Facebook
                        </a>
                    </form>
                </div>
            </div>

        </div>
    </div><?php }} ?>
