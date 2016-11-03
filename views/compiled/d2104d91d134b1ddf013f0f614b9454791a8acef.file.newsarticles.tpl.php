<?php /* Smarty version Smarty-3.1.18, created on 2016-11-03 13:44:07
         compiled from "views\newsarticles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1198957f4f719aa09e0-87903696%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2104d91d134b1ddf013f0f614b9454791a8acef' => 
    array (
      0 => 'views\\newsarticles.tpl',
      1 => 1478177045,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1198957f4f719aa09e0-87903696',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57f4f719b36238_47762833',
  'variables' => 
  array (
    'result' => 0,
    'i' => 0,
    'oneItem' => 0,
    'total_number_articles' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f4f719b36238_47762833')) {function content_57f4f719b36238_47762833($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\wamp\\www\\Leerjaar2\\myband2SlideOut\\libs\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:\\wamp\\www\\Leerjaar2\\myband2SlideOut\\libs\\plugins\\modifier.date_format.php';
?><section>
<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(1, null, 0);?>
 <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
 <?php if ($_smarty_tpl->tpl_vars['i']->value==0) {?>
 <div id="left">
  <h1><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
</h1>
  <img src=<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
>    
  <!--<content><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['oneItem']->value['content'],30);?>
</content>-->
  <content><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['content'];?>
</content>
   <p><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oneItem']->value['date_created'],"%e %B %Y");?>
</p>
    </div>
    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(1, null, 0);?>
    <?php } else { ?>
    <div id="right">
  <h1><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
</h1>
  <img src=<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
>    
  <!--<content><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['oneItem']->value['content'],30);?>
</content>-->
  <content><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['content'];?>
</content>
    <p><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oneItem']->value['date_created'],"%e %B %Y");?>
</p>
    </div>
    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, 0);?>
    <?php }?>
   <?php } ?>
</section>

 <div id="PageInation">
 <ul>
      <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['total_number_articles']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['total_number_articles']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
     <li><a href="?action=home&page_nr=<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</a></li>
<?php }} ?>
     </ul>
    </div>
<?php }} ?>
