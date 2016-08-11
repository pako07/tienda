<?php /* Smarty version Smarty-3.1.19, created on 2016-08-08 13:52:31
         compiled from "C:\wamp\www\Mitienda\modules\blocknewproducts\views\templates\hook\blocknewproducts_home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1602257a8d4efe787b9-93933466%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b175eec24d30785a77f77daab9e6b86dd1c50068' => 
    array (
      0 => 'C:\\wamp\\www\\Mitienda\\modules\\blocknewproducts\\views\\templates\\hook\\blocknewproducts_home.tpl',
      1 => 1466020876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1602257a8d4efe787b9-93933466',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'new_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57a8d4efebdfa7_76530488',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a8d4efebdfa7_76530488')) {function content_57a8d4efebdfa7_76530488($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['new_products']->value)&&$_smarty_tpl->tpl_vars['new_products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('products'=>$_smarty_tpl->tpl_vars['new_products']->value,'class'=>'blocknewproducts tab-pane','id'=>'blocknewproducts'), 0);?>

<?php } else { ?>
<ul id="blocknewproducts" class="blocknewproducts tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No new products at this time.','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</li>
</ul>
<?php }?>
<?php }} ?>
