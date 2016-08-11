<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 11:33:36
         compiled from "C:\wamp\www\Mitienda\themes\ap_food\modules\blocksearch\blocksearch-top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:981257ab57607f3de0-79750219%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b91bf856c558e1bab2e4194adb15376686aaed24' => 
    array (
      0 => 'C:\\wamp\\www\\Mitienda\\themes\\ap_food\\modules\\blocksearch\\blocksearch-top.tpl',
      1 => 1470845898,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '981257ab57607f3de0-79750219',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab5760816a21_09871549',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab5760816a21_09871549')) {function content_57ab5760816a21_09871549($_smarty_tpl) {?>
<!-- Block search module TOP -->
<div id="search_block_top" class="nopadding col-md-8 col-sm-7 col-xs-12 col-sm-offset-1 col-md-offset-0 pull-left">
	
	<form id="searchbox" method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search',null,null,null,false,null,true), ENT_QUOTES, 'UTF-8', true);?>
" >
		<p class="block_content clearfix">
			<input type="hidden" name="controller" value="search" />
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="orderway" value="desc" />
			<button type="submit" name="submit_search" class="btn fa fa-search">&nbsp;</button> 
			<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="<?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch'),$_smarty_tpl);?>
" value="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['search_query']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
" />
		</p>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
