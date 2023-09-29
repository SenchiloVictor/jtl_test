<?php
/* Smarty version 3.1.39, created on 2023-09-29 13:00:32
  from '/var/www/html/admin/templates/bootstrap/tpl_inc/widgets/patch.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6516ae501be952_37484101',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dffd2eb916e89dd18ef92e1f3f1f6137b4f3a7d9' => 
    array (
      0 => '/var/www/html/admin/templates/bootstrap/tpl_inc/widgets/patch.tpl',
      1 => 1643806417,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6516ae501be952_37484101 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function () {
        ioCall(
            'getRemoteData',
            ['<?php echo (defined('JTLURL_GET_SHOPPATCH') ? constant('JTLURL_GET_SHOPPATCH') : null);?>
?vf=<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
',
                'oPatch_arr',
                'widgets/patch_data.tpl',
                'patch_data_wrapper'],
            undefined,
            undefined,
            undefined,
            true
        );
    });
<?php echo '</script'; ?>
>

<div class="widget-custom-data widget-patch">
    <div id="patch_data_wrapper">
        <p class="ajax_preloader"><?php echo __('loading');?>
</p>
    </div>
</div><?php }
}
