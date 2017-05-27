<?php /* Smarty version Smarty-3.1.15, created on 2017-05-27 11:37:27
         compiled from "C:\wamp64\www\LBAW-ChipperNews\ChipperNews\templates\users\help.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2817359289c5f4ba1f5-35806303%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b4df737784f32f937a8c666e61754ed6de0b9cd' => 
    array (
      0 => 'C:\\wamp64\\www\\LBAW-ChipperNews\\ChipperNews\\templates\\users\\help.tpl',
      1 => 1495885046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2817359289c5f4ba1f5-35806303',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_59289c5f4e0a13_03769282',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59289c5f4e0a13_03769282')) {function content_59289c5f4e0a13_03769282($_smarty_tpl) {?>  <nav class="navbar navbar-default ">
        <h1 class="text-center " href="# "> Help </h1>
    </nav>
<div class="container">
<h2>Q&A</h2>
<p>How do I check my post history?</p>
<p>Click on the profile and on the side menu on the left click comment history</p>
<p>How do I send messages?</p>
<p>Click on the profile and on the side menu click inbox, in the inbox page click compose message</p>
<p>How do I make friends?</p>
<p>Click on the name of the user you wanna befriend in the comments or articles or wherever else you might find him and in that user's profile, click the add friend button</p>
<br><br>
<?php if (isset($_SESSION['user_id'])) {?>
<button>Seek help from administration</button>
<?php } else { ?>
<h3>If you wish to contact the administration, create an account first by clicking on the register link in the header</h3
<?php }?>
</div>
<br>
<br><?php }} ?>
