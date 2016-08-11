<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 11:27:58
         compiled from "C:\wamp\www\Mitienda\modules\appagebuilder\views\templates\hook\ApGenCode.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2037257ab560e3ec791-12045257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf5cab507633baefd9ec8a0b03c43d4790231331' => 
    array (
      0 => 'C:\\wamp\\www\\Mitienda\\modules\\appagebuilder\\views\\templates\\hook\\ApGenCode.tpl',
      1 => 1470840277,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2037257ab560e3ec791-12045257',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'formAtts' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab560e49d6f0_44651754',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab560e49d6f0_44651754')) {function content_57ab560e49d6f0_44651754($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\hook\ApGenCode -->

<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['tpl_file'])&&!empty($_smarty_tpl->tpl_vars['formAtts']->value['tpl_file'])) {?>
	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['formAtts']->value['tpl_file'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['error_file'])&&!empty($_smarty_tpl->tpl_vars['formAtts']->value['error_file'])) {?>
	<?php echo $_smarty_tpl->tpl_vars['formAtts']->value['error_message'];?>

<?php }?>
<?php }} ?>
