<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 12:42:25
         compiled from "C:\wamp\www\Mitienda\themes\ap_hairsalon\modules\blocknewproducts\blocknewproducts_home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1252857ab6781f297f4-78200708%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c39407e88c604a28044627e69e7b30d01cb70d73' => 
    array (
      0 => 'C:\\wamp\\www\\Mitienda\\themes\\ap_hairsalon\\modules\\blocknewproducts\\blocknewproducts_home.tpl',
      1 => 1470850531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1252857ab6781f297f4-78200708',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'new_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab678202f6f2_59619870',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab678202f6f2_59619870')) {function content_57ab678202f6f2_59619870($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['new_products']->value)&&$_smarty_tpl->tpl_vars['new_products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('products'=>$_smarty_tpl->tpl_vars['new_products']->value,'class'=>'blocknewproducts tab-pane','id'=>'blocknewproducts'), 0);?>

<?php } else { ?>
<ul id="blocknewproducts" class="blocknewproducts tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No new products at this time.','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>
