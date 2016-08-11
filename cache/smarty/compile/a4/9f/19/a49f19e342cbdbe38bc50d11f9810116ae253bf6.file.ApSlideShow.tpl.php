<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 11:33:40
         compiled from "C:\wamp\www\Mitienda\modules\appagebuilder\views\templates\hook\ApSlideShow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1076057ab5764835329-39193807%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a49f19e342cbdbe38bc50d11f9810116ae253bf6' => 
    array (
      0 => 'C:\\wamp\\www\\Mitienda\\modules\\appagebuilder\\views\\templates\\hook\\ApSlideShow.tpl',
      1 => 1470840277,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1076057ab5764835329-39193807',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'formAtts' => 0,
    'content_slider' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab5764860a91_10192671',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab5764860a91_10192671')) {function content_57ab5764860a91_10192671($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\hook\ApSlideShow -->
<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['isEnabled'])&&$_smarty_tpl->tpl_vars['formAtts']->value['isEnabled']==true) {?>
<div id="slideshow-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['form_id'], ENT_QUOTES, 'UTF-8', true);?>
" class="ApSlideShow">
	<?php if (isset($_smarty_tpl->tpl_vars['content_slider']->value)) {?>
		<?php echo $_smarty_tpl->tpl_vars['content_slider']->value;?>

	<?php }?>
</div>
<?php }?><?php }} ?>
