<?php /* Smarty version Smarty-3.1.19, created on 2016-08-08 17:28:11
         compiled from "C:\wamp\www\Mitienda\admin\themes\default\template\helpers\tree\tree_node_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:854857a8c12b2d3489-54285562%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54f2a001302c72ea2bae75ab30e2883d8499769b' => 
    array (
      0 => 'C:\\wamp\\www\\Mitienda\\admin\\themes\\default\\template\\helpers\\tree\\tree_node_item.tpl',
      1 => 1466020874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '854857a8c12b2d3489-54285562',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57a8c12b2dc293_76252004',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a8c12b2dc293_76252004')) {function content_57a8c12b2dc293_76252004($_smarty_tpl) {?>

<li class="tree-item">
	<span class="tree-item-name">
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li><?php }} ?>
