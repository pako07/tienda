<?php /* Smarty version Smarty-3.1.19, created on 2016-08-08 17:27:56
         compiled from "C:\wamp\www\Mitienda\admin\themes\default\template\controllers\logs\employee_field.tpl" */ ?>
<?php /*%%SmartyHeaderCode:679757a8c11c2b0f56-86508230%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6a1c6d3888dbc07a014066486674409aaacec74' => 
    array (
      0 => 'C:\\wamp\\www\\Mitienda\\admin\\themes\\default\\template\\controllers\\logs\\employee_field.tpl',
      1 => 1466020874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '679757a8c11c2b0f56-86508230',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'employee_image' => 0,
    'employee_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57a8c11c2bb240_84944210',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a8c11c2bb240_84944210')) {function content_57a8c11c2bb240_84944210($_smarty_tpl) {?>
<span class="employee_avatar_small">
	<img class="imgm img-thumbnail" alt="" src="<?php echo $_smarty_tpl->tpl_vars['employee_image']->value;?>
" width="32" height="32" />
</span>
<?php echo $_smarty_tpl->tpl_vars['employee_name']->value;?>
<?php }} ?>
