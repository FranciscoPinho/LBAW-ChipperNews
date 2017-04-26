<?php /* Smarty version Smarty-3.1.15, created on 2017-04-24 12:26:18
         compiled from "C:\wamp64\www\LBAW-ChipperNews\ChipperNews\templates\users\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:791458fdeeeaa939c4-23699639%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa0f1a5595983c8bb14465e5cbeb61b4d2b5d7b5' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW-ChipperNews\\ChipperNews\\templates\\users\\login.tpl',
      1 => 1492619723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '791458fdeeeaa939c4-23699639',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58fdeeeaac7e79_64164424',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fdeeeaac7e79_64164424')) {function content_58fdeeeaac7e79_64164424($_smarty_tpl) {?>    <div id="myModal" class="modal fade" role="dialog">
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
                        <label for="inputUser " class="sr-only ">Username</label>
                        <input type="text" id="inputUser" class="form-control" placeholder="Username" name="username" required=" " autofocus=" ">
                        <label for="inputPassword" class="sr-only ">Password</label>
                        <input type="password" id="inputPassword" class="form-control " placeholder="Password" name="password" required=" ">
                        <button class="btn btn-lg btn-primary btn-block" type="submit" value="submit">Sign in</button>
                    </form>
                    <br>
                    
                    
                       <a class="btn btn-block btn-social btn-facebook ">
                            <span class="fa fa-facebook "></span> Sign in with Facebook
                        </a>

                         
                </div>
              
            </div>

        </div>
    </div><?php }} ?>
