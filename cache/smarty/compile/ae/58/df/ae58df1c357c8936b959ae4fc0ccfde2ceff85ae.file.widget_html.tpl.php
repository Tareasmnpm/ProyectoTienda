<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 11:09:08
         compiled from "C:\xampp\htdocs\tienda\modules\leomanagewidgets\views\widgets\widget_html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:191657ab51a4edaca8-44998208%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae58df1c357c8936b959ae4fc0ccfde2ceff85ae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda\\modules\\leomanagewidgets\\views\\widgets\\widget_html.tpl',
      1 => 1470845278,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '191657ab51a4edaca8-44998208',
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
  'unifunc' => 'content_57ab51a502cfd3_51393672',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab51a502cfd3_51393672')) {function content_57ab51a502cfd3_51393672($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['html']->value)) {?>
<div class="widget-html block">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<h4 class="title_block">
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_heading']->value, ENT_QUOTES, 'UTF-8', true);?>

	</h4>
	<?php }?>
	<div class="block_content">
		<?php echo $_smarty_tpl->tpl_vars['html']->value;?>

	</div>
</div>
<?php }?><?php }} ?>
