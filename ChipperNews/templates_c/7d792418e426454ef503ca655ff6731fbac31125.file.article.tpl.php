<?php /* Smarty version Smarty-3.1.15, created on 2017-05-12 17:47:59
         compiled from "C:\wamp64\www\LBAW-ChipperNews\ChipperNews\templates\articles\article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:277590ce55d4a1b31-41011843%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d792418e426454ef503ca655ff6731fbac31125' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW-ChipperNews\\ChipperNews\\templates\\articles\\article.tpl',
      1 => 1494611205,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '277590ce55d4a1b31-41011843',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_590ce55d4f3645_64210503',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'article' => 0,
    'subcategories' => 0,
    'subart' => 0,
    'USERNAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590ce55d4f3645_64210503')) {function content_590ce55d4f3645_64210503($_smarty_tpl) {?><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Article Page</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/bootstrap.min.css">
	<link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">
	<link href="https://fonts.googleapis.com/css?family=Lato|Lora|Playfair+Display:700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/bootstrap-social.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/styles-article.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://www.w3schools.com/lib/w3data.js"></script>	
	<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/bootstrap.min.js"></script>


</head>


<div id="bg">
	<img class="bg" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/circuit.jpg" alt="">
</div>

<div class="container article-snip" id="article-snip-5">
		<br>
		<h2 id="headline"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h2>
			<h6>By <a href=<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/viewprofile?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['author'];?>
 style="color:black; font-style:italic"><?php echo $_smarty_tpl->tpl_vars['article']->value['authorname'];?>
</a> <?php echo $_smarty_tpl->tpl_vars['article']->value['published_date'];?>
</h6>
            <?php $_smarty_tpl->tpl_vars['subcategories'] = new Smarty_variable(fetchSubcategories($_smarty_tpl->tpl_vars['article']->value['article_id']), null, 0);?>
			 <?php  $_smarty_tpl->tpl_vars['subart'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subart']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subcategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subart']->key => $_smarty_tpl->tpl_vars['subart']->value) {
$_smarty_tpl->tpl_vars['subart']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['subart']->value['category']==1) {?>
                                <span class="label label-primary "><?php echo $_smarty_tpl->tpl_vars['subart']->value['name'];?>
</span>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['subart']->value['category']==2) {?>
                                <span class="label label-warning "><?php echo $_smarty_tpl->tpl_vars['subart']->value['name'];?>
</span>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['subart']->value['category']==3) {?>
                                <span class="label label-info "><?php echo $_smarty_tpl->tpl_vars['subart']->value['name'];?>
</span>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['subart']->value['category']==4) {?>
                                <span class="label label-default "><?php echo $_smarty_tpl->tpl_vars['subart']->value['name'];?>
</span>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['subart']->value['category']==5) {?>
                                <span class="label label-danger "><?php echo $_smarty_tpl->tpl_vars['subart']->value['name'];?>
</span>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['subart']->value['category']==6) {?>
                                <span class="label label-success "><?php echo $_smarty_tpl->tpl_vars['subart']->value['name'];?>
</span>
                            <?php }?>     
            <?php } ?>
			<h3 id="lead"><?php echo $_smarty_tpl->tpl_vars['article']->value['lead'];?>
</h3>
			<div id="ratings">
					<span id="postext4" style="color:#357266"><?php echo $_smarty_tpl->tpl_vars['article']->value['posratings'];?>
</span>
					<button type="button" class="btn btn-default btn-circle btnlike">
					<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/chipart1.png" alt="" style="width:100%;height:100%;"> 
					</button>
					<span id="negtext4" style="color:#f11066"><?php echo $_smarty_tpl->tpl_vars['article']->value['negratings'];?>
</span>
					<button type="button" class="btn btn-default btn-circle btndislike">
					<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/chipart1.png" alt="" style="width:100%;height:100%;filter:hue-rotate(198deg);"> 
					</button>
			</div>
			<br>
			<div id="article-body-5">
                <div class="container" style=" width: 40%; height: 30%; margin-bottom:5%">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images\articles\<?php echo $_smarty_tpl->tpl_vars['article']->value['article_id'];?>
" alt="..." style=" width: 100%; height: auto; border-radius:5%">
                </div>
                <div id="content" class="container" style=" width: 100%; height: auto;">
                <?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>

                </div>
            </div>		
   </div>
   <!-- ONLY SHOW COMMENT BOX IF LOGGED IN -->
   <?php if ($_smarty_tpl->tpl_vars['USERNAME']->value) {?>
   <div class="row">
    
    <div class="col-md-6 col-md-offset-3">
    						<div class="widget-area no-padding blank">
								<div class="status-upload">
									<form >
										<div id="wmd-button-bar"></div>
							<textarea id="wmd-input" class="wmd-input"></textarea>
							
							
										<ul>
											<li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Picture"><i class="fa fa-picture-o"></i></a></li>
										</ul>
										<button type="submit" class="btn btn-success" style="background-color:#357266"> Submit</button>
									</form>
								</div><!-- Status Upload  -->
							</div><!-- Widget Area -->
	</div>
    </div>
    <?php }?>

	


<?php }} ?>
