<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 11:40:35
         compiled from "C:\wamp\www\Mitienda\themes\ap_juice\profiles\profile1453404375\id_gencode_56fcfa36507e1_1459419702.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1328957ab590384a251-42615128%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3295a67fd4690459f76a74102001588beaae9725' => 
    array (
      0 => 'C:\\wamp\\www\\Mitienda\\themes\\ap_juice\\profiles\\profile1453404375\\id_gencode_56fcfa36507e1_1459419702.tpl',
      1 => 1470847235,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1328957ab590384a251-42615128',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_dir' => 0,
    'shop_name' => 0,
    'logo_url' => 0,
    'logo_image_width' => 0,
    'logo_image_height' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab5903893975_31744864',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab5903893975_31744864')) {function content_57ab5903893975_31744864($_smarty_tpl) {?>                               <a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>
">                                        <img class="logo img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['logo_url']->value;?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if (isset($_smarty_tpl->tpl_vars['logo_image_width']->value)&&$_smarty_tpl->tpl_vars['logo_image_width']->value) {?> width="<?php echo $_smarty_tpl->tpl_vars['logo_image_width']->value;?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['logo_image_height']->value)&&$_smarty_tpl->tpl_vars['logo_image_height']->value) {?> height="<?php echo $_smarty_tpl->tpl_vars['logo_image_height']->value;?>
"<?php }?>/>                                    </a><?php }} ?>
