<?php /*%%SmartyHeaderCode:977957ab6ff819bf11-60672443%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23cdc59ff844b78d4a8d0d620b55cc28ac63b369' => 
    array (
      0 => 'C:\\wamp\\www\\Mitienda\\themes\\hairsalon\\modules\\blockcms\\blockcms.tpl',
      1 => 1470850913,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '977957ab6ff819bf11-60672443',
  'variables' => 
  array (
    'block' => 0,
    'cms_titles' => 0,
    'cms_key' => 0,
    'cms_title' => 0,
    'cms_page' => 0,
    'link' => 0,
    'show_price_drop' => 0,
    'PS_CATALOG_MODE' => 0,
    'show_new_products' => 0,
    'show_best_sales' => 0,
    'display_stores_footer' => 0,
    'show_contact' => 0,
    'contact_url' => 0,
    'cmslinks' => 0,
    'cmslink' => 0,
    'show_sitemap' => 0,
    'display_poweredby' => 0,
    'footer_text' => 0,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab6ff83c4eb3_97621395',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab6ff83c4eb3_97621395')) {function content_57ab6ff83c4eb3_97621395($_smarty_tpl) {?>
	<!-- Block CMS module footer -->
	<div class="block" id="block_various_links_footer">
		<h4 class="title_block">Información</h4>
		<ul class="list-group bullet">
							<li class="item">
					<a href="http://localhost/Mitienda/index.php?controller=prices-drop" title="Promociones especiales">
						Promociones especiales
					</a>
				</li>
									<li class="item">
				<a href="http://localhost/Mitienda/index.php?controller=new-products" title="Novedades">
					Novedades
				</a>
			</li>
										<li class="item">
					<a href="http://localhost/Mitienda/index.php?controller=best-sales" title="¡Lo más vendido!">
						¡Lo más vendido!
					</a>
				</li>
										<li class="item">
					<a href="http://localhost/Mitienda/index.php?controller=stores" title="Nuestras tiendas">
						Nuestras tiendas
					</a>
				</li>
									<li class="item">
				<a href="http://localhost/Mitienda/index.php?controller=contact" title="Contacte con nosotros">
					Contacte con nosotros
				</a>
			</li>
															<li class="item">
						<a href="http://localhost/Mitienda/index.php?id_cms=3&amp;controller=cms" title="Términos y condiciones">
							Términos y condiciones
						</a>
					</li>
																<li class="item">
						<a href="http://localhost/Mitienda/index.php?id_cms=4&amp;controller=cms" title="Sobre nosotros">
							Sobre nosotros
						</a>
					</li>
													<li>
				<a href="http://localhost/Mitienda/index.php?controller=sitemap" title="Mapa del sitio">
					Mapa del sitio
				</a>
			</li>
									<li>
				<span>
					<?php echo smartyTranslate(array('s'=>'[1] %3$s %2$s - Ecommerce software by %1$s [/1]','mod'=>'blockcms','sprintf'=>array('PrestaShop™',date('Y'),'©'),'tags'=>array('<a class="_blank" href="http://www.prestashop.com">')),$_smarty_tpl);?>

				</span>
			</li>
					</ul>
		
	</div>
	<!-- /Block CMS module footer -->
<?php }} ?>
