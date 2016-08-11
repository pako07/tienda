<?php /* Smarty version Smarty-3.1.19, created on 2016-08-08 13:52:32
         compiled from "C:\wamp\www\Mitienda\modules\blockspecials\views\templates\hook\blockspecials-home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1181057a8d4f0a4f255-66057096%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57f4d138b92f64f74d475f94117759c76f6c1184' => 
    array (
      0 => 'C:\\wamp\\www\\Mitienda\\modules\\blockspecials\\views\\templates\\hook\\blockspecials-home.tpl',
      1 => 1466020876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1181057a8d4f0a4f255-66057096',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'specials' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57a8d4f0a901b3_03753235',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a8d4f0a901b3_03753235')) {function content_57a8d4f0a901b3_03753235($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['specials']->value)&&$_smarty_tpl->tpl_vars['specials']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('products'=>$_smarty_tpl->tpl_vars['specials']->value,'class'=>'blockspecials tab-pane','id'=>'blockspecials'), 0);?>

<?php } else { ?>
<ul id="blockspecials" class="blockspecials tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No special products at this time.','mod'=>'blockspecials'),$_smarty_tpl);?>
</li>
</ul>
<?php }?>
<?php }} ?>
