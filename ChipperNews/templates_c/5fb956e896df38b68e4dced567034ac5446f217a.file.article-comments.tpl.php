<?php /* Smarty version Smarty-3.1.15, created on 2017-06-01 16:55:54
         compiled from "C:\wamp64\www\LBAW\LBAW-ChipperNews\ChipperNews\templates\articles\article-comments.tpl" */ ?>
<?php /*%%SmartyHeaderCode:160715930471a12beb2-14610365%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5fb956e896df38b68e4dced567034ac5446f217a' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW\\LBAW-ChipperNews\\ChipperNews\\templates\\articles\\article-comments.tpl',
      1 => 1496080425,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160715930471a12beb2-14610365',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'article' => 0,
    'comments' => 0,
    'comment' => 0,
    'BASE_URL' => 0,
    'USERNAME' => 0,
    'ratings' => 0,
    'rat' => 0,
    'rating' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5930471a6ef656_72253768',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5930471a6ef656_72253768')) {function content_5930471a6ef656_72253768($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['comments'] = new Smarty_variable(fetchComments($_smarty_tpl->tpl_vars['article']->value['article_id']), null, 0);?>

<?php if (sizeof($_smarty_tpl->tpl_vars['comments']->value)>0) {?>   
<div class="container" id="comment-elements">
<div class="dropdown">
                <button class="btn btn-primary dropdown-toggle pull-right" type="button" data-toggle="dropdown" id="dropdownbutton"><span class="droptext">Newest</span>
		<span class="caret caret-reversed"></span>
		
		</button>
          <ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="menu1">
                    <li><a  onclick="changeDropdown('Newest')">Newest</a></li>
                    <li><a  onclick="changeDropdown('Oldest')">Oldest</a></li>
                    <li><a  onclick="changeDropdown('Popular')">Popular</a></li>
                    <li><a  onclick="changeDropdown('Controversial')">Controversial</a></li>
                </ul>   
</div>

<h1 class="nf">Comments</h1>
</div>
<div id="comment_section">
         <?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
			<div class="container comment-main-level">
					<!-- Contenedor del Comentario -->
					<div class="comment-box">
						<div class="comment-head">
						
						<?php if ($_smarty_tpl->tpl_vars['comment']->value['commenter_id']==$_SESSION['user_id']) {?>
							
							<h6 class="comment-name by-author" ><a style="color:blue;text-decoration:none" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/profile.php"><?php echo $_smarty_tpl->tpl_vars['comment']->value['commenter'];?>
</a> </h6>
							<span>Myself&nbsp</span>
							<?php } elseif ($_smarty_tpl->tpl_vars['comment']->value['commenter_id']==$_smarty_tpl->tpl_vars['article']->value['author']) {?>
							<h6 class="comment-name by-author"><a style="color:darkblue;text-decoration:none" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/view_profile.php?usr=<?php echo $_smarty_tpl->tpl_vars['comment']->value['commenter'];?>
"><?php echo $_smarty_tpl->tpl_vars['comment']->value['commenter'];?>
</a> </h6>
							<span>Author&nbsp</span>
							<?php } elseif ($_smarty_tpl->tpl_vars['comment']->value['commenter_permission']==1) {?>
							<h6 class="comment-name by-author"><a style="color:darkgreen;text-decoration:none" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/view_profile.php?usr=<?php echo $_smarty_tpl->tpl_vars['comment']->value['commenter'];?>
"><?php echo $_smarty_tpl->tpl_vars['comment']->value['commenter'];?>
</a> </h6>
							<span>Collaborator&nbsp</span>
							<?php } elseif ($_smarty_tpl->tpl_vars['comment']->value['commenter_permission']==2) {?>
							<h6 class="comment-name by-author"><a style="color:red;text-decoration:none" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/view_profile.php?usr=<?php echo $_smarty_tpl->tpl_vars['comment']->value['commenter'];?>
"><?php echo $_smarty_tpl->tpl_vars['comment']->value['commenter'];?>
</a> </h6>
							<span>Moderator&nbsp</span>
							<?php } elseif ($_smarty_tpl->tpl_vars['comment']->value['commenter_permission']==3) {?>
							<h6 class="comment-name by-author"><a style="color:yellow;text-decoration:none" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/view_profile.php?usr=<?php echo $_smarty_tpl->tpl_vars['comment']->value['commenter'];?>
"><?php echo $_smarty_tpl->tpl_vars['comment']->value['commenter'];?>
</a> </h6>
							<span>Admin&nbsp</span>
							<?php } else { ?>
							<h6 class="comment-name by-author"><a style="text-decoration:none" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/view_profile.php?usr=<?php echo $_smarty_tpl->tpl_vars['comment']->value['commenter'];?>
"><?php echo $_smarty_tpl->tpl_vars['comment']->value['commenter'];?>
</a> </h6>
							<span>Reader&nbsp</span>
					   <?php }?>
							<span> <?php echo $_smarty_tpl->tpl_vars['comment']->value['posted_date'];?>
&nbsp&nbsp</span>
								<?php if ($_smarty_tpl->tpl_vars['comment']->value['sum_score']<0) {?>
								<span class="negrating" style="font-weight:bold;color:#f11066"> <?php echo $_smarty_tpl->tpl_vars['comment']->value['sum_score'];?>
</span>
								<?php } else { ?>
								 <span class="posrating" style="font-weight:bold;color:#357266">+<?php echo $_smarty_tpl->tpl_vars['comment']->value['sum_score'];?>
</span>
								<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['USERNAME']->value&&dateDiffDays($_smarty_tpl->tpl_vars['article']->value['published_date'])<100&&$_smarty_tpl->tpl_vars['comment']->value['commenter_id']!=$_SESSION['user_id']) {?>
							<i class="fa fa-flag" aria-hidden="true" data-toggle="modal"  data-target="#reportModal" onclick="report('<?php echo $_smarty_tpl->tpl_vars['comment']->value['commenter'];?>
','<?php echo $_smarty_tpl->tpl_vars['comment']->value['commenter_id'];?>
','<?php echo $_smarty_tpl->tpl_vars['comment']->value['content'];?>
')"></i>
							<?php $_smarty_tpl->tpl_vars['rating'] = new Smarty_variable(-1, null, 0);?>
							<?php  $_smarty_tpl->tpl_vars['rat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ratings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rat']->key => $_smarty_tpl->tpl_vars['rat']->value) {
$_smarty_tpl->tpl_vars['rat']->_loop = true;
?>
								<?php if ($_smarty_tpl->tpl_vars['rat']->value['comment_id']==$_smarty_tpl->tpl_vars['comment']->value['comment_id']) {?>
									<?php $_smarty_tpl->tpl_vars['rating'] = new Smarty_variable($_smarty_tpl->tpl_vars['rat']->value, null, 0);?>
								<?php }?>
							<?php } ?>
							<?php if (dateDiffDays($_smarty_tpl->tpl_vars['article']->value['published_date'])>=100) {?>
							<i class="fa fa-thumbs-down" id="down<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
"onclick="downvote('<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
')" disabled></i>
							<i class="fa fa-thumbs-up"  id="up<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
" onclick="upvote('<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
')" disabled></i>
							<?php }?>
							<?php if (($_smarty_tpl->tpl_vars['rating']->value==-1||(isset($_smarty_tpl->tpl_vars['rating']->value)&&$_smarty_tpl->tpl_vars['rating']->value['score']==0))&&dateDiffDays($_smarty_tpl->tpl_vars['article']->value['published_date'])<100) {?>
							<i class="fa fa-thumbs-down" id="down<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
"onclick="downvote('<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
')"></i>
							<i class="fa fa-thumbs-up"  id="up<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
" onclick="upvote('<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
')"></i>
                    		<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['rating']->value['score']==-1&&dateDiffDays($_smarty_tpl->tpl_vars['article']->value['published_date'])<100) {?>
							<i class="fa fa-thumbs-down" id="down<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
"onclick="downvote('<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
')" style="color:red" name="blue"></i>
							<i class="fa fa-thumbs-up"  id="up<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
" onclick="upvote('<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
')" name="grey"></i>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['rating']->value['score']==1&&dateDiffDays($_smarty_tpl->tpl_vars['article']->value['published_date'])<100) {?>
							<i class="fa fa-thumbs-down" id="down<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
"onclick="downvote('<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
')" name="grey"></i>
							<i class="fa fa-thumbs-up"  id="up<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
" onclick="upvote('<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
')" style="color:green" name="blue"></i>
							<?php }?> 

							<?php }?>
							<?php if ($_SESSION['permission']>=2||$_smarty_tpl->tpl_vars['comment']->value['commenter_id']==$_SESSION['user_id']) {?>
							<i class="fa fa-trash" aria-hidden="true" onclick="deleteComment('<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
')"></i>
							<?php }?>
						</div>
						<div class="comment-content">
                            <?php echo $_smarty_tpl->tpl_vars['comment']->value['content'];?>

						</div>
					</div>
			 </div>

        <?php } ?>
		
	
		<?php }?>
</div>	
	<script>
		function quote(commenter){
			var replyTo="Reply: "+"@"+commenter;
			quill.setText(replyTo);
		}
		function report(reported,reported_id,flagged_content){
			$("#reported").val(reported);
			$("#reported_id").val(reported_id);
			cleanText = flagged_content.replace(/<\/?[^>]+(>|$)/g, "");
			cleanText= "Offense: "+"\""+cleanText+"\"";
			$("#description").val(cleanText);
		}
		function deleteComment(comment_id){
                var base_url = $("#base_url").text();
                return $.ajax({
                    type: "POST",
                    url: base_url + "actions/articles/delete_comment.php",
                    data: "comment_id=" + encodeURI(comment_id) + "&article_id=" + encodeURI(article_id),
                    success: reload
                });
		}
		function reload(data){
			location.reload();
		}
		 function upvote(comment_id) {
                var score;
				 var article_id = $("#article_id").text();
                if ($('#down'+comment_id).attr("name")=="grey")
                    score = 0;
                else score = 1;
                var base_url = $("#base_url").text();
                return $.ajax({
                    type: "POST",
                    url: base_url + "actions/articles/comment_vote.php",
                    data: "comment_id=" + encodeURI(comment_id) + "&score=" + encodeURI(score) + "&article_id=" + encodeURI(article_id),
                    success: updateCommentSection
                });
		   }
     

        function downvote(comment_id) {
                var score;
				var article_id = $("#article_id").text();
                if ($('#up'+comment_id).attr("name")=="grey")
                    score = 0;
                else score = -1;
                var base_url = $("#base_url").text();
                return $.ajax({
                    type: "POST",
                    url: base_url + "actions/articles/comment_vote.php",
                    data: "comment_id=" + encodeURI(comment_id) + "&score=" + encodeURI(score)+ "&article_id=" + encodeURI(article_id),
                    success: updateCommentSection
                });
		}

         
		</script>
			  					<?php }} ?>
