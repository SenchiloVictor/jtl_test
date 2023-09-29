<?php
/* Smarty version 3.1.39, created on 2023-09-29 13:00:32
  from '/var/www/html/admin/templates/bootstrap/tpl_inc/widgets/news.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6516ae501a0820_44191406',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a7c9df29fc4295e20c50826e7b534eda06861b9' => 
    array (
      0 => '/var/www/html/admin/templates/bootstrap/tpl_inc/widgets/news.tpl',
      1 => 1643806417,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6516ae501a0820_44191406 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function () {
        ioCall(
            'getRemoteData',
            ['<?php echo (defined('JTLURL_GET_SHOPNEWS') ? constant('JTLURL_GET_SHOPNEWS') : null);?>
',
                'oNews_arr',
                'widgets/news_data.tpl',
                'news_data_wrapper'],
            undefined,
            undefined,
            undefined,
            true
        );
    });
<?php echo '</script'; ?>
>

<div class="widget-custom-data">
    <div id="news_data_wrapper">
        <p class="ajax_preloader"><i class="fa fas fa-spinner fa-spin"></i> <?php echo __('loading');?>
</p>
    </div>
</div>
<?php }
}
