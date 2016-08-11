<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 11:27:58
         compiled from "C:\wamp\www\Mitienda\modules\appagebuilder\views\templates\hook\ApModule.tpl" */ ?>
<?php /*%%SmartyHeaderCode:704357ab560e6d9617-66947667%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93e465468f8f8d6584199eba403744e5d250a5ac' => 
    array (
      0 => 'C:\\wamp\\www\\Mitienda\\modules\\appagebuilder\\views\\templates\\hook\\ApModule.tpl',
      1 => 1470840277,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '704357ab560e6d9617-66947667',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'apLiveEdit' => 0,
    'apContent' => 0,
    'apLiveEditEnd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab560e70aff8_04662180',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab560e70aff8_04662180')) {function content_57ab560e70aff8_04662180($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\hook\ApModule -->
<?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value ? $_smarty_tpl->tpl_vars['apLiveEdit']->value : '';?>

<?php echo $_smarty_tpl->tpl_vars['apContent']->value;?>

<?php echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value ? $_smarty_tpl->tpl_vars['apLiveEditEnd']->value : '';?>
<?php }} ?>
