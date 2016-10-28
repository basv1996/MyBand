<?php /* Smarty version Smarty-3.1.18, created on 2016-10-25 12:12:44
         compiled from "views\tour.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2563958014217ea06b7-07735002%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f56c800133e89ab706001ab1035b3a847fd38d1' => 
    array (
      0 => 'views\\tour.tpl',
      1 => 1477390363,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2563958014217ea06b7-07735002',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_580142180619a1_07533458',
  'variables' => 
  array (
    'result3' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580142180619a1_07533458')) {function content_580142180619a1_07533458($_smarty_tpl) {?><link rel="stylesheet" href="css/tour.css">
<table>
<tr>
    <th>d/m/y</th>
    <th>Venue</th>
    <th>City</th>
    <th>Country</th>
  </tr>
<?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result3']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
 <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['date'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['venue'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['city'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['country'];?>
</td>
  </tr>
<?php } ?>
</table>
<?php }} ?>
