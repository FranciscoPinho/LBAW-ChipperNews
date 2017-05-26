<?php /* Smarty version Smarty-3.1.15, created on 2017-05-26 15:55:16
         compiled from "C:\wamp64\www\LBAW-ChipperNews\ChipperNews\templates\articles\edit-article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:92565927615a66bce1-50439354%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c33f10c1087caa5f86039de7f0c2a44bd7cd8775' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW-ChipperNews\\ChipperNews\\templates\\articles\\edit-article.tpl',
      1 => 1495814056,
      2 => 'file',
    ),
    'b1499b3ba41ee4175f06180203cc780d83af9e1c' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW-ChipperNews\\ChipperNews\\templates\\articles\\edit-article-form.tpl',
      1 => 1495814033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92565927615a66bce1-50439354',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5927615a78af98_39590174',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5927615a78af98_39590174')) {function content_5927615a78af98_39590174($_smarty_tpl) {?><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit article page</title>

  <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/styles-forms.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/bootstrap.min.js"></script>
  <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/newarticle.js"></script>
    <link href="https://cdn.quilljs.com/1.2.4/quill.snow.css" rel="stylesheet">
   <script src="https://cdn.quilljs.com/1.2.4/quill.min.js" type="text/javascript"></script>

</head>
<div id="bg">
  <img class="bg" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/circuit.jpg" alt="">
</div>

  <body>
  

    <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/articles/update.php" class="form-horizontal" id="form-edit-article"
      enctype="multipart/form-data" method="post" data-lang="en_GB" >
      <?php /*  Call merged included template "articles/edit-article-form.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('articles/edit-article-form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '92565927615a66bce1-50439354');
content_59284fe44f9da1_66421794($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "articles/edit-article-form.tpl" */?>
    </form>

   
  </body><?php }} ?>
<?php /* Smarty version Smarty-3.1.15, created on 2017-05-26 15:55:16
         compiled from "C:\wamp64\www\LBAW-ChipperNews\ChipperNews\templates\articles\edit-article-form.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59284fe44f9da1_66421794')) {function content_59284fe44f9da1_66421794($_smarty_tpl) {?><div class="form-div" id="new_article">
		<form  method="post">
			<fieldset>
				<legend>Edit Article</legend>
				<div class="form-group">
					<label>Title:</label>
						<div class="col-lg-10">
							<input type="text" class="form-control center-block" required id="title" placeholder="Title" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
" name="title">
						</div>
                        <input type="hidden" required id="article_id" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['article_id'];?>
" name="article_id">
				</div>
				<div class="form-group">
					<label>Article Lead:</label>
						<div class="col-lg-10">
							<textarea class="form-control center-block" required rows="4" cols="50" id="headline" name="lead"><?php echo $_smarty_tpl->tpl_vars['article']->value['lead'];?>
</textarea>
						</div>
					
				</div>
				
                <div class="form-group">
                	<label >Article Body:</label>
                        <div class="col-lg-10">
                        <textarea class="form-control center-block" required rows="10" cols="50" id="body"  name="body"><?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>
</textarea>
                        </div>
				
                </div>
               
           
                    <button type="button" onclick="preview()" class="btn btn-default center-block">Preview</button>
                <div id="preview" class="container" style="opacity:0.7;width: 70%; height: auto;">
                </div>
                <script>
                function preview(){
                    $("#preview").empty();
                    $("#preview").append($("#body").val());
                }
                </script>
                <br><br>    
				<div class="form-group">
                    <div class="col-lg-10">
                            <button type="submit" class="btn btn-primary center-block">Update</button>
                    </div>
                </div>
			</fieldset>
			
		</form>
	</div>
      <?php }} ?>
