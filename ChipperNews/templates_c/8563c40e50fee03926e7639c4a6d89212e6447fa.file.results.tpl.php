<?php /* Smarty version Smarty-3.1.15, created on 2017-05-29 17:11:07
         compiled from "C:\wamp64\www\LBAW-ChipperNews\ChipperNews\templates\search\results.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30637592ae93d1a3710-48440214%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8563c40e50fee03926e7639c4a6d89212e6447fa' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW-ChipperNews\\ChipperNews\\templates\\search\\results.tpl',
      1 => 1496076223,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30637592ae93d1a3710-48440214',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_592ae93d1baa01_78880556',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'query' => 0,
    'articles' => 0,
    'article' => 0,
    'subcategories' => 0,
    'subart' => 0,
    'users' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592ae93d1baa01_78880556')) {function content_592ae93d1baa01_78880556($_smarty_tpl) {?><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Search Results</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/styles-newsfeed-myarticles.css">
    <link href="https://fonts.googleapis.com/css?family=Lora|Oswald|Slabo+27px" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://www.w3schools.com/lib/w3data.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/bootstrap.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/resultsSort.js"></script>
    <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script> 
    <span class="base_url" id="base_url" hidden><?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
</span>
</head>
<body>
<div id="bg">
  <img class="bg" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/circuit.jpg" alt="">
</div>


<div class="container">
    <h1 id="searchHead" class="nf">Search Results: <?php echo $_smarty_tpl->tpl_vars['query']->value;?>
</h1>
     <br><br>   
    
    <ul class="nav nav-tabs"  style="width:100%">
        <li class="active"  style="width:50%"><a href="#articles" data-toggle="tab">Articles</a></li>
        <li  style="width:50%"><a href="#users" data-toggle="tab">Users</a></li>                                  
    </ul>

    
   <div id="myTabContent" class="tab-content">
   
   
    <div class="tab-pane fade active in" id="articles"> 
      <br><br>
        <?php if (sizeof($_smarty_tpl->tpl_vars['articles']->value)>0) {?>
        <div class="dropdown">
        <br>
                <button class="btn btn-primary dropdown-toggle pull-right" type="button" data-toggle="dropdown" id="dropdownbutton"><span class="droptext">Newest</span>
		<span class="caret caret-reversed"></span>
		
		</button>
          <ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="menu1">
                    <li><a  onclick="changeDropdown('Newest','<?php echo $_smarty_tpl->tpl_vars['query']->value;?>
')">Newest</a></li>
                    <li><a  onclick="changeDropdown('Oldest','<?php echo $_smarty_tpl->tpl_vars['query']->value;?>
')">Oldest</a></li>
                    <li><a  onclick="changeDropdown('Popular','<?php echo $_smarty_tpl->tpl_vars['query']->value;?>
')">Popular</a></li>
                    <li><a  onclick="changeDropdown('Controversial','<?php echo $_smarty_tpl->tpl_vars['query']->value;?>
')">Controversial</a></li>
                </ul>   
        </div>
      <br><br>
        <div class="allcontent">
        <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
		<div class="container" style="width:80%" id="article-snip-<?php echo $_smarty_tpl->tpl_vars['article']->value['article_id'];?>
">
			<br>
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
			<h6>By <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/view_profile?usr=<?php echo $_smarty_tpl->tpl_vars['article']->value['authorusername'];?>
" style="color:black; font-style:italic"><?php echo $_smarty_tpl->tpl_vars['article']->value['authorname'];?>
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
        <?php } ?>
        </div>
        <?php } else { ?>
        <p> No results found... </p>
         <br><br><br>
        <?php }?>
    </div>
    
    
    
    
        <div class="tab-pane fade" id="users"> 
         <br><br>
         <?php if (sizeof($_smarty_tpl->tpl_vars['users']->value)>0) {?>
        <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
            <img class="img-responsive pull-left" id="profilepic" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
" src="<?php echo getImage($_smarty_tpl->tpl_vars['user']->value['username']);?>
">
            <h2> <a style="text-decoration:none; padding-left:30px; color:black" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/users/view_profile.php?username=<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</a></h2>
            <p><span style="padding-left:30px"><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</span></p>
            <p><span style="padding-left:30px"><?php echo $_smarty_tpl->tpl_vars['user']->value['bio'];?>
</span></p>
            <br><br>  
        <?php } ?> 
        <?php } else { ?>
        <p> No results found... </p>
        <br><br><br>
        <?php }?>
        </div>                                                         
  </div>

</div>
<br><br>
</body><?php }} ?>
