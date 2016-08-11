<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 11:13:53
         compiled from "C:\xampp\htdocs\tienda\themes\ap_office\layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3139657ab52c13912d1-24472885%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18cab764118903d4c2f369869f25442b8f91eea8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda\\themes\\ap_office\\layout.tpl',
      1 => 1470845277,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3139657ab52c13912d1-24472885',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOOK_LEFT_COLUMN' => 0,
    'hide_left_column' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'hide_right_column' => 0,
    'display_header' => 0,
    'HOOK_HEADER' => 0,
    'template' => 0,
    'display_footer' => 0,
    'live_edit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab52c13c00e4_03208998',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab52c13c00e4_03208998')) {function content_57ab52c13c00e4_03208998($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['left_column_size'] = new Smarty_variable(0, null, 0);?><?php $_smarty_tpl->tpl_vars['right_column_size'] = new Smarty_variable(0, null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value)&&!$_smarty_tpl->tpl_vars['hide_left_column']->value) {?><?php $_smarty_tpl->tpl_vars['left_column_size'] = new Smarty_variable(3, null, 0);?><?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value)&&!$_smarty_tpl->tpl_vars['hide_right_column']->value) {?><?php $_smarty_tpl->tpl_vars['right_column_size'] = new Smarty_variable(3, null, 0);?><?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['display_header']->value)) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('HOOK_HEADER'=>$_smarty_tpl->tpl_vars['HOOK_HEADER']->value), 0);?>
<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['template']->value)) {?><?php echo $_smarty_tpl->tpl_vars['template']->value;?>
<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['display_footer']->value)) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['live_edit']->value)) {?><?php echo $_smarty_tpl->tpl_vars['live_edit']->value;?>
<?php }?><?php }} ?>
