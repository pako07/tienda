<?php /*%%SmartyHeaderCode:3224057ab6ff849a832-32691217%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af020efae83b82103f424ab631d274e91de3e711' => 
    array (
      0 => 'C:\\wamp\\www\\Mitienda\\themes\\hairsalon\\modules\\blockmyaccountfooter\\blockmyaccountfooter.tpl',
      1 => 1470850913,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3224057ab6ff849a832-32691217',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ac7b087ee435_22297998',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ac7b087ee435_22297998')) {function content_57ac7b087ee435_22297998($_smarty_tpl) {?>
<!-- Block myaccount module -->
<div class="block">
	<h4 class="title_block">Mi cuenta</h4>
	<div class="block_content">
		<ul class="bullet list-group">
			<li><a href="http://localhost/Mitienda/index.php?controller=history" title="Mis compras" rel="nofollow">Mis compras</a></li>
						<li><a href="http://localhost/Mitienda/index.php?controller=order-slip" title="Mis vales descuento" rel="nofollow">Mis vales descuento</a></li>
			<li><a href="http://localhost/Mitienda/index.php?controller=addresses" title="Mis direcciones" rel="nofollow">Mis direcciones</a></li>
			<li><a href="http://localhost/Mitienda/index.php?controller=identity" title="Administrar mi información personal" rel="nofollow">Mis datos personales</a></li>
						
            <li><a href="http://localhost/Mitienda/index.php?mylogout" title="Cerrar sesión" rel="nofollow">Cerrar sesión</a></li>		</ul>
	</div>
</div>
<!-- /Block myaccount module -->
<?php }} ?>
