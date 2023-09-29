<?php
/* Smarty version 3.1.39, created on 2023-09-29 13:00:35
  from '/var/www/html/admin/templates/bootstrap/tpl_inc/widgets/shopinfo_version.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6516ae536dbf46_54498753',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a16de89b8f9471d0a0d22f9f52c5a69eb9ff606' => 
    array (
      0 => '/var/www/html/admin/templates/bootstrap/tpl_inc/widgets/shopinfo_version.tpl',
      1 => 1643806417,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6516ae536dbf46_54498753 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['oSubscription']->value || $_smarty_tpl->tpl_vars['oVersion']->value) {?>
    <table class="table table-condensed table-hover table-blank">
        <tbody>
            <?php if ($_smarty_tpl->tpl_vars['oSubscription']->value) {?>
                <tr>
                    <td width="50%"><?php echo __('subscriptionValidUntil');?>
</td>
                    <td width="50%" id="subscription">
                        <?php if ($_smarty_tpl->tpl_vars['oSubscription']->value->nDayDiff < 0) {?>
                            <a href="https://jtl-url.de/subscription" target="_blank"><?php echo __('expired');?>
</a>
                        <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['oSubscription']->value->dDownloadBis_DE;?>

                        <?php }?>
                    </td>
                </tr>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['oVersion']->value) {?>
                <tr>
                    <td width="50%"></td>
                    <td width="50%" id="version">
                        <?php if ($_smarty_tpl->tpl_vars['bUpdateAvailable']->value) {?>
                            <span class="label label-info"><?php echo __('version');?>
 <?php echo $_smarty_tpl->tpl_vars['strLatestVersion']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['oVersion']->value->getBuild() > 0) {?>(<?php echo __('build');?>
: <?php echo $_smarty_tpl->tpl_vars['oVersion']->value->getBuild();?>
)<?php }?> <?php echo __('available');?>
.</span>
                        <?php } else { ?>
                            <span class="label label-success"><?php echo __('shopVersionUpToDate');?>
</span>
                        <?php }?>
                    </td>
                </tr>
            <?php }?>
        </tbody>
    </table>
<?php }
}
}
