<?php /* Smarty version Smarty-3.1.15, created on 2017-05-17 16:33:14
         compiled from "C:\wamp64\www\LBAW-ChipperNews\ChipperNews\templates\ajax\articles-ajax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30065591c759b694ed9-53641470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eff79eb74aa86920902bfcecbabf933e4ed3f982' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW-ChipperNews\\ChipperNews\\templates\\ajax\\articles-ajax.tpl',
      1 => 1495038786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30065591c759b694ed9-53641470',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_591c759b77d380_15951516',
  'variables' => 
  array (
    'indexB' => 0,
    'i' => 0,
    'articles' => 0,
    'art' => 0,
    'BASE_URL' => 0,
    'subcategories' => 0,
    'sub' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591c759b77d380_15951516')) {function content_591c759b77d380_15951516($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['indexB']->value+1 - (3) : 3-($_smarty_tpl->tpl_vars['indexB']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 3, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
            <?php $_smarty_tpl->tpl_vars['art'] = new Smarty_variable($_smarty_tpl->tpl_vars['articles']->value[$_smarty_tpl->tpl_vars['i']->value], null, 0);?>
			<?php if ($_smarty_tpl->tpl_vars['art']->value['title']!='') {?>
            <?php $_smarty_tpl->tpl_vars['subcategories'] = new Smarty_variable(fetchSubcategories($_smarty_tpl->tpl_vars['art']->value['article_id']), null, 0);?>
            <div class="col-6 col-lg-4 ">
            <h2><?php echo $_smarty_tpl->tpl_vars['art']->value['title'];?>
</h2>
             <div id="ratings">
                        <span id="postext4" style="color:#357266"><?php echo $_smarty_tpl->tpl_vars['art']->value['posratings'];?>
</span>
                        <button type="button" class="btn btn-default btn-circle btnlike">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/chipart1.png" alt="" style="width:100%;height:100%;"> 
                        </button>
                        <span id="negtext4" style="color:#f11066"><?php echo $_smarty_tpl->tpl_vars['art']->value['negratings'];?>
</span>
                        <button type="button" class="btn btn-default btn-circle btndislike">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/chipart1.png" alt="" style="width:100%;height:100%;filter:hue-rotate(198deg);"> 
                        </button>
			</div>
            	<h6>By <a href=<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/viewprofile?id=<?php echo $_smarty_tpl->tpl_vars['art']->value['author'];?>
 style="color:black; font-style:italic"><?php echo $_smarty_tpl->tpl_vars['art']->value['authorname'];?>
</a> <?php echo $_smarty_tpl->tpl_vars['art']->value['published_date'];?>
</h6>
            <p><?php echo $_smarty_tpl->tpl_vars['art']->value['lead'];?>
</p>
            <?php  $_smarty_tpl->tpl_vars['sub'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sub']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subcategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sub']->key => $_smarty_tpl->tpl_vars['sub']->value) {
$_smarty_tpl->tpl_vars['sub']->_loop = true;
?>
               <?php if ($_smarty_tpl->tpl_vars['sub']->value['category']==1) {?>
                 <span class="label label-primary "><?php echo $_smarty_tpl->tpl_vars['sub']->value['name'];?>
</span>
               <?php }?>
               <?php if ($_smarty_tpl->tpl_vars['sub']->value['category']==2) {?>
                  <span class="label label-warning "><?php echo $_smarty_tpl->tpl_vars['sub']->value['name'];?>
</span>
               <?php }?>
               <?php if ($_smarty_tpl->tpl_vars['sub']->value['category']==3) {?>
                  <span class="label label-info "><?php echo $_smarty_tpl->tpl_vars['sub']->value['name'];?>
</span>
               <?php }?>
               <?php if ($_smarty_tpl->tpl_vars['sub']->value['category']==4) {?>
                  <span class="label label-default "><?php echo $_smarty_tpl->tpl_vars['sub']->value['name'];?>
</span>
               <?php }?>
               <?php if ($_smarty_tpl->tpl_vars['sub']->value['category']==5) {?>
                  <span class="label label-danger "><?php echo $_smarty_tpl->tpl_vars['sub']->value['name'];?>
</span>
               <?php }?>
               <?php if ($_smarty_tpl->tpl_vars['sub']->value['category']==6) {?>
                  <span class="label label-success "><?php echo $_smarty_tpl->tpl_vars['sub']->value['name'];?>
</span>
               <?php }?>     
            <?php } ?>
            <p><a class="btn btn-secondary " href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/articles/article.php?id=<?php echo $_smarty_tpl->tpl_vars['art']->value['article_id'];?>
" role="button ">View details »</a></p>
            </div>
			<?php }?>
        <?php }} ?><?php }} ?>