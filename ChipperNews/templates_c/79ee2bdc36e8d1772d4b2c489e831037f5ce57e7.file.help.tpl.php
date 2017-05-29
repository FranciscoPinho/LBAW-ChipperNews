<?php /* Smarty version Smarty-3.1.15, created on 2017-05-29 22:24:04
         compiled from "C:\wamp64\www\LBAW\LBAW-ChipperNews\ChipperNews\templates\users\help.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25869592c9cf3c543c4-19294340%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79ee2bdc36e8d1772d4b2c489e831037f5ce57e7' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW\\LBAW-ChipperNews\\ChipperNews\\templates\\users\\help.tpl',
      1 => 1496096643,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25869592c9cf3c543c4-19294340',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_592c9cf3d569a2_25696961',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'USERNAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592c9cf3d569a2_25696961')) {function content_592c9cf3d569a2_25696961($_smarty_tpl) {?>  <nav class="navbar navbar-default ">
        <h1 class="text-center " href="# "> Help </h1>
    </nav>
<div class="container">
<h2>FAQ - Frequently Asked Questions</h2>
<br><br>
<p><b><i>What's with the trophy I see sometimes on some user's profiles?</i></b></p>
<p>That's the top collaborator medal. It goes to the user with the highest number of contribution points, so if you want it as well, make sure you create good content!</p>
<br>
<p><b><i>How do I check my post history?</i></b></p>
<p>Click on the profile and on the side menu on the left click comment history</p>
<br>
<p><b><i>How do I send messages?</i></b></p>
<p>Click on the profile and on the side menu click inbox, in the inbox page click compose message</p>
<br>
<p><b><i>How do I make friends?</i></b></p>
<p>Click on the name of the user you wanna befriend in the comments or articles or wherever else you might find him and in that user's profile, click the add friend button</p>
<br><br>

<h4><b>If any question or problem remains or arises, you can always send a private message to the administration through here </b></h4>
<br><br>
<?php if (isset($_SESSION['user_id'])) {?>
<div class="container" style="width:60%">
        <form class="form-horizontal" id="fpassw" method="post" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/send.php">
         <fieldset class="responsive-fieldset">
            <div class="form-group">
               <label for="to"> To: <br>  </label>
				<div class="col-sm-12">
                <input type="text" id="receiver" class="form-control"  name="receiver" value="johnny_boy" disabled>
                </div>
            </div>
         <div class="form-group">
				<label for="from"> From: <br>  </label>
				<div class="col-sm-12">
					<input type="text" id="sender" class="form-control"  name="sender" value="<?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
" disabled>
				</div>
		</div>
        <div class="form-group">
                        <label>Message:</label>
                         <div class="col-sm-12">
                        <textarea class="form-control" rows="8" cols="20" id="message" name="message" required></textarea>
                        </div>
                        <div class="col-sm-12">
                        <br><br>
                         </div>
          </div>
                <button class="btn btn-lg btn-success btn-block center-block" style="width:50%"type="submit" value="submit" >Send Message</button>
                <br>
            </fieldset>
        </form>
      
        </div>
<?php } else { ?>
<h3>If you wish to contact the administration, create an account first by clicking on the register link in the header</h3
<?php }?>
</div>
<br>
<br><?php }} ?>
