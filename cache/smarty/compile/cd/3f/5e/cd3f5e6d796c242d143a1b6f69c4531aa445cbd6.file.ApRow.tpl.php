<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 11:27:58
         compiled from "C:\wamp\www\Mitienda\modules\appagebuilder\views\templates\hook\ApRow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1157757ab560e9e4d53-21071299%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd3f5e6d796c242d143a1b6f69c4531aa445cbd6' => 
    array (
      0 => 'C:\\wamp\\www\\Mitienda\\modules\\appagebuilder\\views\\templates\\hook\\ApRow.tpl',
      1 => 1470840277,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1157757ab560e9e4d53-21071299',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'formAtts' => 0,
    'apContent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab560eb74dd1_65333138',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab560eb74dd1_65333138')) {function content_57ab560eb74dd1_65333138($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\hook\ApRow -->
<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['container'])&&$_smarty_tpl->tpl_vars['formAtts']->value['container']) {?>
<div class="wrapper" <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['bg_config'])&&$_smarty_tpl->tpl_vars['formAtts']->value['bg_config']=="fullwidth"&&isset($_smarty_tpl->tpl_vars['formAtts']->value['bg_data'])&&$_smarty_tpl->tpl_vars['formAtts']->value['bg_data']) {?>style="background:<?php echo $_smarty_tpl->tpl_vars['formAtts']->value['bg_data'];?>
"<?php }?>
     <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['parallax'])&&$_smarty_tpl->tpl_vars['formAtts']->value['parallax']) {?><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['parallax'];?>
<?php }?>>
	 <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['bg_config'])&&$_smarty_tpl->tpl_vars['formAtts']->value['bg_config']=="fullwidth") {?>
        <?php $_smarty_tpl->createLocalArrayVariable('formAtts', null, 0);
$_smarty_tpl->tpl_vars['formAtts']->value['bg_data'] = '';?>
        <?php $_smarty_tpl->createLocalArrayVariable('formAtts', null, 0);
$_smarty_tpl->tpl_vars['formAtts']->value['parallax'] = '';?>
    <?php }?>
<div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['container'], ENT_QUOTES, 'UTF-8', true);?>
">
<?php }?>
    <div<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['id'])&&$_smarty_tpl->tpl_vars['formAtts']->value['id']) {?> id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>
        class="<?php echo isset($_smarty_tpl->tpl_vars['formAtts']->value['class']) ? $_smarty_tpl->tpl_vars['formAtts']->value['class'] : htmlspecialchars('', ENT_QUOTES, 'UTF-8', true);?>
<?php echo isset($_smarty_tpl->tpl_vars['formAtts']->value['animation'])&&$_smarty_tpl->tpl_vars['formAtts']->value['animation']!='none' ? ' has-animation' : '';?>
 <?php echo $_smarty_tpl->tpl_vars['formAtts']->value['bg_class'];?>
"
	<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['animation'])&&$_smarty_tpl->tpl_vars['formAtts']->value['animation']!='none') {?> data-animation="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['animation'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['animation_delay']!='') {?> data-animation-delay="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['animation_delay'], ENT_QUOTES, 'UTF-8', true);?>
" <?php }?><?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['bg_data'])&&$_smarty_tpl->tpl_vars['formAtts']->value['bg_data']) {?>data-bg="<?php echo $_smarty_tpl->tpl_vars['formAtts']->value['bg_data'];?>
"<?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['parallax'])&&$_smarty_tpl->tpl_vars['formAtts']->value['parallax']) {?><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['parallax'];?>
<?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['css_style'])&&$_smarty_tpl->tpl_vars['formAtts']->value['css_style']) {?><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['css_style'];?>
<?php }?>
        >
        <?php echo $_smarty_tpl->tpl_vars['formAtts']->value['bg_video'];?>

        <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['title'])&&$_smarty_tpl->tpl_vars['formAtts']->value['title']) {?>
        <h4 class="title_block"><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['title'];?>
</h4>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['content_html'])) {?>
            <?php echo $_smarty_tpl->tpl_vars['formAtts']->value['content_html'];?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['apContent']->value;?>

        <?php }?>
    </div>
<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['container'])&&$_smarty_tpl->tpl_vars['formAtts']->value['container']) {?>
</div>
</div>
<?php }?><?php }} ?>
