<?php
/* Smarty version 3.1.39, created on 2023-09-29 13:00:32
  from '/var/www/html/admin/templates/bootstrap/tpl_inc/widgets/sales_volume.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6516ae5019bd52_73031531',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b03e46b23e9550f6f92e8767c02b6b353ecf9e5' => 
    array (
      0 => '/var/www/html/admin/templates/bootstrap/tpl_inc/widgets/sales_volume.tpl',
      1 => 1643806417,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/linechart_inc.tpl' => 1,
  ),
),false)) {
function content_6516ae5019bd52_73031531 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="widget-custom-data">
    <div class="widget-custom-data">
        <?php if ($_smarty_tpl->tpl_vars['linechart']->value) {?>
            <?php ob_start();
echo __('sales');
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:tpl_inc/linechart_inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('linechart'=>$_smarty_tpl->tpl_vars['linechart']->value,'headline'=>'','id'=>'linechart_sales_volume','width'=>'100%','height'=>'320px','ylabel'=>$_prefixVariable2,'href'=>false,'ymin'=>0,'legend'=>false), 0, false);
?>
        <?php } else { ?>
            <div class="widget-container"><div class="alert alert-info"><?php echo __('noStatisticsThisMonth');?>
</div></div>
        <?php }?>
    </div>
</div>
<?php }
}
