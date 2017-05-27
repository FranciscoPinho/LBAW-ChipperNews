<?php /* Smarty version Smarty-3.1.15, created on 2017-05-27 12:41:45
         compiled from "C:\wamp64\www\LBAW-ChipperNews\ChipperNews\templates\ajax\article-comments-updated.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6622591ae0334cb187-90138490%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d59cf627498e14828e4edebfbb185ecdbd854d5' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW-ChipperNews\\ChipperNews\\templates\\ajax\\article-comments-updated.tpl',
      1 => 1495888901,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6622591ae0334cb187-90138490',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_591ae03352e7e4_15086061',
  'variables' => 
  array (
    'comments' => 0,
    'comment_id' => 0,
    'comment' => 0,
    'BASE_URL' => 0,
    'article' => 0,
    'ratings' => 0,
    'rat' => 0,
    'rating' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591ae03352e7e4_15086061')) {function content_591ae03352e7e4_15086061($_smarty_tpl) {?><?php if (sizeof($_smarty_tpl->tpl_vars['comments']->value)>0) {?>
<div class="container" id="comment-elements">
                <button class="btn btn-primary dropdown-toggle pull-right" type="button" data-toggle="dropdown" id="dropdownbutton"><span class="droptext">Newest</span>
		<span class="caret caret-reversed"></span> 
		</button>
                <ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="menu1">
                    <li><a href="#" onclick="changeDropdown('Newest')">Newest</a></li>
                    <li><a href="#" onclick="changeDropdown('Oldest')">Oldest</a></li>
                    <li><a href="#" onclick="changeDropdown('Popular')">Popular</a></li>
                    <li><a href="#" onclick="changeDropdown('Controversial')">Controversial</a></li>
                </ul>
<h1 class="nf">Comments</h1>
</div>
<?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
			<div class="container comment-main-level" id="comment-id-<?php echo $_smarty_tpl->tpl_vars['comment_id']->value;?>
">
					<div class="comment-box">
						<div class="comment-head">
							<?php if ($_smarty_tpl->tpl_vars['comment']->value['commenter_id']==$_SESSION['user_id']) {?>
							<h6 class="comment-name by-author"><a style="color:blue;text-decoration:none" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/profile.php"> <?php echo $_smarty_tpl->tpl_vars['comment']->value['commenter'];?>
</a></h6>
							<?php } elseif ($_smarty_tpl->tpl_vars['comment']->value['commenter_id']==$_smarty_tpl->tpl_vars['article']->value['author']) {?>
							<h6 class="comment-name by-author"><a style="color:darkblue;text-decoration:none" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/view_profile.php?id=<?php echo $_smarty_tpl->tpl_vars['comment']->value['commenter_id'];?>
">Author <?php echo $_smarty_tpl->tpl_vars['comment']->value['commenter'];?>
</a> </h6>
							<?php } elseif ($_smarty_tpl->tpl_vars['comment']->value['commenter_permission']==2) {?>
							<h6 class="comment-name by-author"><a style="color:red;text-decoration:none" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/view_profile.php?id=<?php echo $_smarty_tpl->tpl_vars['comment']->value['commenter_id'];?>
">Moderator <?php echo $_smarty_tpl->tpl_vars['comment']->value['commenter'];?>
</a> </h6>
							<?php } elseif ($_smarty_tpl->tpl_vars['comment']->value['commenter_permission']==3) {?>
							<h6 class="comment-name by-author"><a style="color:yellow;text-decoration:none" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/view_profile.php?id=<?php echo $_smarty_tpl->tpl_vars['comment']->value['commenter_id'];?>
">Admin <?php echo $_smarty_tpl->tpl_vars['comment']->value['commenter'];?>
</a> </h6>
							<?php } else { ?>
							<h6 class="comment-name by-author"><a style="text-decoration:none" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/view_profile.php?id=<?php echo $_smarty_tpl->tpl_vars['comment']->value['commenter_id'];?>
"></a> <?php echo $_smarty_tpl->tpl_vars['comment']->value['commenter'];?>
</h6>
							<?php }?>
							<span> <?php echo $_smarty_tpl->tpl_vars['comment']->value['posted_date'];?>
&nbsp&nbsp&nbsp</span>
								<?php if ($_smarty_tpl->tpl_vars['comment']->value['sum_score']<0) {?>
								<span class="negrating" style="font-weight:bold;color:#f11066"> <?php echo $_smarty_tpl->tpl_vars['comment']->value['sum_score'];?>
</span>
								<?php } else { ?>
								 <span class="posrating" style="font-weight:bold;color:#357266">+<?php echo $_smarty_tpl->tpl_vars['comment']->value['sum_score'];?>
</span>
								<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['comment']->value['commenter_id']!=$_SESSION['user_id']) {?>
							<i class="fa fa-flag" aria-hidden="true" data-toggle="modal"  data-target="#reportModal" onclick="report('<?php echo $_smarty_tpl->tpl_vars['comment']->value['commenter'];?>
',<?php echo $_smarty_tpl->tpl_vars['comment']->value['commenter_id'];?>
','<?php echo $_smarty_tpl->tpl_vars['comment']->value['content'];?>
')"></i>
							<?php  $_smarty_tpl->tpl_vars['rat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ratings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rat']->key => $_smarty_tpl->tpl_vars['rat']->value) {
$_smarty_tpl->tpl_vars['rat']->_loop = true;
?>
								<?php if ($_smarty_tpl->tpl_vars['rat']->value['comment_id']==$_smarty_tpl->tpl_vars['comment']->value['comment_id']) {?>
									<?php $_smarty_tpl->tpl_vars['rating'] = new Smarty_variable($_smarty_tpl->tpl_vars['rat']->value, null, 0);?>
								<?php }?>
							<?php } ?>
							<?php if (($_smarty_tpl->tpl_vars['rating']->value==-1||(isset($_smarty_tpl->tpl_vars['rating']->value)&&$_smarty_tpl->tpl_vars['rating']->value['score']==0))) {?>
							<i class="fa fa-thumbs-down" id="down<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
"onclick="downvote('<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
')" ></i>
							<i class="fa fa-thumbs-up"  id="up<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
" onclick="upvote('<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
')"></i>
                    		<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['rating']->value['score']==-1) {?>
							<i class="fa fa-thumbs-down" id="down<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
"onclick="downvote('<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
')" style="color:red" name="blue"></i>
							<i class="fa fa-thumbs-up"  id="up<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
" onclick="upvote('<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
')" name="grey"></i>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['rating']->value['score']==1) {?>
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

<?php }?><?php }} ?>
