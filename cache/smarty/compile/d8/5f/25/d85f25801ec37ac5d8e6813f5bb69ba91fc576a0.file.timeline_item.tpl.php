<?php /* Smarty version Smarty-3.1.19, created on 2016-08-08 17:27:55
         compiled from "C:\wamp\www\Mitienda\admin\themes\default\template\controllers\customer_threads\helpers\view\timeline_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3107757a8c11b5834e2-73022567%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd85f25801ec37ac5d8e6813f5bb69ba91fc576a0' => 
    array (
      0 => 'C:\\wamp\\www\\Mitienda\\admin\\themes\\default\\template\\controllers\\customer_threads\\helpers\\view\\timeline_item.tpl',
      1 => 1466020874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3107757a8c11b5834e2-73022567',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'timeline_item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57a8c11b618922_45935442',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a8c11b618922_45935442')) {function content_57a8c11b618922_45935442($_smarty_tpl) {?>
<article class="timeline-item<?php if (isset($_smarty_tpl->tpl_vars['timeline_item']->value['alt'])) {?> alt<?php }?>">
	<div class="timeline-caption">
		<div class="timeline-panel arrow arrow-<?php echo $_smarty_tpl->tpl_vars['timeline_item']->value['arrow'];?>
">
			<span class="timeline-icon" style="background-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['timeline_item']->value['background_color'], ENT_QUOTES, 'UTF-8', true);?>
;">
				<i class="<?php echo $_smarty_tpl->tpl_vars['timeline_item']->value['icon'];?>
"></i>
			</span>
			<span class="timeline-date"><i class="icon-calendar"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['timeline_item']->value['date'],'full'=>0),$_smarty_tpl);?>
 - <i class="icon-time"></i> <?php echo substr($_smarty_tpl->tpl_vars['timeline_item']->value['date'],11,5);?>
</span>
			<?php if (isset($_smarty_tpl->tpl_vars['timeline_item']->value['id_order'])) {?><a class="badge" href="#"><?php echo smartyTranslate(array('s'=>"Order #"),$_smarty_tpl);?>
<?php echo intval($_smarty_tpl->tpl_vars['timeline_item']->value['id_order']);?>
</a><br/><?php }?>
			<span><?php echo nl2br($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['timeline_item']->value['content'],220));?>
</span>
			<?php if (isset($_smarty_tpl->tpl_vars['timeline_item']->value['see_more_link'])) {?>
				<br/><br/><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['timeline_item']->value['see_more_link'], ENT_QUOTES, 'UTF-8', true);?>
" class="btn btn-default _blank"><?php echo smartyTranslate(array('s'=>"See more"),$_smarty_tpl);?>
</a>
			<?php }?>
		</div>
	</div>
</article>
<?php }} ?>
