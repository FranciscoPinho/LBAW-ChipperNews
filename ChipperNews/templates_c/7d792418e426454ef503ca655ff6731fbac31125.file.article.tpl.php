<?php /* Smarty version Smarty-3.1.15, created on 2017-05-27 17:13:37
         compiled from "C:\wamp64\www\LBAW-ChipperNews\ChipperNews\templates\articles\article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:51185929b3c11e5712-01404143%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d792418e426454ef503ca655ff6731fbac31125' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW-ChipperNews\\ChipperNews\\templates\\articles\\article.tpl',
      1 => 1495897605,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51185929b3c11e5712-01404143',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'article_id' => 0,
    'article' => 0,
    'subcategories' => 0,
    'subart' => 0,
    'rating' => 0,
    'USERNAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5929b3c15162e5_93735433',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5929b3c15162e5_93735433')) {function content_5929b3c15162e5_93735433($_smarty_tpl) {?><head>
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
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/commentSort.js"></script>
    <link href="https://cdn.quilljs.com/1.2.4/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.2.4/quill.min.js" type="text/javascript"></script>
    <span class="base_url" id="base_url" hidden><?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
</span>
    <span id="article_id" hidden><?php echo $_smarty_tpl->tpl_vars['article_id']->value;?>
</span>
</head>


<div id="bg">
	<img class="bg" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/circuit.jpg" alt="">
</div>

<div class="container article-snip" id="article-snip-5">
		<br>
        <?php if ($_SESSION['permission']==3) {?>
        <button class="btn btn-danger dropdown-toggle pull-right" type="button" id="delete"  onclick="deleteArticle('<?php echo $_smarty_tpl->tpl_vars['article']->value['article_id'];?>
')">Admin Delete Article</button>
        <script>
          function deleteArticle($article_id){
                var article_id = $("#article_id").text();
                var base_url = $("#base_url").text();
                return $.ajax({
                    type: "POST",
                    url: base_url + "actions/articles/delete.php",
                    data: "article_id=" + encodeURI(article_id),
                    success: frontpage
                });
          }
          function frontpage(){
             var base_url = $("#base_url").text();
              window.location.href = base_url;
          }
         </script>
        <?php }?>
        <?php if (dateDiffDays($_smarty_tpl->tpl_vars['article']->value['published_date'])<100&&$_smarty_tpl->tpl_vars['article']->value['archived']==false) {?>
         <?php if ($_SESSION['user_id']==$_smarty_tpl->tpl_vars['article']->value['author']) {?>
         <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/articles/edit.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['article_id'];?>
"><button class="btn btn-default pull-right" type="button" id="edit">Edit</button></a>
         <?php } elseif ($_SESSION['permission']>=2) {?>
         <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/articles/edit.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['article_id'];?>
"><button class="btn btn-default pull-right" type="button" id="mod_edit">Mod Edit</button></a>
         <button class="btn btn-default pull-right" type="button" id="archivebut"  onclick="closeArticle('<?php echo $_smarty_tpl->tpl_vars['article']->value['article_id'];?>
')"><span>Archive Article</span></button>
         
         <script>
          function closeArticle($article_id){
                var article_id = $("#article_id").text();
                var base_url = $("#base_url").text();
                return $.ajax({
                    type: "POST",
                    url: base_url + "actions/articles/archive.php",
                    data: "article_id=" + encodeURI(article_id),
                    success: reload
                });
          }
          </script>
         <?php }?>
        <h2 id="headline"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h2>
        <?php } else { ?>
        <h2 id="headline" style="color:grey">Archived: <?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h2>
        <?php }?>
			<h6>By <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/viewprofile?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['author'];?>
" style="color:black; font-style:italic"><?php echo $_smarty_tpl->tpl_vars['article']->value['authorname'];?>
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
                    <?php if (!isset($_smarty_tpl->tpl_vars['rating']->value)||dateDiffDays($_smarty_tpl->tpl_vars['article']->value['published_date'])>=100||$_smarty_tpl->tpl_vars['article']->value['archived']==true) {?>
					<button type="button" id="like" class="btn btn-default btn-circle btnlike" disabled>
					<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/chipart1.png" alt="" style="width:100%;height:100%;"> 
					</button>
					<span id="negtext4"  style="color:#f11066"><?php echo $_smarty_tpl->tpl_vars['article']->value['negratings'];?>
</span>
					<button type="button" id="dislike" class="btn btn-default btn-circle btndislike" disabled>
					<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/chipart1.png" alt="" style="width:100%;height:100%;filter:hue-rotate(198deg);"> 
					</button>
                    <?php }?>
                    <?php if (($_smarty_tpl->tpl_vars['rating']->value==-1||(isset($_smarty_tpl->tpl_vars['rating']->value)&&$_smarty_tpl->tpl_vars['rating']->value['score']==0))&&dateDiffDays($_smarty_tpl->tpl_vars['article']->value['published_date'])<100&&!$_smarty_tpl->tpl_vars['article']->value['archived']) {?>
					<button type="button" id="like" class="btn btn-default btn-circle btnlike">
					<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/chipart1.png" alt="" style="width:100%;height:100%;"> 
					</button>
					<span id="negtext4"  style="color:#f11066"><?php echo $_smarty_tpl->tpl_vars['article']->value['negratings'];?>
</span>
					<button type="button" id="dislike" class="btn btn-default btn-circle btndislike">
					<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/chipart1.png" alt="" style="width:100%;height:100%;filter:hue-rotate(198deg);"> 
					</button>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['rating']->value['score']==-1&&dateDiffDays($_smarty_tpl->tpl_vars['article']->value['published_date'])<100&&!$_smarty_tpl->tpl_vars['article']->value['archived']) {?>
					<button type="button" id="like" class="btn btn-default btn-circle btnlike" disabled>
					<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/chipart1.png" alt="" style="width:100%;height:100%;"> 
					</button>
					<span id="negtext4"  style="color:#f11066"><?php echo $_smarty_tpl->tpl_vars['article']->value['negratings'];?>
</span>
					<button type="button" id="dislike" class="btn btn-default btn-circle btndislike">
					<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/chipart1.png" alt="" style="width:100%;height:100%;filter:hue-rotate(198deg);"> 
					</button>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['rating']->value['score']==1&&dateDiffDays($_smarty_tpl->tpl_vars['article']->value['published_date'])<100&&!$_smarty_tpl->tpl_vars['article']->value['archived']) {?>
					<button type="button" id="like" class="btn btn-default btn-circle btnlike">
					<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/chipart1.png" alt="" style="width:100%;height:100%;"> 
					</button>
					<span id="negtext4"  style="color:#f11066"><?php echo $_smarty_tpl->tpl_vars['article']->value['negratings'];?>
</span>
					<button type="button" id="dislike" class="btn btn-default btn-circle btndislike" disabled>
					<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/chipart1.png" alt="" style="width:100%;height:100%;filter:hue-rotate(198deg);"> 
					</button>
                    <?php }?> 
			</div>
          
            <script>
            $('#like').on('click', function() {
                var score;
                var article_id = $("#article_id").text();

                if ($('#dislike').is(":disabled"))
                    score = 0;
                else score = 1;


                var base_url = $("#base_url").text();
                return $.ajax({
                    type: "POST",
                    url: base_url + "actions/articles/vote.php",
                    data: "article_id=" + encodeURI(article_id) + "&score=" + encodeURI(score),
                    success: updateScores
                });
            });

            $('#dislike').click( function() {
                var score;
                var article_id = $("#article_id").text();
                if ($('#like').is(":disabled"))
                    score = 0;
                else score = -1;
                var base_url = $("#base_url").text();
                return $.ajax({
                    type: "POST",
                    url: base_url + "actions/articles/vote.php",
                    data: "article_id=" + encodeURI(article_id) + "&score=" + encodeURI(score),
                    success: updateScores
                });
            });

            function updateScores(data) {
                var result=JSON.parse(data);
                if (result == "-1") {
                    console.log('stored procedure failed');
                    return;
                }
                switch (result[0]) {
                    case "1":
                        $('#dislike').prop("disabled", true);
                        break;
                    case "-1":
                        $('#like').prop("disabled", true);
                        break;
                    case "0":
                        $('#dislike').prop("disabled", false);
                        $('#like').prop("disabled", false);
                        break;
                }
                $('span#postext4').empty();
                $('span#negtext4').empty();
                $('span#postext4').append(result[1]);
                $('span#negtext4').append(result[2]);

            }

            </script>
           
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
   <br><br>
   <?php if ($_smarty_tpl->tpl_vars['USERNAME']->value&&dateDiffDays($_smarty_tpl->tpl_vars['article']->value['published_date'])<100&&!$_smarty_tpl->tpl_vars['article']->value['archived']) {?>
   <div class="row">
    
    <div class="col-md-6 col-md-offset-3">
    						<div class="widget-area no-padding blank">
								<div class="status-upload">
									<form >
										<div id="wmd-button-bar"></div>
                                         <div id="editor-container" style=" min-height: 100px;display: block; clear: both;">
                                         <textarea id="contentstuff"></textarea>
				                        </div>
                                         <input class="form-control"  id="body" type="hidden" name="body" required>
										<button type="button" onclick="submitComment()" class="btn btn-success" style="background-color:#357266"> Submit</button>
									</form>
								</div>
							</div>
	</div>

    
    </div>
                <script>
                var quill = new Quill('#editor-container', {
                modules: {
                    toolbar: [
                     ['bold', 'italic','underline'],
                     ['link', 'blockquote', 'code-block', 'video'],
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
                 function submitComment(){
                     var content = document.getElementById('body');
                     var base_url = $("#base_url").text();
                     var article_id = $("#article_id").text();
                     return $.ajax({
                        type: "POST",
                        url: base_url + "actions/articles/newcomment.php",
                        data: "article_id=" + encodeURI(article_id) +"&content=" + encodeURI(content.value) ,
                        success: updateCommentSection
                     });
                 }

                     function updateCommentSection(data) {
                        var result=data;
                        console.log(result);
                        if (result == "-1") {
                            console.log('Unset variables sent through request');
                            return;
                        } 
                        if (result == "-2") {
                            console.log('Database procedure failed');
                            return;
                        }   
                        $('#comment_section').empty();
                        $('#comment_section').html(result);   
                     }
                </script>
    <?php }?>

	


<?php }} ?>
