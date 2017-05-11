<?php /* Smarty version Smarty-3.1.15, created on 2017-05-08 14:07:22
         compiled from "C:\wamp64\www\LBAW\LBAW-ChipperNews\ChipperNews\templates\search\frontpage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2899658f7c78152d6e8-89439176%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ecf89c9273741d7efc514f6fc5b2fbf45634b66' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW\\LBAW-ChipperNews\\ChipperNews\\templates\\search\\frontpage.tpl',
      1 => 1494189631,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2899658f7c78152d6e8-89439176',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f7c7815d9c98_01437409',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'i' => 0,
    'articles' => 0,
    'art' => 0,
    'subcategories' => 0,
    'subart' => 0,
    'sub' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f7c7815d9c98_01437409')) {function content_58f7c7815d9c98_01437409($_smarty_tpl) {?><!DOCTYPE html>
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
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/bootstrap-social.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/styles-frontpage.css">
    <link href="https://fonts.googleapis.com/css?family=Lato|Lora|Playfair+Display:700" rel="stylesheet">

</head>
<body>
   
    <nav class="navbar navbar-default ">
        <h1 class="text-center "> Featured </h1>
    </nav>
    <div class="row " style="padding-left:4%;padding-right:4% ">
       <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 2+1 - (0) : 0-(2)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
            <?php $_smarty_tpl->tpl_vars['art'] = new Smarty_variable($_smarty_tpl->tpl_vars['articles']->value[$_smarty_tpl->tpl_vars['i']->value], null, 0);?>
            <?php $_smarty_tpl->tpl_vars['subcategories'] = new Smarty_variable(fetchSubcategories($_smarty_tpl->tpl_vars['art']->value['article_id']), null, 0);?>
            <div class="col-sm-6 col-md-4 ">
                <a class="thumbnail " href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/articles/article?id=<?php echo $_smarty_tpl->tpl_vars['art']->value['article_id'];?>
" style="text-decoration:none ">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images\articles\<?php echo $_smarty_tpl->tpl_vars['art']->value['article_id'];?>
" alt="... ">
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
                    <div class="caption ">
                        <h3><?php echo $_smarty_tpl->tpl_vars['art']->value['title'];?>
</h3>
                        <p><?php echo $_smarty_tpl->tpl_vars['art']->value['lead'];?>
</p>
                        <?php  $_smarty_tpl->tpl_vars['subart'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subart']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subcategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subart']->key => $_smarty_tpl->tpl_vars['subart']->value) {
$_smarty_tpl->tpl_vars['subart']->_loop = true;
?>
                            <?php $_smarty_tpl->tpl_vars['sub'] = new Smarty_variable(fetchSubcategory($_smarty_tpl->tpl_vars['subart']->value['sub_id']), null, 0);?>
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
                    </div>
                </a>
            </div>
        <?php }} ?>
    </div>

    <nav class="navbar navbar-default ">
        <h1 class="text-center " href="# "> News </h1>
    </nav>
    <div class="row " style="padding-left:4%;padding-right:4% ">
        <?php  $_smarty_tpl->tpl_vars['art'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['art']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['art']->key => $_smarty_tpl->tpl_vars['art']->value) {
$_smarty_tpl->tpl_vars['art']->_loop = true;
?>
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
            <p><?php echo $_smarty_tpl->tpl_vars['art']->value['lead'];?>
</p>
            <?php  $_smarty_tpl->tpl_vars['subart'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subart']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subcategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subart']->key => $_smarty_tpl->tpl_vars['subart']->value) {
$_smarty_tpl->tpl_vars['subart']->_loop = true;
?>
                <?php $_smarty_tpl->tpl_vars['sub'] = new Smarty_variable(fetchSubcategory($_smarty_tpl->tpl_vars['subart']->value['sub_id']), null, 0);?>
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
pages/articles/article?id=<?php echo $_smarty_tpl->tpl_vars['art']->value['article_id'];?>
" role="button ">View details »</a></p>
            </div>
        <?php } ?>
    </div>


    </div>
</body>

</html><?php }} ?>
