<?php /* Smarty version Smarty-3.1.19, created on 2016-08-08 17:27:56
         compiled from "C:\wamp\www\Mitienda\themes\default-bootstrap\modules\bankwire\views\templates\hook\payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2084957a8c11cd70df3-32410958%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5bbed9a556854d3d13fb5d31f54d818c9785a617' => 
    array (
      0 => 'C:\\wamp\\www\\Mitienda\\themes\\default-bootstrap\\modules\\bankwire\\views\\templates\\hook\\payment.tpl',
      1 => 1466020874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2084957a8c11cd70df3-32410958',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57a8c11cd8b903_92332582',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a8c11cd8b903_92332582')) {function content_57a8c11cd8b903_92332582($_smarty_tpl) {?>
<div class="row">
	<div class="col-xs-12">
		<p class="payment_module">
			<a class="bankwire" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('bankwire','payment'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Pay by bank wire','mod'=>'bankwire'),$_smarty_tpl);?>
">
				<?php echo smartyTranslate(array('s'=>'Pay by bank wire','mod'=>'bankwire'),$_smarty_tpl);?>
 <span><?php echo smartyTranslate(array('s'=>'(order processing will be longer)','mod'=>'bankwire'),$_smarty_tpl);?>
</span>
			</a>
		</p>
	</div>
</div>
<?php }} ?>
