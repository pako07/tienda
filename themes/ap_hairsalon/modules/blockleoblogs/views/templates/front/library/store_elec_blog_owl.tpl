{*
 *  Leo Prestashop SliderShow for Prestashop 1.6.x
 *
 * @package   leosliderlayer
 * @version   3.0
 * @author    http://www.leotheme.com
 * @copyright Copyright (C) October 2013 LeoThemes.com <@emai:leotheme@gmail.com>
 *               <info@leotheme.com>.All rights reserved.
 * @license   GNU General Public License version 2
*}

<!-- MODULE Block blockleoblogstabs -->
<div id="blockleoblogstabs" class="icenter blogs block">
	<h4 class="title_block"><span>{l s='Latest Blogs' mod='blockleoblogs'}</span></h4>
	<div class="block_content">
		{if !empty($blogs )}
			<div class="carousel slide">
				<div class="carousel-inner" id="{$mytab}">
				{$mblogs=array_chunk($blogs,$owl_rows)}
				{foreach from=$mblogs item=blogs name=mypLoop}
					<div class="item {if $smarty.foreach.mypLoop.first}active{/if}">
							{foreach from=$blogs item=blog name=blogs}
							{if $blog@iteration%$columnspage==1&&$columnspage>1}
							  <div class="">
							{/if}
							<div class="blog-item blog_block ajax_block_blog {if $smarty.foreach.blogs.first}first_item{elseif $smarty.foreach.blogs.last}last_item{/if} clearfix">
									{if $blog.image && $config->get('blockleo_blogs_img',1)}
										<div class="pull-left icon-box">
											<div class="image">
												<a href="{$blog.link}" class="" title="{$blog.title}"><img src="{$blog.preview_url}" title="{$blog.title}" class="img-responsive" alt="{$blog.title}" /></a>
											</div>
										</div>
										{/if}
										<div class="media-body">
										{if $config->get('blockleo_blogs_title',1)}
										<h5 class="blog-tittle"><a href="{$blog.link}" title="{$blog.title}">{$blog.title|strip_tags:'UTF-8'|truncate:45:'...'}</a></h5>
										{/if}
										<div class="blog-meta">
											{if $config->get('blockleo_blogs_cre',1)}
												<span class="blog-created"><span class=""></span>
													{strtotime($blog.date_add)|date_format:"%d - %m - %Y"}
												</span>
											{/if}
											{if $config->get('blockleo_blogs_cat',1)}
											<span class="blog-cat"> <span class="icon-list">{l s='In' module='blockleoblogs'}</span>
												<a href="{$blog.category_link}" title="{$blog.category_title|escape:'html':'UTF-8'}">{$blog.category_title}</a>
											</span>
											{/if}
											{if $config->get('blockleo_blogs_cout',1)}
											<span class="blog-ctncomment">
												<i class="fa fa-comments"></i> {$blog.comment_count}
											</span>
											{/if}

											{if $config->get('blockleo_blogs_aut',1)}
											<span class="blog-author">
												<span class="icon-author"> {l s='Author' mod='blockleoblogs'}:</span> {$blog.author}
											</span>
											{/if}
											{if $config->get('blockleo_blogs_hits',1)}
											<span class="blog-hits">
												<span class="icon-hits"> {l s='Hits' mod='blockleoblogs'}:</span> {$blog.hits}
											</span>
											{/if}
										</div>

										<div class="blog-shortinfo">
											{if $config->get('blockleo_blogs_des',1)}
											{$blog.description|strip_tags:'UTF-8'|truncate:100:'...'}
											{/if}
										</div>
										{if $config->get('blockleo_blogs_title',1)}
										<div class="blog-meta"><a href="{$blog.link}" class="read-more" title="{$blog.title}">Read more</a></div>
										{/if}
										</div>
							</div>

							{if ($blog@iteration%$columnspage==0||$smarty.foreach.blogs.last)&&$columnspage>1}
							</div>
							{/if}

							{/foreach}
					</div>
				{/foreach}
				</div>
			</div>
		{/if}
	</div>
		{if $config->get('blockleo_blogs_show',1)}
		<div><a class="pull-right" href="{$view_all_link}" title="{l s='View All' mod='blockleoblogs'}">{l s='View All' mod='blockleoblogs'}</a></div>
		{/if}
</div>
<!-- /MODULE Block blockleoblogstabs -->

{assign var="call_owl_carousel" value="#{$mytab}"}
{include file='./owl_carousel_config.tpl'}