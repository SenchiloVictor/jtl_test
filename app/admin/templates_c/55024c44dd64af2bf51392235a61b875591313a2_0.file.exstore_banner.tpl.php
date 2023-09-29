<?php
/* Smarty version 3.1.39, created on 2023-09-29 13:00:32
  from '/var/www/html/admin/templates/bootstrap/tpl_inc/exstore_banner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6516ae501bb8f6_76587376',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55024c44dd64af2bf51392235a61b875591313a2' => 
    array (
      0 => '/var/www/html/admin/templates/bootstrap/tpl_inc/exstore_banner.tpl',
      1 => 1643806417,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6516ae501bb8f6_76587376 (Smarty_Internal_Template $_smarty_tpl) {
if ((($tmp = $_smarty_tpl->tpl_vars['useExstoreWidgetBanner']->value ?? null)===null||$tmp==='' ? false : $tmp) === true) {?>
    <a href="<?php echo __('extensionStoreURL');?>
" target="_blank">
        <img src="gfx/exstore-banner-dashboard-<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
.jpg"
             alt="Extensions entdecken!" class="exstore-banner">
    </a>
<?php } else { ?>
    <a href="<?php echo __('extensionStoreURL');?>
" target="_blank">
        <picture>
            <source media="(min-width: 768px)" srcset="gfx/exstore-banner-<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
.jpg">
            <img src="gfx/exstore-banner-mobile-<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
.jpg" alt="Extensions entdecken!" class="exstore-banner">
        </picture>
    </a>
<?php }
}
}
