<?php /* Smarty version Smarty-3.1.19, created on 2016-08-08 17:28:00
         compiled from "C:\wamp\www\Mitienda\themes\default-bootstrap\modules\cashondelivery\views\templates\hook\confirmation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3168157a8c120a6f3f6-69533304%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa8f050c4228058faada84f869981ea680e29219' => 
    array (
      0 => 'C:\\wamp\\www\\Mitienda\\themes\\default-bootstrap\\modules\\cashondelivery\\views\\templates\\hook\\confirmation.tpl',
      1 => 1466020874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3168157a8c120a6f3f6-69533304',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shop_name' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57a8c120aab852_09959836',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a8c120aab852_09959836')) {function content_57a8c120aab852_09959836($_smarty_tpl) {?>
<div class="box">
    <p><?php echo smartyTranslate(array('s'=>'Your order on','mod'=>'cashondelivery'),$_smarty_tpl);?>
 <span class="bold"><?php echo $_smarty_tpl->tpl_vars['shop_name']->value;?>
</span> <?php echo smartyTranslate(array('s'=>'is complete.','mod'=>'cashondelivery'),$_smarty_tpl);?>

        <br />
        <?php echo smartyTranslate(array('s'=>'You have chosen the cash on delivery method.','mod'=>'cashondelivery'),$_smarty_tpl);?>

        <br /><span class="bold"><?php echo smartyTranslate(array('s'=>'Your order will be sent very soon.','mod'=>'cashondelivery'),$_smarty_tpl);?>
</span>
        <br /><?php echo smartyTranslate(array('s'=>'For any questions or for further information, please contact our','mod'=>'cashondelivery'),$_smarty_tpl);?>
 <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact-form',true), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smartyTranslate(array('s'=>'customer support','mod'=>'cashondelivery'),$_smarty_tpl);?>
</a>.
    </p>
</div><?php }} ?>
