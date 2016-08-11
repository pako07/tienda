<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 11:33:36
         compiled from "C:\wamp\www\Mitienda\themes\ap_food\profiles\profile1453404375\id_gencode_56fcfa36507e1_1459419702.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2499957ab57606f9329-93439906%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54654ffb81501ed37454040bdd77f87017283748' => 
    array (
      0 => 'C:\\wamp\\www\\Mitienda\\themes\\ap_food\\profiles\\profile1453404375\\id_gencode_56fcfa36507e1_1459419702.tpl',
      1 => 1470846816,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2499957ab57606f9329-93439906',
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
  'unifunc' => 'content_57ab576076c518_99323887',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab576076c518_99323887')) {function content_57ab576076c518_99323887($_smarty_tpl) {?>                               <a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>
">                                        <img class="logo img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['logo_url']->value;?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if (isset($_smarty_tpl->tpl_vars['logo_image_width']->value)&&$_smarty_tpl->tpl_vars['logo_image_width']->value) {?> width="<?php echo $_smarty_tpl->tpl_vars['logo_image_width']->value;?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['logo_image_height']->value)&&$_smarty_tpl->tpl_vars['logo_image_height']->value) {?> height="<?php echo $_smarty_tpl->tpl_vars['logo_image_height']->value;?>
"<?php }?>/>                                    </a><?php }} ?>
