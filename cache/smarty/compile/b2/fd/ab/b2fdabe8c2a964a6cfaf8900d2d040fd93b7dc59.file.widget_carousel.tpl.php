<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 11:13:51
         compiled from "C:\xampp\htdocs\tienda\themes\ap_office\modules\leomanagewidgets\views\widgets\widget_carousel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1192957ab52bf3e6ac6-61061528%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2fdabe8c2a964a6cfaf8900d2d040fd93b7dc59' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda\\themes\\ap_office\\modules\\leomanagewidgets\\views\\widgets\\widget_carousel.tpl',
      1 => 1470845278,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1192957ab52bf3e6ac6-61061528',
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
  'unifunc' => 'content_57ab52bf4252d6_07780184',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab52bf4252d6_07780184')) {function content_57ab52bf4252d6_07780184($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['tabname'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['tab']->value), null, 0);?>
<div class="products_block exclusive leomanagerwidgets" >
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<h4 class="page-subheading">
		<span><?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>
</span>
	</h4>
	<?php }?>
	<div class="block_content">	
		<?php if (!empty($_smarty_tpl->tpl_vars['products']->value)) {?>
			<?php echo $_smarty_tpl->getSubTemplate ('./products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php } else { ?>
   			<p class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No products at this time.'),$_smarty_tpl);?>
</p>	
		<?php }?>
	</div>
</div>
<script type="text/javascript">
$(document).ready(function() {
    $('#<?php echo $_smarty_tpl->tpl_vars['tabname']->value;?>
').each(function(){
        $(this).carousel({
            pause: 'hover',
            interval: <?php echo $_smarty_tpl->tpl_vars['interval']->value;?>

        });
    });
});
</script>
<?php }} ?>
