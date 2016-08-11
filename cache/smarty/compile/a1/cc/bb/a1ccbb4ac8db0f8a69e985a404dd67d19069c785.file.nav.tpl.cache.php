<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 13:18:33
         compiled from "C:\wamp\www\Mitienda\themes\hairsalon\modules\blockcontact\nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1041157ab6ff9412f29-69437531%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1ccbb4ac8db0f8a69e985a404dd67d19069c785' => 
    array (
      0 => 'C:\\wamp\\www\\Mitienda\\themes\\hairsalon\\modules\\blockcontact\\nav.tpl',
      1 => 1470850913,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1041157ab6ff9412f29-69437531',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_logged' => 0,
    'link' => 0,
    'telnumber' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab6ff9465dc6_51408078',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab6ff9465dc6_51408078')) {function content_57ab6ff9465dc6_51408078($_smarty_tpl) {?>
<div id="contact-link" <?php if (isset($_smarty_tpl->tpl_vars['is_logged']->value)&&$_smarty_tpl->tpl_vars['is_logged']->value) {?> class="is_logged"<?php }?>>
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockcontact'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockcontact'),$_smarty_tpl);?>
</a>
</div>
<?php if ($_smarty_tpl->tpl_vars['telnumber']->value) {?>
	<span class="shop-phone<?php if (isset($_smarty_tpl->tpl_vars['is_logged']->value)&&$_smarty_tpl->tpl_vars['is_logged']->value) {?> is_logged<?php }?> hidden-sm hidden-xs">
		<i class="fa fa-phone"></i><?php echo smartyTranslate(array('s'=>'Call us now:','mod'=>'blockcontact'),$_smarty_tpl);?>
 <strong><?php echo $_smarty_tpl->tpl_vars['telnumber']->value;?>
</strong> <?php echo smartyTranslate(array('s'=>'for us','mod'=>'blockcontact'),$_smarty_tpl);?>

	</span>
<?php }?><?php }} ?>
