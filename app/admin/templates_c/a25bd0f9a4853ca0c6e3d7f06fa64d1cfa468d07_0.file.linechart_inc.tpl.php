<?php
/* Smarty version 3.1.39, created on 2023-09-29 13:00:32
  from '/var/www/html/admin/templates/bootstrap/tpl_inc/linechart_inc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6516ae50177471_17975007',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a25bd0f9a4853ca0c6e3d7f06fa64d1cfa468d07' => 
    array (
      0 => '/var/www/html/admin/templates/bootstrap/tpl_inc/linechart_inc.tpl',
      1 => 1643806417,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6516ae50177471_17975007 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['linechart']->value->getActive()) {?>
    <div id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" style="background: <?php echo (($tmp = $_smarty_tpl->tpl_vars['chartbg']->value ?? null)===null||$tmp==='' ? '#fff' : $tmp);?>
; width: <?php echo $_smarty_tpl->tpl_vars['width']->value;?>
; height: <?php echo $_smarty_tpl->tpl_vars['height']->value;?>
; padding: <?php echo (($tmp = $_smarty_tpl->tpl_vars['chartpad']->value ?? null)===null||$tmp==='' ? '0' : $tmp);?>
;"></div>
    
    <?php echo '<script'; ?>
 type="text/javascript">
        var chart;

        $(document).ready(function() {
            chart = new Highcharts.Chart({
                chart: {
                    renderTo: '<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
',
                    defaultSeriesType: 'area',
                    marginRight: 15,
                    marginBottom: 50,
                    spacingBottom: 25,
                    borderColor: '#CCC',
                    borderWidth: 0
                },
                title: {
                    style: {
                        color: '#435a6b'
                    },
                    text: '<?php echo $_smarty_tpl->tpl_vars['headline']->value;?>
',
                    align: 'left'
                },
                plotOptions: {
                    series: {
                        cursor: 'pointer',
                        marker: {
                            fillColor: '#FFFFFF',
                            lineWidth: 2,
                            lineColor: null
                        },
                        <?php if ($_smarty_tpl->tpl_vars['href']->value) {?>
                        point: {
                            events: {
                                click: function() {
                                    location.href = this.options.url;
                                }
                            }
                        }
                        <?php }?>
                    }
                },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'top',
                    x: -10,
                    y: 100,
                    borderWidth: 0,
                    enabled: <?php if ($_smarty_tpl->tpl_vars['legend']->value) {?>true<?php } else { ?>false<?php }?>,
                },
                xAxis: <?php echo $_smarty_tpl->tpl_vars['linechart']->value->getAxisJSON();?>
,
                yAxis: {
                    title: {
                        style: {
                            color: '#5cbcf6'
                        },
                        text: '<?php echo $_smarty_tpl->tpl_vars['ylabel']->value;?>
'
                    },
                    labels: {
                        style: {
                            color: '#5cbcf6'
                        }
                    },
                    plotLines: [{
                        value: 0,
                        width: 2,
                        color: '#ddd'
                    }],
                    <?php if ((isset($_smarty_tpl->tpl_vars['ymin']->value)) && call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'count_characters' ][ 0 ], array( $_smarty_tpl->tpl_vars['ymin']->value )) > 0) {?>
                        min: <?php echo $_smarty_tpl->tpl_vars['ymin']->value;?>

                    <?php }?>
                },
                series: <?php echo $_smarty_tpl->tpl_vars['linechart']->value->getSeriesJSON();?>

            });
        });
    <?php echo '</script'; ?>
>
<?php } else { ?>
    <div class="alert alert-info" role="alert"><?php echo __('statisticNoData');?>
</div>
<?php }
}
}
