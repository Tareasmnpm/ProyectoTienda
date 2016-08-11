<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 11:13:50
         compiled from "C:\xampp\htdocs\tienda\themes\ap_office\modules\leomanagewidgets\views\widgets\displayhome\widget_html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2191757ab52be6a1b52-28298475%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c31cc3a9c115a931ecdb76166ad6f6c1e84e4037' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda\\themes\\ap_office\\modules\\leomanagewidgets\\views\\widgets\\displayhome\\widget_html.tpl',
      1 => 1470845277,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2191757ab52be6a1b52-28298475',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'html' => 0,
    'widget_heading' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab52be6ad6d5_97158879',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab52be6ad6d5_97158879')) {function content_57ab52be6ad6d5_97158879($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['html']->value)) {?>
<div class="widget-html">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<h4 class="title_block">
		<?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>

	</h4>
	<?php }?>
	<div class="block_content">
		<?php echo $_smarty_tpl->tpl_vars['html']->value;?>

	</div>
</div>
<?php }?><?php }} ?>
