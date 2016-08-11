<?php /* Smarty version Smarty-3.1.19, created on 2016-08-08 17:28:01
         compiled from "C:\wamp\www\Mitienda\themes\default-bootstrap\modules\favoriteproducts\views\templates\hook\favoriteproducts-extra.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2508157a8c1211130f0-81097803%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bcc6a6a49e897027ecf73385bc458327ef79c5b6' => 
    array (
      0 => 'C:\\wamp\\www\\Mitienda\\themes\\default-bootstrap\\modules\\favoriteproducts\\views\\templates\\hook\\favoriteproducts-extra.tpl',
      1 => 1466020874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2508157a8c1211130f0-81097803',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'isCustomerFavoriteProduct' => 0,
    'is_logged' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57a8c12115cbd6_78256687',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a8c12115cbd6_78256687')) {function content_57a8c12115cbd6_78256687($_smarty_tpl) {?>

<?php if (!$_smarty_tpl->tpl_vars['isCustomerFavoriteProduct']->value&&$_smarty_tpl->tpl_vars['is_logged']->value) {?>
<li id="favoriteproducts_block_extra_add" class="add">
	<?php echo smartyTranslate(array('s'=>'Add this product to my list of favorites.','mod'=>'favoriteproducts'),$_smarty_tpl);?>

</li>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['isCustomerFavoriteProduct']->value&&$_smarty_tpl->tpl_vars['is_logged']->value) {?>
<li id="favoriteproducts_block_extra_remove">
	<?php echo smartyTranslate(array('s'=>'Remove this product from my favorite\'s list. ','mod'=>'favoriteproducts'),$_smarty_tpl);?>

</li>
<?php }?>

<li id="favoriteproducts_block_extra_added">
	<?php echo smartyTranslate(array('s'=>'Remove this product from my favorite\'s list. ','mod'=>'favoriteproducts'),$_smarty_tpl);?>

</li>
<li id="favoriteproducts_block_extra_removed">
	<?php echo smartyTranslate(array('s'=>'Add this product to my list of favorites.','mod'=>'favoriteproducts'),$_smarty_tpl);?>

</li><?php }} ?>
