<?php /* Smarty version Smarty-3.1.15, created on 2017-05-27 12:50:51
         compiled from "C:\wamp64\www\LBAW-ChipperNews\ChipperNews\templates\ajax\my-articles-sorted.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102725929762b2a9697-47412229%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b0f0509e4ca005ee10f38c178965ac0b37eecd7' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW-ChipperNews\\ChipperNews\\templates\\ajax\\my-articles-sorted.tpl',
      1 => 1495887380,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102725929762b2a9697-47412229',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'articles' => 0,
    'article' => 0,
    'BASE_URL' => 0,
    'subcategories' => 0,
    'subart' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5929762b3fa1c3_06088348',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5929762b3fa1c3_06088348')) {function content_5929762b3fa1c3_06088348($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
		<div class="container article-snip friend" id="article-snip-<?php echo $_smarty_tpl->tpl_vars['article']->value['article_id'];?>
">
			<br>
			<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/articles/edit.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['article_id'];?>
"><button class="btn btn-primary pull-right edit_article" type="default">Edit Article</button></a>
			<?php if (dateDiffDays($_smarty_tpl->tpl_vars['article']->value['published_date'])<100&&$_smarty_tpl->tpl_vars['article']->value['archived']==false) {?>
            <h2 id="headline"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/articles/article.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['article_id'];?>
" style="color:black" id="articleAnchor"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></h2>
            <?php } else { ?>
            <h2 id="headline" ><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/articles/article.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['article_id'];?>
" style="color:grey" id="articleAnchor">Archived:<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></h2>
            <?php }?>
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
            </div>
		<br>
		<a onclick="fullStory('<?php echo $_smarty_tpl->tpl_vars['article']->value['article_id'];?>
')" style="text-decoration:none"><i class="fa fa-chevron-circle-down expand fa-2x" id="expand-<?php echo $_smarty_tpl->tpl_vars['article']->value['article_id'];?>
" aria-hidden="true"></i></a>
		<div id="article-body-<?php echo $_smarty_tpl->tpl_vars['article']->value['article_id'];?>
" hidden>
             <?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>

         <a onclick="deflateArticle('<?php echo $_smarty_tpl->tpl_vars['article']->value['article_id'];?>
')" style="text-decoration:none"><i class="fa fa-chevron-circle-up deflate fa-2x" aria-hidden="true"></i></a>
        </div>
        <br>
    </div>
    <br>
<?php } ?><?php }} ?>
