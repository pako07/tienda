<?php /* Smarty version Smarty-3.1.19, created on 2016-08-08 17:28:00
         compiled from "C:\wamp\www\Mitienda\themes\default-bootstrap\modules\cheque\views\templates\hook\payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:486157a8c120c83f98-10268608%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02aada69473c8abbab5b7ff4ff8ab8820116e5c4' => 
    array (
      0 => 'C:\\wamp\\www\\Mitienda\\themes\\default-bootstrap\\modules\\cheque\\views\\templates\\hook\\payment.tpl',
      1 => 1466020874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '486157a8c120c83f98-10268608',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57a8c120cb9b14_01808224',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a8c120cb9b14_01808224')) {function content_57a8c120cb9b14_01808224($_smarty_tpl) {?>
<div class="row">
	<div class="col-xs-12">
        <p class="payment_module">
            <a class="cheque" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('cheque','payment',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Pay by check.','mod'=>'cheque'),$_smarty_tpl);?>
">
                <?php echo smartyTranslate(array('s'=>'Pay by check','mod'=>'cheque'),$_smarty_tpl);?>
 <span><?php echo smartyTranslate(array('s'=>'(order processing will be longer)','mod'=>'cheque'),$_smarty_tpl);?>
</span>
            </a>
        </p>
    </div>
</div>
<?php }} ?>
