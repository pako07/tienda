<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 11:40:36
         compiled from "C:\wamp\www\Mitienda\themes\ap_juice\modules\appagebuilder\views\templates\hook\view-producthome2\ApProductCarousel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3053457ab59048a6b81-45973885%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8981b4daf8c89f12a04870432167a206189dbde' => 
    array (
      0 => 'C:\\wamp\\www\\Mitienda\\themes\\ap_juice\\modules\\appagebuilder\\views\\templates\\hook\\view-producthome2\\ApProductCarousel.tpl',
      1 => 1470840273,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3053457ab59048a6b81-45973885',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'formAtts' => 0,
    'apLiveEdit' => 0,
    'products' => 0,
    'apLiveEditEnd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab5904923183_20886265',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab5904923183_20886265')) {function content_57ab5904923183_20886265($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\hook\ApProductCarousel -->
<div class="block products_block exclusive appagebuilder <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['class'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['class'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">
	<?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value ? $_smarty_tpl->tpl_vars['apLiveEdit']->value : '';?>

	<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['title'])&&!empty($_smarty_tpl->tpl_vars['formAtts']->value['title'])) {?>
	<h4 class="title_block">
		<?php echo $_smarty_tpl->tpl_vars['formAtts']->value['title'];?>

	</h4>
	<?php }?>
	<div class="block_content">	
            <?php if (!empty($_smarty_tpl->tpl_vars['products']->value)) {?>
                <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['carousel_type']=="boostrap") {?>
                    <?php echo $_smarty_tpl->getSubTemplate ('./ProductCarousel.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->getSubTemplate ('./ProductOwlCarousel.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php }?>
            <?php } else { ?>
                <p class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No products at this time.','mod'=>'appagebuilder'),$_smarty_tpl);?>
</p>	
            <?php }?>
	</div>
	<?php echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value ? $_smarty_tpl->tpl_vars['apLiveEditEnd']->value : '';?>

</div><?php }} ?>
