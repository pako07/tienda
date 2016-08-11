<?php /* Smarty version Smarty-3.1.19, created on 2016-08-08 13:57:33
         compiled from "C:\wamp\www\Mitienda\admin323gttix9\themes\default\template\controllers\products\helpers\tree\tree_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2860757a8d61d2f8567-06449873%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6910c20ef2c7a21c39fe8599b59f4546b780586d' => 
    array (
      0 => 'C:\\wamp\\www\\Mitienda\\admin323gttix9\\themes\\default\\template\\controllers\\products\\helpers\\tree\\tree_toolbar.tpl',
      1 => 1466020874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2860757a8d61d2f8567-06449873',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actions' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57a8d61d389a12_11924933',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a8d61d389a12_11924933')) {function content_57a8d61d389a12_11924933($_smarty_tpl) {?>
<div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php } ?>
	<?php }?>
</div><?php }} ?>
