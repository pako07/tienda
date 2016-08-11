<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 13:18:30
         compiled from "C:\wamp\www\Mitienda\themes\hairsalon\modules\blocktopmenu\blocktopmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:562557ab6ff6600b65-62046801%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f1e801ddc316d6767b8c7a1b9383c829e53f1e2' => 
    array (
      0 => 'C:\\wamp\\www\\Mitienda\\themes\\hairsalon\\modules\\blocktopmenu\\blocktopmenu.tpl',
      1 => 1470850913,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '562557ab6ff6600b65-62046801',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MENU' => 0,
    'MENU_SEARCH' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab6ff663b0a3_18830901',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab6ff663b0a3_18830901')) {function content_57ab6ff663b0a3_18830901($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['MENU']->value!='') {?>
	<!-- Menu -->
	<div id="block_top_menu" class="sf-contener clearfix col-lg-12">
		<div class="cat-title"><?php echo smartyTranslate(array('s'=>"Menu",'mod'=>"blocktopmenu"),$_smarty_tpl);?>
</div>
		<ul class="sf-menu clearfix menu-content">
			<?php echo $_smarty_tpl->tpl_vars['MENU']->value;?>

			<?php if ($_smarty_tpl->tpl_vars['MENU_SEARCH']->value) {?>
				<li class="sf-search noBack" style="float:right">
					<form id="searchbox" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'UTF-8', true);?>
" method="get">
						<p>
							<input type="hidden" name="controller" value="search" />
							<input type="hidden" value="position" name="orderby"/>
							<input type="hidden" value="desc" name="orderway"/>
							<input type="text" name="search_query" value="<?php if (isset($_GET['search_query'])) {?><?php echo htmlspecialchars($_GET['search_query'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" />
						</p>
					</form>
				</li>
			<?php }?>
		</ul>
	</div>
	<!--/ Menu -->
<?php }?><?php }} ?>
