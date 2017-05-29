<?php /* Smarty version Smarty-3.1.15, created on 2017-05-29 16:58:16
         compiled from "C:\wamp64\www\LBAW-ChipperNews\ChipperNews\templates\ajax\subcategories-ajax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24348592c5328554e10-69326643%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fedab7d3b15c0ed6ebf531946dd68583531f7663' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW-ChipperNews\\ChipperNews\\templates\\ajax\\subcategories-ajax.tpl',
      1 => 1496072777,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24348592c5328554e10-69326643',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'subcategories' => 0,
    'sub' => 0,
    'parentCategory' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_592c53285b6a54_07322638',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592c53285b6a54_07322638')) {function content_592c53285b6a54_07322638($_smarty_tpl) {?><form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/administration/categoriesAction.php" method="post">
                <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Parent Category</th>
                        <th>#</th>
                        <th>Subcategory</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <?php  $_smarty_tpl->tpl_vars['sub'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sub']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subcategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sub']->key => $_smarty_tpl->tpl_vars['sub']->value) {
$_smarty_tpl->tpl_vars['sub']->_loop = true;
?>
                <tbody>
                    <?php $_smarty_tpl->tpl_vars['parentCategory'] = new Smarty_variable(fetchCategory($_smarty_tpl->tpl_vars['sub']->value['category']), null, 0);?>
                    <td><?php echo $_smarty_tpl->tpl_vars['parentCategory']->value['cat_id'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['parentCategory']->value['name'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['sub']->value['sub_id'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['sub']->value['name'];?>
</td>
                     <td>
                        <input type="checkbox" name="subs[]" value=<?php echo $_smarty_tpl->tpl_vars['sub']->value['sub_id'];?>
><br>
                    </td>                
                </tbody>
                <?php } ?>
                </table>
                <button type="submit" class="btn btn-default">Delete Subcategories</button>
</form>
<br><?php }} ?>
