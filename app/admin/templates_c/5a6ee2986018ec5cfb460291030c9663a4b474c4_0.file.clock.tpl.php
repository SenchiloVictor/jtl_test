<?php
/* Smarty version 3.1.39, created on 2023-09-29 13:00:32
  from '/var/www/html/admin/templates/bootstrap/tpl_inc/widgets/clock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6516ae501c0d82_14657392',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a6ee2986018ec5cfb460291030c9663a4b474c4' => 
    array (
      0 => '/var/www/html/admin/templates/bootstrap/tpl_inc/widgets/clock.tpl',
      1 => 1643806417,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6516ae501c0d82_14657392 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templateBaseURL']->value;?>
js/jquery.jclock.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    $(function ($) {
        $('#clock_time').jclock({
            format: '%H:%M:%S',
        });
    });
    
        $(document).ready(function(){
            var dateLong = new Date();
            var dateOptions = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
            $('#clock_date').html(dateLong.toLocaleDateString('<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
', dateOptions));
        });
    
<?php echo '</script'; ?>
>
<div class="widget-custom-data nospacing">
    <div class="clock">
        <p id="clock_time"></p>
        <p id="clock_date"></p>
    </div>
</div>
<?php }
}
