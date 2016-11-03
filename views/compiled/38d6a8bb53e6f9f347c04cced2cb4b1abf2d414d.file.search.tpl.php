<?php /* Smarty version Smarty-3.1.18, created on 2016-11-03 14:54:09
         compiled from "views\search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:290415819f9d0c41fa5-57750321%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38d6a8bb53e6f9f347c04cced2cb4b1abf2d414d' => 
    array (
      0 => 'views\\search.tpl',
      1 => 1478181248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '290415819f9d0c41fa5-57750321',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5819f9d0ccc9b9_32988315',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5819f9d0ccc9b9_32988315')) {function content_5819f9d0ccc9b9_32988315($_smarty_tpl) {?><head>
<style>
    input {
        margin-left: 5%;
    }
    </style>
<meta charset="utf-8">
<script>
function showResult(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","model/getuser.php?q="+str,true);
  xmlhttp.send();
}
</script>
</head>
<body>
<form>
<input type="text" size="30" onkeyup="showResult(this.value)">
<div id="livesearch"></div>
</form>
<br>
<div id="txtHint"><b>Zoek naar artikelen</b></div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</body>
<?php }} ?>
