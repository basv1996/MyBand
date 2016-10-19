<?php /* Smarty version Smarty-3.1.18, created on 2016-10-14 14:08:51
         compiled from "views\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:745657ee55d7da8ac1-49959904%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '765d62663ff840c30179c2633d916fc5606f6d1d' => 
    array (
      0 => 'views\\header.tpl',
      1 => 1476446930,
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
<meta name="viewport" content="width=device-width">
<img id="HeaderPic" src="image/Side2SideBigBanner.png">

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a id="Search" href="?action=search"><input type="text" class=serach-query placeholder="Search" autocomplete="off"></a>
  <a id="Home" href="index.php"><img id="LogoHeader" alt="Side2Side" src="image/Side2SidePhotoshopped4.png" </a>
  <a id="Band" href="?action=band">Band</a>
  <a id="Tour" href="?action=tour">Tour</a>
  <a id="Shop" href="?action=shop">Shop</a>
  
</div>

<div id="main">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
</div>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}
</script><?php }} ?>
