<?php /* Smarty version Smarty-3.1.15, created on 2017-04-19 10:22:23
         compiled from "C:\wamp64\www\LBAW\LBAW-ChipperNews\ChipperNews\templates\search\frontpage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:430958f73a5f57cbf4-29754027%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ecf89c9273741d7efc514f6fc5b2fbf45634b66' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW\\LBAW-ChipperNews\\ChipperNews\\templates\\search\\frontpage.tpl',
      1 => 1492597322,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '430958f73a5f57cbf4-29754027',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58f73a5f5ee1a4_76919740',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f73a5f5ee1a4_76919740')) {function content_58f73a5f5ee1a4_76919740($_smarty_tpl) {?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chipper News</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/bootstrap.min.css">
    <!-- Optional Bootstrap theme -->
    <!--<link rel="stylesheet" href="css/bootstrap-theme.min.css">-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/bootstrap.min.js"></script>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/bootstrap-social.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/styles-ricardo.css">
    <link href="https://fonts.googleapis.com/css?family=Lato|Lora|Playfair+Display:700" rel="stylesheet">

</head>
<?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body>
   
    <nav class="navbar navbar-default ">
        <h1 class="text-center "> Featured </h1>
    </nav>
    <div class="row " style="padding-left:4%;padding-right:4% ">
        <div class="col-sm-6 col-md-4 ">
            <a class="thumbnail " href="article.html" style="text-decoration:none ">
                <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images\articles\news1.jpg " alt="... ">
                <div class="caption ">
                    <h3>Researchers critique security in messaging app Confide</h3>
                    <p>Confide, a messaging app that’s raised millions in venture capital and promises “military-grade encryption” to its users, has surged in popularity among D.C. insiders who want to keep their communications secret under the Trump administration.</p>
                    <span class="label label-info ">Security</span>
                    <span class="label label-success ">Mobile</span>
                    <span class="label label-danger ">Politics</span>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-md-4 ">
            <a class="thumbnail " href="article.html" style="text-decoration:none ">
                <img href=" " src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images\articles\news2.jpg " alt="... ">
                <div class="caption ">
                    <h3>Gobi raises $500K to take on Snapchat</h3>
                    <p>Norwegian startup Gobi raised $500,000 at a $15 million valuation to take on Snapchat with its “Stories” communication tool. The platform enables users to create public and private groups where users can share photos and videos that
                        stay around for three days before vanishing into digital pixel-dust.</p>
                    <span class="label label-info ">Startup</span>
                    <span class="label label-success ">Mobile</span>
                    <span class="label label-danger ">App</span>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-md-4 ">
            <a class="thumbnail " href="article.html" style="text-decoration:none ">
                <img href="# " src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images\articles\news3.jpg " alt="... ">
                <div class="caption ">
                    <h3>Google-led Accelerated Mobile Pages project expands in Asia, with support from Baidu</h3>
                    <p>Google just announced that search results in Baidu, Sogou and Yahoo Japan will be connecting directly to Accelerated Mobile Pages.</p>
                    <span class="label label-info ">App</span>
                    <span class="label label-success ">Mobile</span>
                    <span class="label label-danger ">Google</span>
                </div>
            </a>
        </div>

    </div>

    <nav class="navbar navbar-default ">
        <h1 class="text-center " href="# "> News </h1>
    </nav>
    <div class="row " style="padding-left:4%;padding-right:4% ">
        <div class="col-6 col-lg-4 ">
            <h2>Performance Beatdown</h2>
            <p>Node.js vs PHP Performance Benchmarks</p>
            <span class="label label-info ">App</span>
            <span class="label label-success ">News</span>
            <span class="label label-danger ">Tech</span>
            <p><a class="btn btn-secondary " href="article.html" role="button ">View details »</a></p>
        </div>
        <!--/span-->
        <div class="col-6 col-lg-4 ">
            <h2>C++ is alive and kicking</h2>
            <p>Despite recent drop, C++ usage is still relevant.</p>
            <span class="label label-info ">App</span>
            <span class="label label-success ">News</span>
            <span class="label label-danger ">Tech</span>
            <p><a class="btn btn-secondary " href="article.html" role="button ">View details »</a></p>
        </div>
        <!--/span-->
        <div class="col-6 col-lg-4 ">
            <h2>What is the future of Python programming language?</h2>
            <p>A language soaring in popularity, what does the future hold for such a prominent and widely used technology.</p>
            <span class="label label-info ">App</span>
            <span class="label label-success ">News</span>
            <span class="label label-danger ">Tech</span>
            <p><a class="btn btn-secondary " href="article.html" role="button ">View details »</a></p>
        </div>
        <!--/span-->
        <div class="col-6 col-lg-4 ">
            <h2>Veem, formerly Align Commerce, gets $24M from GV, others for its Venmo for SMBs</h2>
            <p>Remittances — the business of money transfers — is a fragmented and huge market, currently estimated to be worth some $25 trillion annually. </p>
            <span class="label label-info ">App</span>
            <span class="label label-success ">News</span>
            <span class="label label-danger ">Tech</span>
            <p><a class="btn btn-secondary " href="article.html" role="button ">View details »</a></p>
        </div>
        <!--/span-->
        <div class="col-6 col-lg-4 ">
            <h2>These magical (robotic) socks teach you to dance (robotically)</h2>
            <p>As humans find themselves forced to mate with our robotic overlords I suspect there will be some dancing. </p>
            <span class="label label-info ">App</span>
            <span class="label label-success ">News</span>
            <span class="label label-danger ">Tech</span>
            <p><a class="btn btn-secondary " href="article.html" role="button ">View details »</a></p>
        </div>
        <!--/span-->
        <div class="col-6 col-lg-4 ">
            <h2>Pebby makes long-distance pet relationships more fun</h2>
            <p>I’m convinced that if humans could find fun in simple games as easily as pets, our world would be a healthier place. </p>
            <span class="label label-info ">App</span>
            <span class="label label-success ">News</span>
            <span class="label label-danger ">Tech</span>
            <p><a class="btn btn-secondary " href="article.html" role="button ">View details »</a></p>
        </div>
        <!--/span-->
        <div class="col-md-12 text-center" style="margin-bottom:10px">
            <button id="moreNews " name="singlebutton " class="btn btn-primary ">More News</button>
        </div>

    </div>


    </div>
    <!-- MODALS -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close " data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Login</h4>
                </div>
                <div class="modal-body ">
                    <form class="form-signin">
                        <label for="inputEmail " class="sr-only ">Email address</label>
                        <input type="email " id="inputEmail " class="form-control " placeholder="Email address " required=" " autofocus=" ">
                        <label for="inputPassword " class="sr-only ">Password</label>
                        <input type="password " id="inputPassword " class="form-control " placeholder="Password " required=" ">
                        <div class="checkbox">
                            <label>
                        <input type="checkbox" value="remember-me "> Remember me
                    </label>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block " type="submit ">Sign in</button>
                        <a class="btn btn-block btn-social btn-facebook ">
                            <span class="fa fa-facebook "></span> Sign in with Facebook
                        </a>
                    </form>
                </div>
            </div>

        </div>
    </div>

   <?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>

</html><?php }} ?>
