<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 12:42:27
         compiled from "C:\wamp\www\Mitienda\themes\ap_hairsalon\modules\blockcontactinfos\blockcontactinfos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1475357ab6783367d76-93188329%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4750bfd529ab7356c115ad9f02fecdf968a18a78' => 
    array (
      0 => 'C:\\wamp\\www\\Mitienda\\themes\\ap_hairsalon\\modules\\blockcontactinfos\\blockcontactinfos.tpl',
      1 => 1470850531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1475357ab6783367d76-93188329',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'blockcontactinfos_company' => 0,
    'blockcontactinfos_address' => 0,
    'blockcontactinfos_phone' => 0,
    'blockcontactinfos_email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab67833e43e8_63983611',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab67833e43e8_63983611')) {function content_57ab67833e43e8_63983611($_smarty_tpl) {?><?php if (!is_callable('smarty_function_mailto')) include 'C:\\wamp\\www\\Mitienda\\tools\\smarty\\plugins\\function.mailto.php';
?>

<!-- MODULE Block contact infos -->
<div id="block_contact_infos" class="footer-block block">
	<div>
        <h4 class="title_block"><?php echo smartyTranslate(array('s'=>'Store Information','mod'=>'blockcontactinfos'),$_smarty_tpl);?>
</h4>
        <ul class="toggle-footer">
            <?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_company']->value!='') {?>
            	<li>
            		<i class="fa fa-map-marker"></i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blockcontactinfos_company']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_address']->value!='') {?>, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blockcontactinfos_address']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>
            	</li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_phone']->value!='') {?>
            	<li>
            		<i class="fa fa-phone"></i><?php echo smartyTranslate(array('s'=>'Call us now:','mod'=>'blockcontactinfos'),$_smarty_tpl);?>
 
            		<span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blockcontactinfos_phone']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
            	</li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_email']->value!='') {?>
            	<li>
            		<i class="fa fa-envelope"></i><?php echo smartyTranslate(array('s'=>'Email:','mod'=>'blockcontactinfos'),$_smarty_tpl);?>
 
            		<span><?php echo smarty_function_mailto(array('address'=>htmlspecialchars($_smarty_tpl->tpl_vars['blockcontactinfos_email']->value, ENT_QUOTES, 'UTF-8', true),'encode'=>"hex"),$_smarty_tpl);?>
</span>
            	</li>
            <?php }?>
        </ul>
    </div>
</div>
<!-- /MODULE Block contact infos -->
<?php }} ?>
