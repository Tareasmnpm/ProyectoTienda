<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 11:09:15
         compiled from "C:\xampp\htdocs\tienda\modules\leomanagewidgets\views\widgets\widget_carousel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2956857ab51ab157386-36629908%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fdf1fd3960c0762cc00732ba5a8e06d8c293f377' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda\\modules\\leomanagewidgets\\views\\widgets\\widget_carousel.tpl',
      1 => 1470845278,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2956857ab51ab157386-36629908',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tab' => 0,
    'widget_heading' => 0,
    'products' => 0,
    'tabname' => 0,
    'interval' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab51ab2031b8_22656717',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab51ab2031b8_22656717')) {function content_57ab51ab2031b8_22656717($_smarty_tpl) {?>

<?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['tabname'] = new Smarty_variable($_tmp1, null, 0);?>
<div class="block products_block exclusive leomanagerwidgets">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<h4 class="title_block">
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_heading']->value, ENT_QUOTES, 'UTF-8', true);?>

	</h4>
	<?php }?>
	<div class="block_content">	
		<?php if (!empty($_smarty_tpl->tpl_vars['products']->value)) {?>
			<?php echo $_smarty_tpl->getSubTemplate ('./products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php } else { ?>
   			<p class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No products at this time.','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</p>	
		<?php }?>
	</div>
</div>
<script type="text/javascript">
$(document).ready(function() {
    $('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tabname']->value, ENT_QUOTES, 'UTF-8', true);?>
').each(function(){
        $(this).carousel({
            pause: 'hover',
            interval: <?php echo intval($_smarty_tpl->tpl_vars['interval']->value);?>

        });
    });
});
</script>
<?php }} ?>
