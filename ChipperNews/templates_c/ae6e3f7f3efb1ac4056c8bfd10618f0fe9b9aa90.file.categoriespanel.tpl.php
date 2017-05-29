<?php /* Smarty version Smarty-3.1.15, created on 2017-05-29 16:58:12
         compiled from "C:\wamp64\www\LBAW-ChipperNews\ChipperNews\templates\admin\categoriespanel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13806592ac4062d7ac4-13183386%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae6e3f7f3efb1ac4056c8bfd10618f0fe9b9aa90' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW-ChipperNews\\ChipperNews\\templates\\admin\\categoriespanel.tpl',
      1 => 1496072781,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13806592ac4062d7ac4-13183386',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_592ac40639f330_81784864',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'subcategories' => 0,
    'sub' => 0,
    'parentCategory' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592ac40639f330_81784864')) {function content_592ac40639f330_81784864($_smarty_tpl) {?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Category panel</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/bootstrap.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/searchSubcategoriesAdmin.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/styles-frontpage.css">
</head>

<body>
<nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Categories Panel</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                      <form class="navbar-form navbar-right">
                            <div class="form-group">
                                <input id="search_text" type="text" class="form-control" placeholder="Search subcategory">
                            </div>
                            <button onclick = "return searchSubcategory()" class="btn btn-default"><i class="fa fa-search" aria-hidden="false"></i></button>
                        </form>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
        <h1> Categories </h1>
        <form class="form-inline" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/administration/addCategory.php" method="post">
            <div class="form-group">
                <label for="text">Create Category: </label>
                <input type="text" class="form-control" id="categoryName" name="categoryName" placeholder="Category name">
            </div>
            <button type="submit" class="btn btn-default">Add Category</button>
        </form>
        <br>
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
        <div id="cat_area">
            <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
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
            <br>
        </div>
</body>

</html><?php }} ?>
