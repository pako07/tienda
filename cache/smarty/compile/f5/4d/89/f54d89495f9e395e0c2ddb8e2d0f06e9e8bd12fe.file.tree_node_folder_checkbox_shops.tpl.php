<?php /* Smarty version Smarty-3.1.19, created on 2016-08-08 17:28:11
         compiled from "C:\wamp\www\Mitienda\admin\themes\default\template\helpers\tree\tree_node_folder_checkbox_shops.tpl" */ ?>
<?php /*%%SmartyHeaderCode:690257a8c12b1dcc04-12689997%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f54d89495f9e395e0c2ddb8e2d0f06e9e8bd12fe' => 
    array (
      0 => 'C:\\wamp\\www\\Mitienda\\admin\\themes\\default\\template\\helpers\\tree\\tree_node_folder_checkbox_shops.tpl',
      1 => 1466020874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '690257a8c12b1dcc04-12689997',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'table' => 0,
    'children' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57a8c12b243ef2_40394684',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a8c12b243ef2_40394684')) {function content_57a8c12b243ef2_40394684($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\wamp\\www\\Mitienda\\tools\\smarty\\plugins\\modifier.escape.php';
?>
<li class="tree-folder">
	<span class="tree-folder-name<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> tree-folder-name-disable<?php }?>">
		<input type="checkbox" name="checkBoxShopGroupAsso_<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['node']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> disabled="disabled"<?php }?> />
		<i class="icon-folder-close"></i>
		<label class="tree-toggler"><?php echo smartyTranslate(array('s'=>'Group: %s','sprintf'=>htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8', true)),$_smarty_tpl);?>
</label>
	</span>
	<ul class="tree">
		<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['children']->value, 'UTF-8');?>

	</ul>
</li><?php }} ?>
