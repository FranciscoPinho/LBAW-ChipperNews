<?php /* Smarty version Smarty-3.1.15, created on 2017-05-17 11:34:27
         compiled from "C:\wamp64\www\LBAW-ChipperNews\ChipperNews\templates\users\register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:542158f725a356f877-99856435%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '144ed6230a1a1221ed0a4d4d78be37888c2ed999' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW-ChipperNews\\ChipperNews\\templates\\users\\register.tpl',
      1 => 1493241368,
      2 => 'file',
    ),
    '547abb3a0737a1926ccc648725a920a95d1f086a' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW-ChipperNews\\ChipperNews\\templates\\users\\register-form.tpl',
      1 => 1492635526,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '542158f725a356f877-99856435',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f725a3617d50_41539998',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'ERROR_MESSAGES' => 0,
    'error' => 0,
    'SUCCESS_MESSAGES' => 0,
    'success' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f725a3617d50_41539998')) {function content_58f725a3617d50_41539998($_smarty_tpl) {?><head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register Page</title>
  <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/styles-forms.css">
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://www.w3schools.com/lib/w3data.js"></script>
  <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/bootstrap.min.js"></script>
   <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/main.js"></script>
  <!-- Optional Bootstrap theme -->
  <!--<link rel="stylesheet" href="css/bootstrap-theme.min.css">-->
</head>

<div id="bg">
  <img class="bg" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/circuit.jpg" alt="">
</div>


  
  <div class="ink-grid content-drawer">
    <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/register.php" class="ink-form ink-formvalidator xlarge-60 large-70 medium-90 all-100 push-center quarter-vertical-padding"
      enctype="multipart/form-data" method="post" data-lang="en_GB">
      <?php /*  Call merged included template "users/register-form.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('users/register-form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '542158f725a356f877-99856435');
content_591c3543a13671_48358059($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "users/register-form.tpl" */?>
    </form>
  </div>
  <div id="error_messages">
                            <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
                            <div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<a class="close" href="#">X</a></div>
                            <?php } ?>
                            </div>
                            <div id="success_messages">
                            <?php  $_smarty_tpl->tpl_vars['success'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['success']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SUCCESS_MESSAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['success']->key => $_smarty_tpl->tpl_vars['success']->value) {
$_smarty_tpl->tpl_vars['success']->_loop = true;
?>
                            <div class="success"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
<a class="close" href="#">X</a></div>
                            <?php } ?>
                            </div>
  <?php }} ?>
<?php /* Smarty version Smarty-3.1.15, created on 2017-05-17 11:34:27
         compiled from "C:\wamp64\www\LBAW-ChipperNews\ChipperNews\templates\users\register-form.tpl" */ ?>
<?php if ($_valid && !is_callable('content_591c3543a13671_48358059')) {function content_591c3543a13671_48358059($_smarty_tpl) {?><div class="container form-div" id="register">
	<div class="logo">
		<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/search/frontpage.php">
			<img class="logo" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/logo_navigation.png" alt="Chipper News" align="middle">
		</a>
	</div>
	<form class="form-horizontal" id="fregister" method="post">
		<fieldset class="responsive-fieldset">
			<legend>Register Page</legend>
			<div class="form-group">
				<label> Username <i class="fa fa-asterisk" aria-hidden="false"></i></label>
				<div class="container col-sm-12">
					<div class="input-group">
						<div class="input-group-btn">
							<button class="btn btn-default"><i class="fa fa-user"></i></button>
						</div>
						<?php if ($_smarty_tpl->tpl_vars['FORM_VALUES']->value['username']) {?>
						<input type="text" class="form-control" id="username" placeholder="Please input a unique, valid username" name="username"
						    value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['username'];?>
" required> <?php } else { ?>
						<input type="text" class="form-control" id="username" placeholder="Please input a unique, valid username" name="username"
						    required> <?php }?>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label>Name <i class="fa fa-asterisk" aria-hidden="false"></i></label>
				<div class="col-sm-12">
					<div class="input-group">
						<div class="input-group-btn">
							<button class="btn btn-default"><i class="fa fa-id-card-o"></i></button>
						</div>
						<?php if ($_smarty_tpl->tpl_vars['FORM_VALUES']->value['name']) {?>
						<input type="text" class="form-control" id="name" placeholder="Jane Doe" name="name" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['name'];?>
"
						    required> 
							<?php } else { ?>
						<input type="text" class="form-control" id="name" placeholder="Jane Doe" name="name" required>						<?php }?>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label>Email <i class="fa fa-asterisk" aria-hidden="false"></i></label>
				<div class="col-sm-12">
					<div class="input-group">
						<div class="input-group-btn">
							<button class="btn btn-default"><i class="fa fa-envelope-o"></i></button>
						</div>
						<?php if ($_smarty_tpl->tpl_vars['FORM_VALUES']->value['email']) {?>
						<input type="email" class="form-control" id="email" placeholder="your@email.com" name="email" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['email'];?>
"
						    required> <?php } else { ?>
						<input type="email" class="form-control" id="email" placeholder="your@email.com" name="email" required>
						<?php }?>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label>Password <i class="fa fa-asterisk" aria-hidden="false"></i></label>
				<div class="col-sm-12">
					<div class="input-group">
						<div class="input-group-btn">
							<button class="btn btn-default"><i class="fa fa-unlock-alt"></i></button>
						</div>
						<input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
					</div>
					<div class="col-sm-12">
						<p class="help-block">Should be at least 8 characters long.</p>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label> Confirm Password <i class="fa fa-asterisk" aria-hidden="false"></i></label>
				<div class="col-sm-12">
					<div class="input-group">
						<div class="input-group-btn">
							<button class="btn btn-default"><i class="fa fa-unlock-alt"></i></button>
						</div>
						<input type="password" class="form-control" id="passw2" placeholder="Confirm password" name="password2" required>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label> Date of birth </label>
				<div class="col-sm-12">
					<div class="input-group">
						<div class="input-group-btn">
							<button class="btn btn-default"><i class="fa fa-calendar"></i></button>
						</div>
						<input type="date" class="form-control" id="birthdate" placeholder="Date of birth" name="birthdate">
					</div>
				</div>
			</div>
			<div class="form-group">
				<label> Short Bio </label>
				<div class="col-sm-12">
					<textarea class="form-control" rows="10" cols="30" id="bio" name="bio"></textarea>
					<p class="help-block">Tell everyone a bit about yourself!</p>
				</div>
			</div>
			<div class="form-group">
				<label> Select your country <br>  </label>
				<div class="col-sm-12">
					<select class="form-control" name="local_id" id="local">
						<option label="(none)" value="null">Pick one...</option>
       			 	<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
         			 <?php if ($_smarty_tpl->tpl_vars['id']->value==$_smarty_tpl->tpl_vars['FORM_VALUES']->value['id']) {?>
          				<option label="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</option>
         			 <?php } else { ?>
         			 <option label="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</option>
         			 <?php }?>
        			<?php } ?>
     				 </select>
				</div>
			</div>
			<div class="form-group">
				<label for="inputFile">Upload an avatar</label>
				<div class="col-sm-8">
					<input type="file" id="inputFile" name="pic" accept="image/*">
				</div>
				<div class="col-sm-8">
					<p class="help-block">Accepted files consist of all image formats.</p>
				</div>
			</div>
			<div class="container" id="note">
				<div class="footnote">
					<small> Fields with an asterisk (<i class="fa fa-asterisk" aria-hidden="false"></i>) are mandatory. </small>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4 col-sm-offset-4">
					<button type="reset" class="btn btn-default">Cancel</button>
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</div>
		</fieldset>
	</form>
</div><?php }} ?>
