<?php /* Smarty version Smarty-3.1.15, created on 2017-05-18 08:20:47
         compiled from "C:\wamp64\www\LBAW-ChipperNews\ChipperNews\templates\users\applycollab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7955591d595f7d5732-06376849%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '721612a79847398a9da81ac6d7ef819ebe93ecb4' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW-ChipperNews\\ChipperNews\\templates\\users\\applycollab.tpl',
      1 => 1493664803,
      2 => 'file',
    ),
    '4ded6cb95573457e45c0f510609f3c11dc700eb4' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW-ChipperNews\\ChipperNews\\templates\\users\\applycollab-form.tpl',
      1 => 1495092739,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7955591d595f7d5732-06376849',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'ERROR_MESSAGES' => 0,
    'error' => 0,
    'SUCCESS_MESSAGES' => 0,
    'success' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_591d595f86e745_71228837',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591d595f86e745_71228837')) {function content_591d595f86e745_71228837($_smarty_tpl) {?><head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Apply Collaborator Page</title>
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
actions/users/applycollab.php" class="ink-form ink-formvalidator xlarge-60 large-70 medium-90 all-100 push-center quarter-vertical-padding"
      enctype="multipart/form-data" method="post" data-lang="en_GB">
      <?php /*  Call merged included template "users/applycollab-form.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('users/applycollab-form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '7955591d595f7d5732-06376849');
content_591d595f8388b6_30607812($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "users/applycollab-form.tpl" */?>
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
<?php /* Smarty version Smarty-3.1.15, created on 2017-05-18 08:20:47
         compiled from "C:\wamp64\www\LBAW-ChipperNews\ChipperNews\templates\users\applycollab-form.tpl" */ ?>
<?php if ($_valid && !is_callable('content_591d595f8388b6_30607812')) {function content_591d595f8388b6_30607812($_smarty_tpl) {?><div class="container form-div" id="applycollab">
        <div class="logo">
           	<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/search/frontpage.php">
               <img class="logo" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/logo_navigation.png" alt="Chipper News" align="middle">
            </a>
        </div>
        <form class="form-horizontal" id="fapplycollab" method="post">
            <fieldset class="responsive-fieldset">
                <legend>Apply for Collaborator</legend>                
                <div class="form-group">
                    <label> Describe yourself and your achievements briefly <i class="fa fa-asterisk" aria-hidden="false"></i></label>
                    <div class="col-sm-12">
                        <textarea class="form-control" rows="8" cols="50" id="description" name="description" required></textarea>
                        <span class="help-block">Please do your best to summarise.</span>
                    </div>
                </div>
                <div class="form-group">
                    <label> What is your motivation for applying to this position <i class="fa fa-asterisk" aria-hidden="false"></i></label>
                    <div class="col-sm-12">
                        <textarea class="form-control" rows="8" cols="50" id="motivation" placeholder="Your motivation" name="motivation" required></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label> References from previous employers </label>
                    <div class="col-sm-12">
                        <textarea class="form-control" rows="8" cols="50" id="refs" placeholder="Your references" name="refs"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label> News outlets you're currently associated with </label>
                    <div class="col-sm-12">
                        <textarea class="form-control" rows="8" cols="50" id="assoc" placeholder="Associated outlets" name="assoc"></textarea>
                    </div>
                </div>
                <!--<label> Image <input type="file" id="uploadImage" name="pic" accept="image/id"></label>-->
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
