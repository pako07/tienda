<?php /* Smarty version Smarty-3.1.19, created on 2016-08-08 17:28:03
         compiled from "C:\wamp\www\Mitienda\admin\themes\default\template\controllers\shop\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:476057a8c12327c4a7-92379907%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a22797758b5cc6d037bb12a201f7b1e99a4c2216' => 
    array (
      0 => 'C:\\wamp\\www\\Mitienda\\admin\\themes\\default\\template\\controllers\\shop\\content.tpl',
      1 => 1466020874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '476057a8c12327c4a7-92379907',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shops_tree' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57a8c12328e605_57300743',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a8c12328e605_57300743')) {function content_57a8c12328e605_57300743($_smarty_tpl) {?>

<div class="row">
	<div class="col-lg-4">
		<?php echo $_smarty_tpl->tpl_vars['shops_tree']->value;?>

	</div>
	<div class="col-lg-8"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
</div><?php }} ?>
