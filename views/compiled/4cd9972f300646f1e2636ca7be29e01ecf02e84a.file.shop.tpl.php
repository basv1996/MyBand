<?php /* Smarty version Smarty-3.1.18, created on 2016-10-18 17:19:02
         compiled from "views\shop.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2697658062f9b40b3b2-57834865%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4cd9972f300646f1e2636ca7be29e01ecf02e84a' => 
    array (
      0 => 'views\\shop.tpl',
      1 => 1476803940,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2697658062f9b40b3b2-57834865',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58062f9b4a0ad7_79298637',
  'variables' => 
  array (
    'result4' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58062f9b4a0ad7_79298637')) {function content_58062f9b4a0ad7_79298637($_smarty_tpl) {?><link rel="stylesheet" href="css/merchandies.css">
<section>
 <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result4']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
 <div id="merchandies">
  <h1><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['Title'];?>
</h1>
  <img src=<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image_article'];?>
> 
  <div id="Prijskaartje">
  <p><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['price'];?>
</p>
  <content>Aantal:<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['amount'];?>
</content>
     </div>
     </br>
    </div>
   <?php } ?>
</section>

<button>Betalen</button>





<?php }} ?>
