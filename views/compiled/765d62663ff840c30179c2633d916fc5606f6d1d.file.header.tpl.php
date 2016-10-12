<?php /* Smarty version Smarty-3.1.18, created on 2016-10-12 14:44:10
         compiled from "views\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:745657ee55d7da8ac1-49959904%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '765d62663ff840c30179c2633d916fc5606f6d1d' => 
    array (
      0 => 'views\\header.tpl',
      1 => 1476276249,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '745657ee55d7da8ac1-49959904',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57ee55d7ddc938_28698092',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ee55d7ddc938_28698092')) {function content_57ee55d7ddc938_28698092($_smarty_tpl) {?><script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<img id="HeaderPic" src="image/Side2SideBigBanner.png">
<nav class="desktop">
  <a id="Home" href="index.php"><img id="LogoHeader" alt="Side2Side" src="image/Side2SidePhotoshopped4.png" </a>
  <a id="Band" href="?action=about">Band</a>
  <a id="Tour" href="?action=tour">Tour</a>
  <a id="Shop" href="?action=shop">Shop</a>
  <a id="Search" href="?action=search">Search</a>
</nav>

<nav class="mobile">
  <button>Toggle</button>
  <div>
    <a id="Home" href="#">Mobile 1</a>
    <a id="Band" href="#">Mobile 2</a>
    <a id="Tour" href="#">Mobile 3</a>
    <a id="Shop" href="#">Mobile 4</a>
    <a id="Search" href="#">Mobile 5</a>
  </div>
</nav>

<script>
$('button').click(function() {
 $(this).toggleClass('expanded').siblings('div').slideToggle();
});</script>
<?php }} ?>
