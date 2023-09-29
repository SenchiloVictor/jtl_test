<?php
/* Smarty version 3.1.39, created on 2023-09-29 12:59:25
  from '/var/www/html/admin/templates/bootstrap/tpl_inc/help_description.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6516ae0dedce63_08617356',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3e3733ff43d20942c51e5dd6e994275ba067646' => 
    array (
      0 => '/var/www/html/admin/templates/bootstrap/tpl_inc/help_description.tpl',
      1 => 1643806417,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6516ae0dedce63_08617356 (Smarty_Internal_Template $_smarty_tpl) {
?><span data-html="true"
        data-toggle="tooltip"
        data-placement="<?php echo $_smarty_tpl->tpl_vars['placement']->value;?>
"
        title="<?php if ($_smarty_tpl->tpl_vars['description']->value !== null) {
echo $_smarty_tpl->tpl_vars['description']->value;
}
if ($_smarty_tpl->tpl_vars['cID']->value !== null && $_smarty_tpl->tpl_vars['description']->value !== null) {?><hr><?php }
if ($_smarty_tpl->tpl_vars['cID']->value !== null) {?><p><strong><?php echo __('settingNumberShort');?>
: </strong><?php echo $_smarty_tpl->tpl_vars['cID']->value;?>
</p><?php }?>">
    <?php if ($_smarty_tpl->tpl_vars['iconQuestion']->value) {?>
        <span class="fas fa-question-circle fa-fw"></span>
    <?php } else { ?>
        <span class="fas fa-info-circle fa-fw"></span>
    <?php }?>
</span>
<?php }
}
