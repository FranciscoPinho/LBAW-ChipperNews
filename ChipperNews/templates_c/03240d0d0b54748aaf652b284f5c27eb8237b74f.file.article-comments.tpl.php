<?php /* Smarty version Smarty-3.1.15, created on 2017-05-07 18:29:58
         compiled from "C:\wamp64\www\LBAW-ChipperNews\ChipperNews\templates\articles\article-comments.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3114590ce55d5822d2-61564544%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03240d0d0b54748aaf652b284f5c27eb8237b74f' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW-ChipperNews\\ChipperNews\\templates\\articles\\article-comments.tpl',
      1 => 1494181797,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3114590ce55d5822d2-61564544',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_590ce55d58ae96_27027198',
  'variables' => 
  array (
    'article' => 0,
    'comments' => 0,
    'comment' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590ce55d58ae96_27027198')) {function content_590ce55d58ae96_27027198($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['comments'] = new Smarty_variable(fetchComments($_smarty_tpl->tpl_vars['article']->value['article_id']), null, 0);?>
<?php if (sizeof($_smarty_tpl->tpl_vars['comments']->value)>0) {?>
<div class="row">
 <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle pull-right" type="button" data-toggle="dropdown" id="dropdownbutton"><span class="droptext">Newest</span>
		<span class="caret caret-reversed"></span> 
		</button>
                <ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="menu1">
                    <li><a href="#" onclick="changeDropdown('Newest')">Newest</a></li>
                    <li><a href="#" onclick="changeDropdown('Oldest')">Oldest</a></li>
                    <li><a href="#" onclick="changeDropdown('Popular')">Popular</a></li>
                    <li><a href="#" onclick="changeDropdown('Controversial')">Controversial</a></li>
                </ul>
            </div>
	
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
</span>
								<i class="fa fa-reply"></i>
							<i class="fa fa-thumbs-down"></i>
							<i class="fa fa-thumbs-up"></i>
						</div>
						<div class="comment-content">
                            <?php echo $_smarty_tpl->tpl_vars['comment']->value['content'];?>

                            <?php if ($_smarty_tpl->tpl_vars['comment']->value['sum_score']<0) {?>
                            <h5>Votes: <span class="negrating" style="font-weight:bold;color:#f11066"> <?php echo $_smarty_tpl->tpl_vars['comment']->value['sum_score'];?>
</span></h5>
                            <?php } else { ?>
							<h5>Votes: <span class="posrating" style="font-weight:bold;color:#357266"> <?php echo $_smarty_tpl->tpl_vars['comment']->value['sum_score'];?>
</span></h5>
                            <?php }?>
						</div>
					</div>
			 </div>
        <?php } ?>
<?php }?>
	

			  					<?php }} ?>
