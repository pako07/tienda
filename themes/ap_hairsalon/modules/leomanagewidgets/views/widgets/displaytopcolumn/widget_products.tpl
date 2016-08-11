{*
 *  Leo Theme for Prestashop 1.6.x
 *
 * @author    http://www.leotheme.com
 * @copyright Copyright (C) October 2013 LeoThemes.com <@emai:leotheme@gmail.com>
 *               <info@leotheme.com>.All rights reserved.
 * @license   GNU General Public License version 2
*}

{if isset($products) && !empty($products)}
<div class="widget-products block">
	{if isset($widget_heading)&&!empty($widget_heading)}
		<h4 class="title_block">
			{$widget_heading}
		</h4>
	{/if}
	<div class="block_content">
		{if isset($products) AND $products}
			<ul class="product_list grid">
				{assign var='liHeight' value=140}
				{assign var='nbItemsPerLine' value=3}
				{assign var='nbLi' value=$limit}
				{math equation="nbLi/nbItemsPerLine" nbLi=$nbLi nbItemsPerLine=$nbItemsPerLine assign=nbLines}
				{math equation="nbLines*liHeight" nbLines=$nbLines|ceil liHeight=$liHeight assign=ulHeight}
				{$mproducts=array_chunk($products,$limit)}
				{foreach from=$products item=product name=homeFeaturedProducts}
					{math equation="(total%perLine)" total=$smarty.foreach.homeFeaturedProducts.total perLine=$nbItemsPerLine assign=totModulo}
					{if $totModulo == 0}{assign var='totModulo' value=$nbItemsPerLine}{/if}
					<li class="clearfix media"> 		
						<div class="product-block">
							<div class="product-container media" itemscope itemtype="http://schema.org/Product">
								<a class="product_img_link img pull-left" href="{$product.link|escape:'html':'UTF-8'}" title="{$product.name|escape:'html':'UTF-8'}" itemprop="url">
									<img class="replace-2x img-responsive" src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'small_default')|escape:'html':'UTF-8'}" alt="{if !empty($product.legend)}{$product.legend|escape:'html':'UTF-8'}{else}{$product.name|escape:'html':'UTF-8'}{/if}" title="{if !empty($product.legend)}{$product.legend|escape:'html':'UTF-8'}{else}{$product.name|escape:'html':'UTF-8'}{/if}" itemprop="image" />
								</a>
								<div class="media-body">
									<h5 itemprop="name" class="name media-heading">
										{if isset($product.pack_quantity) && $product.pack_quantity}{$product.pack_quantity|intval|cat:' x '}{/if}
										<a class="product-name" href="{$product.link|escape:'html':'UTF-8'}" title="{$product.name|escape:'html':'UTF-8'}" itemprop="url" >
											{$product.name|truncate:45:'...'|escape:'html':'UTF-8'}
										</a>
									</h5>
									{if (!$PS_CATALOG_MODE AND ((isset($product.show_price) && $product.show_price) || (isset($product.available_for_order) && $product.available_for_order)))}
										<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="content_price">
											{if isset($product.show_price) && $product.show_price && !isset($restricted_country_mode)}
												<span itemprop="price" class="price product-price">
													{if !$priceDisplay}{convertPrice price=$product.price}{else}{convertPrice price=$product.price_tax_exc}{/if}
												</span>
												<meta itemprop="priceCurrency" content="{$priceDisplay}" />
												{if isset($product.specific_prices) && $product.specific_prices && isset($product.specific_prices.reduction) && $product.specific_prices.reduction}
													<span class="old-price product-price">
														{displayWtPrice p=$product.price_without_reduction}
													</span>
													{if $product.specific_prices.reduction_type == 'percentage'}
														<span class="price-percent-reduction">-{$product.specific_prices.reduction * 100}%</span>
													{/if}
												{/if}
											{/if}
										</div>
									{/if}	
								</div>
							</div>					
						</div>					
					</li>			
				{/foreach}	 
			</ul>
		{/if}
	</div>
</div>
{/if}