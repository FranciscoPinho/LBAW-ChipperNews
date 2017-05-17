<?php /* Smarty version Smarty-3.1.15, created on 2017-05-17 11:29:23
         compiled from "C:\wamp64\www\LBAW\LBAW-ChipperNews\ChipperNews\templates\articles\article-comments.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2988559160a019572d3-99675676%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5fb956e896df38b68e4dced567034ac5446f217a' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW\\LBAW-ChipperNews\\ChipperNews\\templates\\articles\\article-comments.tpl',
      1 => 1494979578,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2988559160a019572d3-99675676',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_59160a01a7b269_71394769',
  'variables' => 
  array (
    'article' => 0,
    'comments' => 0,
    'comment' => 0,
    'USERNAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59160a01a7b269_71394769')) {function content_59160a01a7b269_71394769($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['comments'] = new Smarty_variable(fetchComments($_smarty_tpl->tpl_vars['article']->value['article_id']), null, 0);?>
<div id="comment_section">
<?php if (sizeof($_smarty_tpl->tpl_vars['comments']->value)>0) {?>
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
			<div class="container comment-main-level">
					<!-- Contenedor del Comentario -->
					<div class="comment-box">
						<div class="comment-head">
							<h6 class="comment-name by-author"><a href="#"></a> <?php echo $_smarty_tpl->tpl_vars['comment']->value['commenter'];?>
</h6>
							<span> <?php echo $_smarty_tpl->tpl_vars['comment']->value['posted_date'];?>
&nbsp&nbsp&nbsp</span>
								<?php if ($_smarty_tpl->tpl_vars['comment']->value['sum_score']<0) {?>
								<span class="negrating" style="font-weight:bold;color:#f11066"> <?php echo $_smarty_tpl->tpl_vars['comment']->value['sum_score'];?>
</span>
								<?php } else { ?>
								 <span class="posrating" style="font-weight:bold;color:#357266">+<?php echo $_smarty_tpl->tpl_vars['comment']->value['sum_score'];?>
</span>
								<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['USERNAME']->value&&dateDiffDays($_smarty_tpl->tpl_vars['article']->value['published_date'])<100) {?>
							<i class="fa fa-reply" onclick="quote('<?php echo $_smarty_tpl->tpl_vars['comment']->value['commenter'];?>
')"></i>
							<i class="fa fa-thumbs-down"></i>
							<i class="fa fa-thumbs-up"></i>
                            <?php }?>
						</div>
						<div class="comment-content">
                            <?php echo $_smarty_tpl->tpl_vars['comment']->value['content'];?>

						</div>
					</div>
			 </div>
			 
        <?php } ?>
		
		<script>
		function quote(commenter){
			var replyTo="Reply: "+"@"+commenter;
			quill.setText(replyTo);
		}
		</script>
<?php }?>
</div>	

			  					<?php }} ?>
