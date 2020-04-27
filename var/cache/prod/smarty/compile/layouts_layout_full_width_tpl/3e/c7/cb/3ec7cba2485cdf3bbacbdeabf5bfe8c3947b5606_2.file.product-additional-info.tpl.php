<?php
/* Smarty version 3.1.33, created on 2020-04-27 13:30:23
  from '/var/www/public/presta/themes/classic/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ea6b43f2787c6_18039479',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ec7cba2485cdf3bbacbdeabf5bfe8c3947b5606' => 
    array (
      0 => '/var/www/public/presta/themes/classic/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1587040546,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea6b43f2787c6_18039479 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
