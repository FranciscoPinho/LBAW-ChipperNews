<?php /* Smarty version Smarty-3.1.15, created on 2017-05-27 16:23:31
         compiled from "C:\wamp64\www\LBAW-ChipperNews\ChipperNews\templates\admin\reportPanel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:140825929a803a67b49-07304033%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55fdf1526eafc1e8ece88104872d273be9bc89de' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW-ChipperNews\\ChipperNews\\templates\\admin\\reportPanel.tpl',
      1 => 1495899536,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '140825929a803a67b49-07304033',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'reports' => 0,
    'report' => 0,
    'ree' => 0,
    'rep' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5929a803afdc10_93336224',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5929a803afdc10_93336224')) {function content_5929a803afdc10_93336224($_smarty_tpl) {?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chipper News</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/bootstrap.min.js"></script>

</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Report Panel</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cogs"></i>Admin Options <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/syscategories.php">Category Management</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/reportPanel.php">Report Management</a></li>
                            <li><a href="#">Shut down for maintenance</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
        <div>
            <h1> Reports </h1>
            <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/administration/reports.php" method="post">
             <button type="submit" class="btn btn-default">Submit</button>
                <div class="radio">
                    <label class="radio-inline"><input type="radio" name="operation" value="ban" >Ban</label>
                    <label class="radio-inline"><input type="radio" name="operation" value="clear">Clear Report</label>
                </div>
                <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Reportee</th>
                        <th>Reported</th>
                        <th>Banned</th>
                        <th>Description</th>
                        <th>Select</th>
                    </tr>
                </thead>
                <tbody>
                   <?php  $_smarty_tpl->tpl_vars['report'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['report']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reports']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['report']->key => $_smarty_tpl->tpl_vars['report']->value) {
$_smarty_tpl->tpl_vars['report']->_loop = true;
?>
                        <tr>
                            <?php $_smarty_tpl->tpl_vars['rep'] = new Smarty_variable(fetchUser($_smarty_tpl->tpl_vars['report']->value['reported']), null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['ree'] = new Smarty_variable(fetchUser($_smarty_tpl->tpl_vars['report']->value['reportee']), null, 0);?>
                            <td><?php echo $_smarty_tpl->tpl_vars['report']->value['report_id'];?>
 </td>
                            <td><?php echo $_smarty_tpl->tpl_vars['ree']->value['username'];?>
 </td>
                            <td><?php echo $_smarty_tpl->tpl_vars['rep']->value['username'];?>
 </td>
                            <td>
                                <?php if ($_smarty_tpl->tpl_vars['rep']->value['is_banned']==true) {?>
                                    TRUE
                                <?php } else { ?>
                                    FALSE
                                <?php }?>
                            </td>
                            <td><?php echo $_smarty_tpl->tpl_vars['report']->value['description'];?>
 </td>
                             <td><input type="checkbox" name="reports[]" value=<?php echo $_smarty_tpl->tpl_vars['report']->value['report_id'];?>
><br></td>  
                        </tr>
                   <?php } ?>
                </tbody>
                </table>
            </form>
        </div>
</body>

</html><?php }} ?>
