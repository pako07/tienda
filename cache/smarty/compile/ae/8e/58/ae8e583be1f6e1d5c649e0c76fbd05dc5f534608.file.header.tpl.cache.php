<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 11:27:57
         compiled from "C:\wamp\www\Mitienda\modules\appagebuilder\views\templates\hook\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2659957ab560dd6cd81-33852110%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae8e583be1f6e1d5c649e0c76fbd05dc5f534608' => 
    array (
      0 => 'C:\\wamp\\www\\Mitienda\\modules\\appagebuilder\\views\\templates\\hook\\header.tpl',
      1 => 1470840277,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2659957ab560dd6cd81-33852110',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ap_header_config' => 0,
    'leo_customajax' => 0,
    'leo_customajax_pn' => 0,
    'leo_customajax_img' => 0,
    'leo_customajax_tran' => 0,
    'leo_customajax_count' => 0,
    'leo_customajax_acolor' => 0,
    'homeSize' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab560debe0e7_35400089',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab560debe0e7_35400089')) {function content_57ab560debe0e7_35400089($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\hook\header -->
<?php if (isset($_smarty_tpl->tpl_vars['ap_header_config']->value)&&isset($_smarty_tpl->tpl_vars['leo_customajax']->value)) {?>
<script type='text/javascript'>
        var leoOption = {
		productNumber:<?php if ($_smarty_tpl->tpl_vars['leo_customajax_pn']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_customajax_pn']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?>0<?php }?>,
		productInfo:<?php if ($_smarty_tpl->tpl_vars['leo_customajax_img']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_customajax_img']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?>0<?php }?>,
		productTran:<?php if ($_smarty_tpl->tpl_vars['leo_customajax_tran']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_customajax_tran']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?>0<?php }?>,
		productCdown: <?php if ($_smarty_tpl->tpl_vars['leo_customajax_count']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_customajax_count']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?>0<?php }?>,
		productColor: <?php if ($_smarty_tpl->tpl_vars['leo_customajax_acolor']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_customajax_acolor']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?>0<?php }?>,
		homeWidth: <?php if ($_smarty_tpl->tpl_vars['homeSize']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['homeSize']->value['width'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?>0<?php }?>,
		homeheight: <?php if ($_smarty_tpl->tpl_vars['homeSize']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['homeSize']->value['height'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?>0<?php }?>,
	}

        $(document).ready(function(){	
            var leoCustomAjax = new $.LeoCustomAjax();
            leoCustomAjax.processAjax();
        });
	<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ap_header_config']->value, ENT_QUOTES, 'UTF-8', true);?>

</script>
<?php }?><?php }} ?>
