<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 11:33:36
         compiled from "C:\wamp\www\Mitienda\modules\leocustomajax\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3133457ab576026ad49-45630510%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c2086bb756f35300ccb54b432d868774c6122fd' => 
    array (
      0 => 'C:\\wamp\\www\\Mitienda\\modules\\leocustomajax\\footer.tpl',
      1 => 1470845902,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3133457ab576026ad49-45630510',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'leo_customajax_pn' => 0,
    'leo_customajax_img' => 0,
    'leo_customajax_tran' => 0,
    'leo_customajax_count' => 0,
    'leo_customajax_acolor' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab57602ce342_08565328',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab57602ce342_08565328')) {function content_57ab57602ce342_08565328($_smarty_tpl) {?>

<script type="text/javascript">
	var leoOption = {
		productNumber:<?php if ($_smarty_tpl->tpl_vars['leo_customajax_pn']->value) {?><?php echo $_smarty_tpl->tpl_vars['leo_customajax_pn']->value;?>
<?php } else { ?>0<?php }?>,
		productInfo:<?php if ($_smarty_tpl->tpl_vars['leo_customajax_img']->value) {?><?php echo $_smarty_tpl->tpl_vars['leo_customajax_img']->value;?>
<?php } else { ?>0<?php }?>,
		productTran:<?php if ($_smarty_tpl->tpl_vars['leo_customajax_tran']->value) {?><?php echo $_smarty_tpl->tpl_vars['leo_customajax_tran']->value;?>
<?php } else { ?>0<?php }?>,
		productCdown: <?php if ($_smarty_tpl->tpl_vars['leo_customajax_count']->value) {?><?php echo $_smarty_tpl->tpl_vars['leo_customajax_count']->value;?>
<?php } else { ?>0<?php }?>,
		productColor: <?php if ($_smarty_tpl->tpl_vars['leo_customajax_acolor']->value) {?><?php echo $_smarty_tpl->tpl_vars['leo_customajax_acolor']->value;?>
<?php } else { ?>0<?php }?>,
	}
    $(document).ready(function(){	
		var leoCustomAjax = new $.LeoCustomAjax();
        leoCustomAjax.processAjax();
    });
</script><?php }} ?>
