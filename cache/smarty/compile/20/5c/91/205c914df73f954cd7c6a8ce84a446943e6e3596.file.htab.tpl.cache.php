<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 11:33:38
         compiled from "C:\wamp\www\Mitienda\modules\appagebuilder\views\templates\hook\htab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3185357ab57628adcc8-33222433%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '205c914df73f954cd7c6a8ce84a446943e6e3596' => 
    array (
      0 => 'C:\\wamp\\www\\Mitienda\\modules\\appagebuilder\\views\\templates\\hook\\htab.tpl',
      1 => 1470840277,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3185357ab57628adcc8-33222433',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ap_header_config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab57628d5981_18052175',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab57628d5981_18052175')) {function content_57ab57628d5981_18052175($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\hook\htab -->
<?php if (isset($_smarty_tpl->tpl_vars['ap_header_config']->value)) {?>
<script type='text/javascript'>
	<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ap_header_config']->value, ENT_QUOTES, 'UTF-8', true);?>

</script>
<?php }?><?php }} ?>
