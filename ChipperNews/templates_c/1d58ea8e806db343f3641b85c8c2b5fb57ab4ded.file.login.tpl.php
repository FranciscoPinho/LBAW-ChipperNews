<?php /* Smarty version Smarty-3.1.15, created on 2017-04-19 12:44:46
         compiled from "C:\wamp64\www\LBAW-ChipperNews\chippernews\templates\users\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:450358f75bbe51c1f6-73991852%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d58ea8e806db343f3641b85c8c2b5fb57ab4ded' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW-ChipperNews\\chippernews\\templates\\users\\login.tpl',
      1 => 1492605460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '450358f75bbe51c1f6-73991852',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f75bbe51ef37_19946270',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f75bbe51ef37_19946270')) {function content_58f75bbe51ef37_19946270($_smarty_tpl) {?>    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close " data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Login</h4>
                </div>
                <div class="modal-body ">
                    <form class="form-signin" action="http://localhost/LBAW-ChipperNews/ChipperNews/actions/users/login.php" method="post">
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
