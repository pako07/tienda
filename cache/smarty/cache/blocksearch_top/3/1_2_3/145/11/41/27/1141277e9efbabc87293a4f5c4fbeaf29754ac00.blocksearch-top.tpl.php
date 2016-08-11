<?php /*%%SmartyHeaderCode:979557ab6ff5b32628-41807361%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1141277e9efbabc87293a4f5c4fbeaf29754ac00' => 
    array (
      0 => 'C:\\wamp\\www\\Mitienda\\themes\\hairsalon\\modules\\blocksearch\\blocksearch-top.tpl',
      1 => 1470850913,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '979557ab6ff5b32628-41807361',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ac7b062829e9_24686930',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ac7b062829e9_24686930')) {function content_57ac7b062829e9_24686930($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top">
	<form id="searchbox" method="get" action="//localhost/Mitienda/index.php?controller=search" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Buscar" value="" />
		<button type="submit" name="submit_search" class="btn btn-outline-inverse fa fa-search">&nbsp;</button> 
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
