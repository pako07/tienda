<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 09:36:23
         compiled from "C:\wamp\www\Mitienda\admin323gttix9\themes\default\template\controllers\themes\helpers\view\importtheme_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2353257ab3be7226212-26806269%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82fe9a33e84401b18191a572ec1e9bb9fd41dc6b' => 
    array (
      0 => 'C:\\wamp\\www\\Mitienda\\admin323gttix9\\themes\\default\\template\\controllers\\themes\\helpers\\view\\importtheme_view.tpl',
      1 => 1466020874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2353257ab3be7226212-26806269',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'add_new_theme_label' => 0,
    'context_mode' => 0,
    'add_new_theme_href' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab3be72ed957_10152827',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab3be72ed957_10152827')) {function content_57ab3be72ed957_10152827($_smarty_tpl) {?>
<div class="panel">
    <h3>
        <i class="icon-picture"></i> <?php echo $_smarty_tpl->tpl_vars['add_new_theme_label']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['context_mode']->value==Context::MODE_HOST) {?><?php echo smartyTranslate(array('s'=>'(Advanced)'),$_smarty_tpl);?>
<?php }?>
    </h3>
    <p><?php echo smartyTranslate(array('s'=>'Duplicate an existing theme and edit it; or create a new theme from scratch! Recommended for advanced users only.'),$_smarty_tpl);?>
</p>
    <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['add_new_theme_href']->value;?>
"><i class="icon-plus"></i> <?php echo $_smarty_tpl->tpl_vars['add_new_theme_label']->value;?>
</a>
</div>
<?php }} ?>
