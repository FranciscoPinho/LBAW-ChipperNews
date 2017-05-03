<?php /* Smarty version Smarty-3.1.15, created on 2017-05-03 17:13:29
         compiled from "C:\wamp64\www\LBAW-ChipperNews\chippernews\templates\articles\newarticle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:190635900b7dea01a76-79165625%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd378aef303fe2659a1a58ba39c9abeac5991aea7' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW-ChipperNews\\chippernews\\templates\\articles\\newarticle.tpl',
      1 => 1493825893,
      2 => 'file',
    ),
    '196265ee1603edfd62c9f16160df34e80c2d6479' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW-ChipperNews\\chippernews\\templates\\articles\\newarticle-form.tpl',
      1 => 1493831607,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '190635900b7dea01a76-79165625',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5900b7dea2d2f5_43228567',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5900b7dea2d2f5_43228567')) {function content_5900b7dea2d2f5_43228567($_smarty_tpl) {?><head>
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
actions/articles/newarticle.php" class="form-horizontal" id="form-new-article"
      enctype="multipart/form-data" method="post" data-lang="en_GB" >
      <?php /*  Call merged included template "articles/newarticle-form.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('articles/newarticle-form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '190635900b7dea01a76-79165625');
content_590a0fb999b553_64581709($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "articles/newarticle-form.tpl" */?>
    </form>

   
  </body>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.15, created on 2017-05-03 17:13:29
         compiled from "C:\wamp64\www\LBAW-ChipperNews\chippernews\templates\articles\newarticle-form.tpl" */ ?>
<?php if ($_valid && !is_callable('content_590a0fb999b553_64581709')) {function content_590a0fb999b553_64581709($_smarty_tpl) {?>
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
				<div class="form-group">
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

				<div class="form-group" id="tagselection">
					<div class="table-responsive">
					<table class="table">
						<thead>
						<tr>	
							<th onclick="columnClick('1')">Programming</th>
							<th onclick="columnClick('2')">Hardware</th>
							<th onclick="columnClick('3')">Software</th>
							<th onclick="columnClick('4')">Industry</th>
							<th onclick="columnClick('5')">Technology</th>
							<th onclick="columnClick('6')">Others</th>
						</tr>
						</thead>
					<tbody>
					<tr>

					<td>
						<div id="progtable" hidden>
							<table class="table">
								<?php  $_smarty_tpl->tpl_vars['progcat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['progcat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['programming']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['progcat']->key => $_smarty_tpl->tpl_vars['progcat']->value) {
$_smarty_tpl->tpl_vars['progcat']->_loop = true;
?>
								<tr><input type="checkbox" name="tags" value=<?php echo $_smarty_tpl->tpl_vars['progcat']->value['sub_id'];?>
><?php echo $_smarty_tpl->tpl_vars['progcat']->value['name'];?>
</tr><br>
								<?php } ?>
							</table>
						</div>
					</td>

					<td>
						<div  id="hardtable" hidden>
							<table class="table">
								<?php  $_smarty_tpl->tpl_vars['hardcat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hardcat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hardware']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hardcat']->key => $_smarty_tpl->tpl_vars['hardcat']->value) {
$_smarty_tpl->tpl_vars['hardcat']->_loop = true;
?>
								<tr><input type="checkbox" name="tags" value=<?php echo $_smarty_tpl->tpl_vars['hardcat']->value['sub_id'];?>
><?php echo $_smarty_tpl->tpl_vars['hardcat']->value['name'];?>
</tr><br>
								<?php } ?>
							</table>
						</div>
					</td>

					<td>
						<div id="softtable" hidden>
							<table class="table">
								<?php  $_smarty_tpl->tpl_vars['softcat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['softcat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['software']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['softcat']->key => $_smarty_tpl->tpl_vars['softcat']->value) {
$_smarty_tpl->tpl_vars['softcat']->_loop = true;
?>
								<tr><input type="checkbox" name="tags" value=<?php echo $_smarty_tpl->tpl_vars['softcat']->value['sub_id'];?>
><?php echo $_smarty_tpl->tpl_vars['softcat']->value['name'];?>
</tr><br>
								<?php } ?>
							</table>
						</div>
					</td>

					<td>
						<div id="indtable" hidden>
							<table class="table">
								<?php  $_smarty_tpl->tpl_vars['indcat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['indcat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['industry']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['indcat']->key => $_smarty_tpl->tpl_vars['indcat']->value) {
$_smarty_tpl->tpl_vars['indcat']->_loop = true;
?>
								<tr><input type="checkbox" name="tags" value=<?php echo $_smarty_tpl->tpl_vars['indcat']->value['sub_id'];?>
><?php echo $_smarty_tpl->tpl_vars['indcat']->value['name'];?>
</tr><br>
								<?php } ?>
							</table>
						</div>
					</td>

					<td>
						<div id="techtable" hidden>
							<table class="table">
								<?php  $_smarty_tpl->tpl_vars['techcat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['techcat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['technology']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['techcat']->key => $_smarty_tpl->tpl_vars['techcat']->value) {
$_smarty_tpl->tpl_vars['techcat']->_loop = true;
?>
								<tr><input type="checkbox" name="tags" value=<?php echo $_smarty_tpl->tpl_vars['techcat']->value['sub_id'];?>
><?php echo $_smarty_tpl->tpl_vars['techcat']->value['name'];?>
</tr><br>
								<?php } ?>
							</table>
						</div>
					</td>

					<td>
						<div id="othertable" hidden>
							<table class="table">
								<?php  $_smarty_tpl->tpl_vars['othercat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['othercat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['others']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['othercat']->key => $_smarty_tpl->tpl_vars['othercat']->value) {
$_smarty_tpl->tpl_vars['othercat']->_loop = true;
?>
								<tr><input type="checkbox" name="tags" value=<?php echo $_smarty_tpl->tpl_vars['othercat']->value['sub_id'];?>
><?php echo $_smarty_tpl->tpl_vars['othercat']->value['name'];?>
</tr><br>
								<?php } ?>
							</table>
						</div>
					</td>
					</tr>
					</tbody>
					</table>
					
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
