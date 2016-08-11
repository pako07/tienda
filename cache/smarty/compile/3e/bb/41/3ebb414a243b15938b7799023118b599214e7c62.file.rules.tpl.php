<?php /* Smarty version Smarty-3.1.19, created on 2016-08-08 17:28:02
         compiled from "C:\wamp\www\Mitienda\themes\default-bootstrap\modules\referralprogram\views\templates\front\rules.tpl" */ ?>
<?php /*%%SmartyHeaderCode:529157a8c1228ea190-88933878%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ebb414a243b15938b7799023118b599214e7c62' => 
    array (
      0 => 'C:\\wamp\\www\\Mitienda\\themes\\default-bootstrap\\modules\\referralprogram\\views\\templates\\front\\rules.tpl',
      1 => 1466020876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '529157a8c1228ea190-88933878',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'xml' => 0,
    'paragraph' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57a8c122931a08_97630311',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a8c122931a08_97630311')) {function content_57a8c122931a08_97630311($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'C:\\wamp\\www\\Mitienda\\tools\\smarty\\plugins\\modifier.replace.php';
?>

<h3><?php echo smartyTranslate(array('s'=>'Referral program rules','mod'=>'referralprogram'),$_smarty_tpl);?>
</h3>

<?php if (isset($_smarty_tpl->tpl_vars['xml']->value)) {?>
<div id="referralprogram_rules">
	<?php if (isset($_smarty_tpl->tpl_vars['xml']->value->body->{$_smarty_tpl->tpl_vars['paragraph']->value})) {?><div class="rte"><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['xml']->value->body->{$_smarty_tpl->tpl_vars['paragraph']->value},"\'","'"),'\"','"');?>
</div><?php }?>
</div>
<?php }?>
<?php }} ?>
