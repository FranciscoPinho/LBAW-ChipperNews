<?php /* Smarty version Smarty-3.1.15, created on 2017-05-28 10:47:51
         compiled from "C:\wamp64\www\LBAW-ChipperNews\ChipperNews\templates\users\applist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:143555929a80a3c9db6-08763611%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63512e05825dabc2cc5f39393d90ef65ab8f1633' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW-ChipperNews\\ChipperNews\\templates\\users\\applist.tpl',
      1 => 1495968435,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143555929a80a3c9db6-08763611',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5929a80a47fcc8_38061217',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'apps' => 0,
    'app' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5929a80a47fcc8_38061217')) {function content_5929a80a47fcc8_38061217($_smarty_tpl) {?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Applications Review</title>
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
            <h1 class="nf"> Applications Review </h1>
        </div>
         <?php  $_smarty_tpl->tpl_vars['app'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['app']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['apps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['app']->key => $_smarty_tpl->tpl_vars['app']->value) {
$_smarty_tpl->tpl_vars['app']->_loop = true;
?>
            <div class="container comment-snip" id="">
                <div class="app">
                    <div class="mycomment">
						
                        <h6>(here will appeat the name but for now ID) By <a style="color:black; font-style:italic"><?php echo $_smarty_tpl->tpl_vars['app']->value['user_id'];?>
</a></h6>
                        <p>Achievements: <?php echo $_smarty_tpl->tpl_vars['app']->value['achievements'];?>
</p>
						<p>Motivation: <?php echo $_smarty_tpl->tpl_vars['app']->value['motivation'];?>
</p>
						<p>References: <?php echo $_smarty_tpl->tpl_vars['app']->value['reference'];?>
</p>
						<button type="button" class="btn btn-default" onclick="deleteApp('<?php echo $_smarty_tpl->tpl_vars['app']->value['user_id'];?>
')">Delete</button>
						<button type="button" class="btn btn-primary" onclick="acceptApp('<?php echo $_smarty_tpl->tpl_vars['app']->value['user_id'];?>
')">Accept</button> 
                    </div>
                </div>
            </div>
         <?php } ?>
    </div>
	
<script>
function deleteApp(user_id){
                var base_url = $("#base_url").text();
                return $.ajax({
                    type: "POST",
                    url: base_url + "actions/users/delete_collabapp.php",
                    data: "user_id=" + encodeURI(user_id),
                    success: reload
                });
		}
		
function acceptApp(user_id){
                var base_url = $("#base_url").text();
                return $.ajax({
                    type: "POST",
                    url: base_url + "actions/users/accept_collabapp.php",
                    data: "user_id=" + encodeURI(user_id),
                    success: reload
                });
		}
		
function reload(data){
			location.reload();
		}
</script>
</body>



</html><?php }} ?>
