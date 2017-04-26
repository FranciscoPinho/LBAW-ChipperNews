<?php /* Smarty version Smarty-3.1.15, created on 2017-04-26 15:52:16
         compiled from "C:\wamp64\www\LBAW-ChipperNews\ChipperNews\templates\admin\categoriespanel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26785900c05b305a56-32486273%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae6e3f7f3efb1ac4056c8bfd10618f0fe9b9aa90' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW-ChipperNews\\ChipperNews\\templates\\admin\\categoriespanel.tpl',
      1 => 1493221935,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26785900c05b305a56-32486273',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5900c05b501442_75286059',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5900c05b501442_75286059')) {function content_5900c05b501442_75286059($_smarty_tpl) {?><!DOCTYPE html>
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
css/styles-ricardo.css">
</head>

<body>
        <h1> Categories </h1>
        <form class="form-inline">
            <div class="form-group">
                <label for="text">Create Category: </label>
                <input type="text" class="form-control" id="email" placeholder="Category name">
            </div>
            <button type="submit" class="btn btn-default">Add Category</button>
        </form>
        <form class="form-inline">
            <div class="form-group">
                <label for="text">Create Subcategory: </label>
                <input type="text" class="form-control" id="email" placeholder="Subcategory name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="email" placeholder="Parent-category name">
            </div>
            <button type="submit" class="btn btn-default">Add Subcategory</button>
        </form>
        <div>
            <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/administration/operation.php" method="post">
             <button type="submit" class="btn btn-default">Submit</button>
                <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Subcategory</th>
                        <th>Parent Category</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                   
                </tbody>
                </table>
            </form>
        </div>
</body>

</html><?php }} ?>
