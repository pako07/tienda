<?php /* Smarty version Smarty-3.1.19, created on 2016-08-09 11:50:49
         compiled from "C:\wamp\www\Mitienda\admin323gttix9\themes\default\template\helpers\list\list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2819857aa09e93207a4-09195147%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c68ea8b69d490e46fb00ee064d083b44b8bdcdf' => 
    array (
      0 => 'C:\\wamp\\www\\Mitienda\\admin323gttix9\\themes\\default\\template\\helpers\\list\\list_action_view.tpl',
      1 => 1466020874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2819857aa09e93207a4-09195147',
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
  'unifunc' => 'content_57aa09e9358ec0_89669217',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57aa09e9358ec0_89669217')) {function content_57aa09e9358ec0_89669217($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" >
	<i class="icon-search-plus"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
