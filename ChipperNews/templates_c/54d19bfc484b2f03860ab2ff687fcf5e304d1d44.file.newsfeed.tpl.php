<?php /* Smarty version Smarty-3.1.15, created on 2017-05-29 12:35:00
         compiled from "C:\wamp64\www\LBAW-ChipperNews\ChipperNews\templates\users\newsfeed.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10975929a82c33e901-45923234%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54d19bfc484b2f03860ab2ff687fcf5e304d1d44' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW-ChipperNews\\ChipperNews\\templates\\users\\newsfeed.tpl',
      1 => 1496061299,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10975929a82c33e901-45923234',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5929a82c58a4a5_62556707',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'articles' => 0,
    'article' => 0,
    'wholiked' => 0,
    'liked' => 0,
    'likedarray' => 0,
    'friend' => 0,
    'subcategories' => 0,
    'subart' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5929a82c58a4a5_62556707')) {function content_5929a82c58a4a5_62556707($_smarty_tpl) {?><head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Articles</title>
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/styles-newsfeed-myarticles.css">
	<link href="https://fonts.googleapis.com/css?family=Lato|Lora|Playfair+Display:700" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://www.w3schools.com/lib/w3data.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/bootstrap.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/newsfeedJS.js"></script>
    <span class="base_url" id="base_url" hidden><?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
</span>
	<!-- Optional Bootstrap theme -->
	<!--<link rel="stylesheet" href="css/bootstrap-theme.min.css">-->
</head>

<body>
	<div id="bg">
			<img class="bg" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/images/assets/circuit.jpg" alt="">
		</div>
		<div class="container-fluid" id="feedheader">
			<h1 class="nf">Newsfeed</h1>
			<div class="dropdown">
				<button class="btn btn-primary dropdown-toggle pull-right" type="button" data-toggle="dropdown" id="dropdownbutton" aria-expanded="false"><span class="droptext">Me</span>
		<span class="caret caret-reversed"></span> 
		</button>
				<ul class="dropdown-menu dropdown-menu-right" role="menu">
					<li><a href="#" onclick="changeDropdown('Me')">Me</a></li>
					<li><a href="#" onclick="changeDropdown('Mixed')">Mixed</a></li>
					<li><a href="#" onclick="changeDropdown('Friends')">Friends</a></li>
				</ul>
			</div>
		</div>
	<div class="allcontent">
        <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
		<div class="container article-snip friend" id="article-snip-<?php echo $_smarty_tpl->tpl_vars['article']->value['article_id'];?>
">
            <?php $_smarty_tpl->tpl_vars['likedarray'] = new Smarty_variable(null, null, 0);?> 
            <?php $_smarty_tpl->tpl_vars['wholiked'] = new Smarty_variable(fetchWhoLiked($_SESSION['user_id'],$_smarty_tpl->tpl_vars['article']->value['article_id']), null, 0);?>
            <?php if (sizeof($_smarty_tpl->tpl_vars['wholiked']->value)>0) {?>
            <br>
                <?php  $_smarty_tpl->tpl_vars['liked'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['liked']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wholiked']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['liked']->key => $_smarty_tpl->tpl_vars['liked']->value) {
$_smarty_tpl->tpl_vars['liked']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['liked']->value['user_id1']!=$_SESSION['user_id']) {?>
                    <?php $_smarty_tpl->tpl_vars['likedarray'] = new Smarty_variable(appendFriend($_smarty_tpl->tpl_vars['liked']->value['user2_name'],$_smarty_tpl->tpl_vars['likedarray']->value), null, 0);?>
                    <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars['likedarray'] = new Smarty_variable(appendFriend($_smarty_tpl->tpl_vars['liked']->value['user1_name'],$_smarty_tpl->tpl_vars['likedarray']->value), null, 0);?>
                    <?php }?>
                <?php } ?>
           
            <p>
            <?php  $_smarty_tpl->tpl_vars['friend'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['friend']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['likedarray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['friend']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['friend']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['friend']->key => $_smarty_tpl->tpl_vars['friend']->value) {
$_smarty_tpl->tpl_vars['friend']->_loop = true;
 $_smarty_tpl->tpl_vars['friend']->iteration++;
 $_smarty_tpl->tpl_vars['friend']->last = $_smarty_tpl->tpl_vars['friend']->iteration === $_smarty_tpl->tpl_vars['friend']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['last'] = $_smarty_tpl->tpl_vars['friend']->last;
?>
            
            <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['last']) {?>
            <span style="color:#357266;font-weight:bold;"><?php echo $_smarty_tpl->tpl_vars['friend']->value;?>
 </span> find this article just chipper!
            <?php } else { ?>
            <span style="color:#357266;font-weight:bold;"><?php echo $_smarty_tpl->tpl_vars['friend']->value;?>
,</span>
            <?php }?> 
          
            <?php } ?>
             </p>
            <?php }?>
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
    <?php } ?>
    </div>
</body><?php }} ?>
