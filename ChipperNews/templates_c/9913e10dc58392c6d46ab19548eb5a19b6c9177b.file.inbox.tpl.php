<?php /* Smarty version Smarty-3.1.15, created on 2017-06-01 16:52:00
         compiled from "C:\wamp64\www\LBAW-ChipperNews\ChipperNews\templates\users\inbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8245592c96d0445608-53009050%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9913e10dc58392c6d46ab19548eb5a19b6c9177b' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW-ChipperNews\\ChipperNews\\templates\\users\\inbox.tpl',
      1 => 1496098688,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8245592c96d0445608-53009050',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_592c96d04c2ad5_09064654',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'messages' => 0,
    'msg' => 0,
    'USERNAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592c96d04c2ad5_09064654')) {function content_592c96d04c2ad5_09064654($_smarty_tpl) {?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inbox</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/styles-posthistory.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/styles-header.css">
    <link href="https://fonts.googleapis.com/css?family=Lato|Lora|Playfair+Display:700" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://www.w3schools.com/lib/w3data.js"></script>
	<span class="base_url" id="base_url" hidden><?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
</span>
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/bootstrap.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/main.js"></script>
    <!-- Optional Bootstrap theme -->
    <!--<link rel="stylesheet" href="css/bootstrap-theme.min.css">-->
</head>

<body>

    <div class=allcontent>
        <div id="bg">
            <img class="bg" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/circuit.jpg" alt="">
        </div>

        <div class="container-fluid" id="postheader">
            <h1 class="nf"> Inbox </h1>
        </div>

        <?php  $_smarty_tpl->tpl_vars['msg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['msg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['messages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->key => $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->_loop = true;
?>
            <div class="container comment-snip" style="width:60%;min-height:50px;">
                    <div class="mycomment ">
                    <p class="text-center">From: <?php echo $_smarty_tpl->tpl_vars['msg']->value['username'];?>
 </p>
                    <div class="caption text-center" style="word-wrap: break-word;"> <?php echo $_smarty_tpl->tpl_vars['msg']->value['content'];?>
</div>
                    </div>
            </div>
         <?php } ?>

        <div class="container" style="width:60%">
        <form class="form-horizontal" id="msg" method="post" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/send.php">
         <fieldset class="responsive-fieldset">
            <div class="form-group">
               <label for="to"> To: <br>  </label>
				<div class="col-sm-12">
                <input type="text" id="receiver" class="form-control"  name="receiver" required>
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
          <br>
    </div>
	
<script>
function markRead(user_id)
{
                var base_url = $("#base_url").text();
                return $.ajax({
                    type: "POST",
                    url: base_url + "actions/users/accept_collabapp.php",
                    data: "user_id=" + encodeURI(user_id),
                    success: updateInbox
                });
}
		
function reload(data){
			location.reload();
}
</script>
</body>



</html><?php }} ?>
