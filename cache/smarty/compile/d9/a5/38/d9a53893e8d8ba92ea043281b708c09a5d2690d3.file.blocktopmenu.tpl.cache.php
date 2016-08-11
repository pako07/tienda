<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 12:42:25
         compiled from "C:\wamp\www\Mitienda\themes\ap_hairsalon\modules\blocktopmenu\blocktopmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2216757ab67814d4e24-35465858%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9a53893e8d8ba92ea043281b708c09a5d2690d3' => 
    array (
      0 => 'C:\\wamp\\www\\Mitienda\\themes\\ap_hairsalon\\modules\\blocktopmenu\\blocktopmenu.tpl',
      1 => 1470850531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2216757ab67814d4e24-35465858',
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
  'unifunc' => 'content_57ab678154f6a1_50007843',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab678154f6a1_50007843')) {function content_57ab678154f6a1_50007843($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['MENU']->value!='') {?>
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
