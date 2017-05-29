<?php /* Smarty version Smarty-3.1.15, created on 2017-05-29 01:01:22
         compiled from "C:\wamp64\www\LBAW\LBAW-ChipperNews\ChipperNews\templates\admin\categoriespanel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29820592b72e2700949-84357484%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8b09335c1143d843c26c008a7eb32847d8c9dc0' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW\\LBAW-ChipperNews\\ChipperNews\\templates\\admin\\categoriespanel.tpl',
      1 => 1495993013,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29820592b72e2700949-84357484',
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
  'unifunc' => 'content_592b72e284d5d1_86715031',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592b72e284d5d1_86715031')) {function content_592b72e284d5d1_86715031($_smarty_tpl) {?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chipper News</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/styles-frontpage.css">
</head>

<body>
        <h1> Categories </h1>
        <form class="form-inline" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/administration/addCategory.php" method="post">
            <div class="form-group">
                <label for="text">Create Category: </label>
                <input type="text" class="form-control" id="categoryName" name="categoryName" placeholder="Category name">
            </div>
            <button type="submit" class="btn btn-default">Add Category</button>
        </form>
        <form class="form-inline" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/administration/addSubcategory.php" method="post">
            <div class="form-group">
                <label for="text">Create Subcategory: </label>
                <input type="text" class="form-control" id="subcategoryName" name="subcategoryName" placeholder="Subcategory name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="parentID" name="parentID" placeholder="Parent category id">
            </div>
            <button type="submit" class="btn btn-default">Add Subcategory</button>
        </form>
        <div>
            <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/administration/categoriesAction.php" method="post">
                 <button type="submit" class="btn btn-default">Delete Subcategories</button>
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
            </form>
        </div>
</body>

</html><?php }} ?>
