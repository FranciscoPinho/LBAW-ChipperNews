<?php /* Smarty version Smarty-3.1.15, created on 2017-04-26 21:27:45
         compiled from "C:\wamp64\www\LBAW-ChipperNews\chippernews\templates\articles\newarticle-form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30711590110d1304745-54630813%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '196265ee1603edfd62c9f16160df34e80c2d6479' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW-ChipperNews\\chippernews\\templates\\articles\\newarticle-form.tpl',
      1 => 1493242004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30711590110d1304745-54630813',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_590110d13393a2_48582522',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590110d13393a2_48582522')) {function content_590110d13393a2_48582522($_smarty_tpl) {?>
  <div class="form-div" id="new_article">
		<form class="form-horizontal" id="form-new-article" method="post">
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
                <div class="form-group">
                	<label>Article Body:</label>
                 <div id="editor-container" style="width: 85%">
                        <textarea rows="15" cols="50" placeholder="Article Text" ></textarea>
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
