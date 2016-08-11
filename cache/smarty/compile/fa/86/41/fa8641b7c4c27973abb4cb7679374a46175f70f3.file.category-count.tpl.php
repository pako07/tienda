<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 13:20:40
         compiled from "C:\wamp\www\Mitienda\themes\hairsalon\category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1839757ab7078b0eb63-82988477%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa8641b7c4c27973abb4cb7679374a46175f70f3' => 
    array (
      0 => 'C:\\wamp\\www\\Mitienda\\themes\\hairsalon\\category-count.tpl',
      1 => 1470850913,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1839757ab7078b0eb63-82988477',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab7078b51e97_70322004',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab7078b51e97_70322004')) {function content_57ab7078b51e97_70322004($_smarty_tpl) {?>
<small class="heading-counter"><?php if ((isset($_smarty_tpl->tpl_vars['category']->value)&&$_smarty_tpl->tpl_vars['category']->value->id==1)||(isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==0)) {?><?php echo smartyTranslate(array('s'=>'There are no products in this category.'),$_smarty_tpl);?>
<?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==1) {?><?php echo smartyTranslate(array('s'=>'There is 1 product.'),$_smarty_tpl);?>
<?php } elseif (isset($_smarty_tpl->tpl_vars['nb_products']->value)) {?><?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>
<?php }?><?php }?></small><?php }} ?>
