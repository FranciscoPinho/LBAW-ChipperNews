<?php /* Smarty version Smarty-3.1.15, created on 2017-05-01 19:10:00
         compiled from "C:\wamp64\www\LBAW\LBAW-ChipperNews\ChipperNews\templates\articles\newarticle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:164590788084d89f4-22499997%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26dd48167e6d7e2007c3eec6e94707c42fae125b' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW\\LBAW-ChipperNews\\ChipperNews\\templates\\articles\\newarticle.tpl',
      1 => 1493664732,
      2 => 'file',
    ),
    '2105b59dc37c1705fcd1c40bd6298627b9f5172a' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW\\LBAW-ChipperNews\\ChipperNews\\templates\\articles\\newarticle-form.tpl',
      1 => 1493664732,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164590788084d89f4-22499997',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5907880863b804_32461945',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5907880863b804_32461945')) {function content_5907880863b804_32461945($_smarty_tpl) {?><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New Article Page</title>

  <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/styles-forms.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/bootstrap.min.js"></script>
    <link href="https://cdn.quilljs.com/1.2.4/quill.snow.css" rel="stylesheet">
   <script src="https://cdn.quilljs.com/1.2.4/quill.min.js" type="text/javascript"></script>

</head>
<div id="bg">
  <img class="bg" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/circuit.jpg" alt="">
</div>

  <body>
  

    <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/articles/newarticle.php" class="form-horizontal" id="form-new-article"
      enctype="multipart/form-data" method="post" data-lang="en_GB" >
      <?php /*  Call merged included template "articles/newarticle-form.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('articles/newarticle-form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '164590788084d89f4-22499997');
content_590788085e2f97_62619787($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "articles/newarticle-form.tpl" */?>
    </form>

   
  </body>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.15, created on 2017-05-01 19:10:00
         compiled from "C:\wamp64\www\LBAW\LBAW-ChipperNews\ChipperNews\templates\articles\newarticle-form.tpl" */ ?>
<?php if ($_valid && !is_callable('content_590788085e2f97_62619787')) {function content_590788085e2f97_62619787($_smarty_tpl) {?>
  <div class="form-div" id="new_article">
		<form  method="post">
			<fieldset>
				<legend>New Article</legend>
				<div class="form-group">
					<label>Title:</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" required id="title" placeholder="Title" name="title">
						</div>
					
				</div>
				<div class="form-group" id="some">
					<label>Article Lead:</label>
						<div class="col-lg-10">
							<textarea class="form-control" required rows="4" cols="50" id="headline" placeholder="Article Headline" name="lead"></textarea>
						</div>
					
				</div>
				
                <div class="form-group" id="bodybox" style="
												max-width:75%;
												
												margin-left:0;">
                	<label style="display: block;
								 padding-left:0;
 								 margin-left:0;
								 margin-bottom: 0px;">Article Body:</label>
                 <div id="editor-container" style=" min-height: 100px;
  display: block;
  clear: both;">
                        <textarea id="contentstuff"></textarea>
				 </div>
				    <input class="form-control"  id="body" type="hidden" name="body" required>
                </div>
		
						
                     
                   
                <script>
                var quill = new Quill('#editor-container', {
                modules: {
                    toolbar: [
                     ['bold', 'italic','underline'],
                     ['link', 'blockquote', 'code-block', 'image','video'],
                     [{ list: 'ordered' }, { list: 'bullet' }],
                      [{ 'size': ['small', false, 'large', 'huge'] }],  
                      [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
                     ]
                },
                theme: 'snow'
                });
                quill.on('text-change', function() {
                  var html = quill.root.innerHTML;
                  var content = document.getElementById('body');
                  content.value = html;
                 });
			
                </script>

				<div class="form-group">
					<label>Tags:</label>
						<div class="col-lg-10">
							<textarea class="form-control" required id="tags" placeholder="Tags" name="tags"></textarea>
						</div>
					
				</div>
				<div class="form-group">
					<label>Image:</label>
						<div class="col-lg-10">
							<input type="file" id="inputFile" name="pic" accept="image/*">
						</div>
				</div>

				<div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <button type="reset" class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
			</fieldset>
			
		</form>
	</div>
      <?php }} ?>
