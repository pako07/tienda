<?php /* Smarty version Smarty-3.1.19, created on 2016-08-08 17:27:57
         compiled from "C:\wamp\www\Mitienda\admin\themes\default\template\controllers\modules\warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1201257a8c11d2d2b03-31463785%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4801beb42b1eaae13ada3c3f0c00137711db36d4' => 
    array (
      0 => 'C:\\wamp\\www\\Mitienda\\admin\\themes\\default\\template\\controllers\\modules\\warning_module.tpl',
      1 => 1466020874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1201257a8c11d2d2b03-31463785',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57a8c11d2e0a28_08059067',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a8c11d2e0a28_08059067')) {function content_57a8c11d2e0a28_08059067($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
