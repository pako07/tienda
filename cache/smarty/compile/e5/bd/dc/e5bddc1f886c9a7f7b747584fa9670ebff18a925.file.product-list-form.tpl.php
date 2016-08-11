<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 13:20:40
         compiled from "C:\wamp\www\Mitienda\themes\hairsalon\sub\product\product-list-form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:801857ab7078b5de16-60985245%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5bddc1f886c9a7f7b747584fa9670ebff18a925' => 
    array (
      0 => 'C:\\wamp\\www\\Mitienda\\themes\\hairsalon\\sub\\product\\product-list-form.tpl',
      1 => 1470850914,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '801857ab7078b5de16-60985245',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab7078b84f60_86083322',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab7078b84f60_86083322')) {function content_57ab7078b84f60_86083322($_smarty_tpl) {?><div class="content_sortPagiBar clearfix">
	<div class="sortPagiBar clearfix row">					
			<div class="col-md-10 col-sm-8 col-xs-6">				
				<div class="sort">
				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-sort.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./nbr-product-page.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
									
				</div>
			</div>
			<div class="product-compare col-md-2 col-sm-4 col-xs-6">
				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-compare.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			</div>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['products']->value), 0);?>


<div class="content_sortPagiBar">
	<div class="bottom-pagination-content clearfix row">
		<div class="col-md-10 col-sm-8 col-xs-6">
			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('no_follow'=>1,'paginationId'=>'bottom'), 0);?>

		</div>
		<div class="product-compare col-md-2 col-sm-4 col-xs-6">
			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-compare.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('paginationId'=>'bottom'), 0);?>

		</div>
	</div>
</div><?php }} ?>
