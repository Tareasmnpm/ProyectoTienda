<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 11:13:49
         compiled from "C:\xampp\htdocs\tienda\themes\ap_office\modules\leomanagewidgets\views\widgets\displaybottom\widget_html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:171257ab52bd570c71-20232928%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7fdbbbd0ac76816e8969f14fe7005e8b7ad3e1da' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda\\themes\\ap_office\\modules\\leomanagewidgets\\views\\widgets\\displaybottom\\widget_html.tpl',
      1 => 1470845277,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '171257ab52bd570c71-20232928',
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
  'unifunc' => 'content_57ab52bd58c207_95464648',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab52bd58c207_95464648')) {function content_57ab52bd58c207_95464648($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['html']->value)) {?>
<div class="widget-html nopadding">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<h4>
		<?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>

	</h4>
	<?php }?>
	<div class="block_content">
		<?php echo $_smarty_tpl->tpl_vars['html']->value;?>

	</div>
</div>
<?php }?><?php }} ?>
