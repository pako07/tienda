<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 13:18:30
         compiled from "C:\wamp\www\Mitienda\themes\hairsalon\modules\blockfacebook\blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2550357ab6ff6754782-17790257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f0d05c45bd5e2a3894aa4d4cb6f438ab0719a0c' => 
    array (
      0 => 'C:\\wamp\\www\\Mitienda\\themes\\hairsalon\\modules\\blockfacebook\\blockfacebook.tpl',
      1 => 1470850913,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2550357ab6ff6754782-17790257',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab6ff6774803_37878606',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab6ff6774803_37878606')) {function content_57ab6ff6774803_37878606($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!='') {?>
<div id="fb-root"></div>
<div id="facebook_block" class="block">
	<h4 class="title_block"><?php echo smartyTranslate(array('s'=>'Facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
	<div class="facebook-fanbox">
		<div class="fb-like-box" data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>
