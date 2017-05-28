<?php /* Smarty version Smarty-3.1.15, created on 2017-05-27 14:30:11
         compiled from "C:\wamp64\www\LBAW\LBAW-ChipperNews\ChipperNews\templates\users\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2953858f7c781675b60-82520391%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6d12346a493fdbdef8b6f5d63400d504743f306' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW\\LBAW-ChipperNews\\ChipperNews\\templates\\users\\login.tpl',
      1 => 1495891737,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2953858f7c781675b60-82520391',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f7c7816803f3_71945437',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f7c7816803f3_71945437')) {function content_58f7c7816803f3_71945437($_smarty_tpl) {?>    <div id="myModal" class="modal fade" role="dialog">
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
                       <a class="btn btn-block btn-social btn-facebook ">
                            <span class="fa fa-facebook "></span> Sign in with Facebook
                        </a> 
                </div>    
            </div>
        </div>
    </div><?php }} ?>
