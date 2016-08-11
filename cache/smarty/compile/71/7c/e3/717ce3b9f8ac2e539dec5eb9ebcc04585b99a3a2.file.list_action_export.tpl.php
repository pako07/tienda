<?php /* Smarty version Smarty-3.1.19, created on 2016-08-08 17:28:02
         compiled from "C:\wamp\www\Mitienda\admin\themes\default\template\controllers\request_sql\list_action_export.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2201457a8c122d5eaf4-22648139%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '717ce3b9f8ac2e539dec5eb9ebcc04585b99a3a2' => 
    array (
      0 => 'C:\\wamp\\www\\Mitienda\\admin\\themes\\default\\template\\controllers\\request_sql\\list_action_export.tpl',
      1 => 1466020874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2201457a8c122d5eaf4-22648139',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57a8c122d7eee5_24075844',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a8c122d7eee5_24075844')) {function content_57a8c122d7eee5_24075844($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" class="btn btn-default">
	<i class="icon-cloud-upload"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
