<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 11:13:53
         compiled from "C:\xampp\htdocs\tienda\themes\ap_office\layout\default\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:744057ab52c1634ff6-31258663%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d7a424b0b988707f26627297f653aace5f9a60e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda\\themes\\ap_office\\layout\\default\\header.tpl',
      1 => 1470845277,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '744057ab52c1634ff6-31258663',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'left_column_size' => 0,
    'HOOK_LEFT_COLUMN' => 0,
    'right_column_size' => 0,
    'cols' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab52c1650576_26369005',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab52c1650576_26369005')) {function content_57ab52c1650576_26369005($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['left_column_size']->value)&&!empty($_smarty_tpl->tpl_vars['left_column_size']->value)) {?>
<!-- Left -->
<section id="left_column" class="column sidebar col-md-<?php echo intval($_smarty_tpl->tpl_vars['left_column_size']->value);?>
">
		<?php echo $_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value;?>

</section>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['left_column_size']->value)&&isset($_smarty_tpl->tpl_vars['right_column_size']->value)) {?><?php $_smarty_tpl->tpl_vars['cols'] = new Smarty_variable((12-$_smarty_tpl->tpl_vars['left_column_size']->value-$_smarty_tpl->tpl_vars['right_column_size']->value), null, 0);?><?php } else { ?><?php $_smarty_tpl->tpl_vars['cols'] = new Smarty_variable(12, null, 0);?><?php }?>
<!-- Center -->
<section id="center_column" class="col-md-<?php echo intval($_smarty_tpl->tpl_vars['cols']->value);?>
">


<?php }} ?>
