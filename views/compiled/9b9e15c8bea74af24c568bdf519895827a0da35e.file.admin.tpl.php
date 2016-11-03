<?php /* Smarty version Smarty-3.1.18, created on 2016-10-31 16:30:52
         compiled from "views\admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4257581763ac63b529-69726115%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b9e15c8bea74af24c568bdf519895827a0da35e' => 
    array (
      0 => 'views\\admin.tpl',
      1 => 1477927837,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4257581763ac63b529-69726115',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'NAME' => 0,
    'SUBMIT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_581763ac79cb15_51516761',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581763ac79cb15_51516761')) {function content_581763ac79cb15_51516761($_smarty_tpl) {?><form action="select_admin.php" method="post"> 
Name :<input type="text" name="<?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
" /> 

<input type="submit" name="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
" value=submit /> 
</form> 
<?php }} ?>
