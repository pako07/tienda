<?php /* Smarty version Smarty-3.1.19, created on 2016-08-08 17:28:08
         compiled from "C:\wamp\www\Mitienda\admin\themes\default\template\helpers\list\list_action_default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2449957a8c128201175-32965541%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c78018c1c23df7ef2f13f5680c31f3364c87d95a' => 
    array (
      0 => 'C:\\wamp\\www\\Mitienda\\admin\\themes\\default\\template\\helpers\\list\\list_action_default.tpl',
      1 => 1466020874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2449957a8c128201175-32965541',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57a8c1282345c3_57484553',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a8c1282345c3_57484553')) {function content_57a8c1282345c3_57484553($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
"<?php if (isset($_smarty_tpl->tpl_vars['name']->value)) {?> name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> class="default">
	<i class="icon-asterisk"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
