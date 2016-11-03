<?php /* Smarty version Smarty-3.1.18, created on 2016-11-03 09:54:16
         compiled from "views\band.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2934458009de77dd4f0-85508864%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10de91d7d0f4a03c85aca9320a8a153ff77e1738' => 
    array (
      0 => 'views\\band.tpl',
      1 => 1478163253,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2934458009de77dd4f0-85508864',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58009de7815079_12419195',
  'variables' => 
  array (
    'result2' => 0,
    'i' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58009de7815079_12419195')) {function content_58009de7815079_12419195($_smarty_tpl) {?><link rel="stylesheet" href="css/band.css">
<section>
<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(1, null, 0);?>
 <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
 <?php if ($_smarty_tpl->tpl_vars['i']->value==0) {?>
 <div id="BandlidLinks">
  <h1><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['name'];?>
</h1>
  <div id="containerBig">
  <img src=<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['profileImage'];?>
>    
  <div class="container">
  <content><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['information'];?>
</content>
     </div>
    </div>
    </div>
    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(1, null, 0);?>
    <?php } else { ?>
    <div id="BandlidRechts">
  <h1><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['name'];?>
</h1>
  <div id="containerBig">
  <img src=<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['profileImage'];?>
>    
  <div class="container">
  <content><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['information'];?>
</content>
        </div>
    </div>
    </div>
    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, 0);?>
    <?php }?>
   <?php } ?>
   <div id="videos">
   <div id="video1">
     <h2>Küss Mich Jetzt</h2>
      <iframe id="YTVid" src="https://www.youtube.com/embed/SwvylVmTgGo" frameborder="0" allowfullscreen></iframe>
    </div>
     <div id="video2">
      <h2>Forget My Name ft René Froger</h2>
      <iframe id="YTVid" src="https://www.youtube.com/embed/ETQ-n4FMhCU" frameborder="0" allowfullscreen></iframe> 
   </div>
    </div>
</section>





<?php }} ?>
