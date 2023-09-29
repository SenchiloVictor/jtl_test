<?php
/* Smarty version 3.1.39, created on 2023-09-29 12:59:25
  from '/var/www/html/admin/templates/bootstrap/tpl_inc/seite_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6516ae0deda140_78439431',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e795c702f1a274e6ce1298c4f04d930f9e3b7e7a' => 
    array (
      0 => '/var/www/html/admin/templates/bootstrap/tpl_inc/seite_header.tpl',
      1 => 1643806417,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6516ae0deda140_78439431 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="content-header">
    <div class="row">
        <div class="col">
            <h1 class="content-header-headline <?php if ((isset($_smarty_tpl->tpl_vars['cBeschreibung']->value)) && strlen($_smarty_tpl->tpl_vars['cBeschreibung']->value) == 0) {?>nospacing<?php }?>"><?php if (strlen($_smarty_tpl->tpl_vars['cTitel']->value) > 0) {
echo $_smarty_tpl->tpl_vars['cTitel']->value;
} else {
echo __('unknown');
}?></h1>
        </div>
        <div class="col-auto ml-auto">
            <?php if ($_smarty_tpl->tpl_vars['wizardDone']->value) {?>
                <a href="favs.php" class="btn btn-link btn-lg" data-toggle="tooltip" data-container="body" data-placement="left" title="<?php echo __('addToFavourites');?>
" id="fav-add">
                    <span class="fal fa-star"></span>
                </a>
            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['cDokuURL']->value)) && strlen($_smarty_tpl->tpl_vars['cDokuURL']->value) > 0) {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['cDokuURL']->value;?>
" target="_blank" class="btn btn-link btn-lg" data-toggle="tooltip"
                   data-container="body" data-placement="left" title="<?php echo __('goToDocu');?>
">
                    <span class="fal fa-map-signs"></span>
                </a>
            <?php }?>
        </div>
    </div>
    <?php if ((isset($_smarty_tpl->tpl_vars['cBeschreibung']->value)) && strlen($_smarty_tpl->tpl_vars['cBeschreibung']->value) > 0) {?>
        <div class="description <?php if ((isset($_smarty_tpl->tpl_vars['cClass']->value))) {
echo $_smarty_tpl->tpl_vars['cClass']->value;
}?>">
            <?php if ((isset($_smarty_tpl->tpl_vars['onClick']->value))) {?><a href="#" onclick="<?php echo $_smarty_tpl->tpl_vars['onClick']->value;?>
"><?php }
echo $_smarty_tpl->tpl_vars['cBeschreibung']->value;
if ((isset($_smarty_tpl->tpl_vars['onClick']->value))) {?></a><?php }?>
        </div>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['pluginMeta']->value))) {?>
        <p><strong><?php echo __('pluginAuthor');?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['pluginMeta']->value->getAuthor();?>
</p>
        <p><strong><?php echo __('pluginHomepage');?>
:</strong> <a href="<?php echo $_smarty_tpl->tpl_vars['pluginMeta']->value->getURL();?>
" target="_blank" rel="noopener"><i class="fa fa-external-link"></i> <?php echo __($_smarty_tpl->tpl_vars['pluginMeta']->value->getURL());?>
</a></p>
        <p><strong><?php echo __('pluginVersion');?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['pluginMeta']->value->getVersion();?>
</p>
        <p><strong><?php echo __('description');?>
:</strong> <?php echo __($_smarty_tpl->tpl_vars['pluginMeta']->value->getDescription());?>
</p>
    <?php }?>
</div>
<?php }
}
