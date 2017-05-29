<?php /* Smarty version Smarty-3.1.15, created on 2017-05-29 00:46:22
         compiled from "C:\wamp64\www\LBAW\LBAW-ChipperNews\ChipperNews\templates\users\friendlist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14996592a347ce8b080-93510921%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '518acc30502f65392bd105360df02edf43e2e6e7' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW\\LBAW-ChipperNews\\ChipperNews\\templates\\users\\friendlist.tpl',
      1 => 1496018777,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14996592a347ce8b080-93510921',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_592a347ce8db67_59792505',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592a347ce8db67_59792505')) {function content_592a347ce8db67_59792505($_smarty_tpl) {?><!DOCTYPE html>
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
    
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/styles-friendlist.css">
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <a class="navbar-brand" href="#">My Friends</a>
                <form class="navbar-form navbar-right">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Friend search">
                    </div>
                    <button type="submit" class="btn btn-default"><i class="fa fa-search" aria-hidden="false"></i></button>
                </form>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
        <div>
           <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                    <div class="card">
                        <img class="card-img-top" src="http://success-at-work.com/wp-content/uploads/2015/04/free-stock-photos.gif">
                        <div class="card-block">
                            <h4 class="card-title">Tawshif Ahsan Khan</h4>
                            <div class="meta">
                                <a href="#">Friends</a>
                            </div>
                            <div class="card-text">
                                Tawshif is a web designer living in Bangladesh.
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-secondary float-right btn-sm">Unfriend</button>
                        </div>
                        </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
</body>

</html><?php }} ?>
