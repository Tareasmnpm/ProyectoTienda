<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 11:09:17
         compiled from "C:\xampp\htdocs\tienda\modules\leomanagewidgets\views\widgets\widget_producttabs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1834857ab51ad6689d8-33912860%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d9722cd9e5b3bb14ff128409960f7380108d6f6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda\\modules\\leomanagewidgets\\views\\widgets\\widget_producttabs.tpl',
      1 => 1470845278,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1834857ab51ad6689d8-33912860',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'myTab' => 0,
    'widget_heading' => 0,
    'special' => 0,
    'newproducts' => 0,
    'bestseller' => 0,
    'featured' => 0,
    'interval' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab51ad6e59f8_82102512',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab51ad6e59f8_82102512')) {function content_57ab51ad6e59f8_82102512($_smarty_tpl) {?>

<!-- MODULE Block specials -->
<div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['myTab']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="block products_block exclusive">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<h4 class="title_block">
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_heading']->value, ENT_QUOTES, 'UTF-8', true);?>

	</h4>
	<?php }?>
	<div class="block_content">			            
			<ul id="productTabs" class="list-inline text-center widget-tabs">
			  <?php if ($_smarty_tpl->tpl_vars['special']->value) {?>	
              <li><a href="#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['myTab']->value, ENT_QUOTES, 'UTF-8', true);?>
special" data-toggle="tab"><?php echo smartyTranslate(array('s'=>'Special','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</a></li>
			  <?php }?>
               <?php if ($_smarty_tpl->tpl_vars['newproducts']->value) {?>	
              <li><a href="#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['myTab']->value, ENT_QUOTES, 'UTF-8', true);?>
newproducts" data-toggle="tab"><span></span><?php echo smartyTranslate(array('s'=>'New Arrivals','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</a></li>
			  <?php }?>
			  <?php if ($_smarty_tpl->tpl_vars['bestseller']->value) {?>	
              <li><a href="#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['myTab']->value, ENT_QUOTES, 'UTF-8', true);?>
bestseller" data-toggle="tab"><span></span><?php echo smartyTranslate(array('s'=>'Best Seller','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</a></li>
			  <?php }?>
			  <?php if ($_smarty_tpl->tpl_vars['featured']->value) {?>	
              <li><a href="#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['myTab']->value, ENT_QUOTES, 'UTF-8', true);?>
featured" data-toggle="tab"><span></span><?php echo smartyTranslate(array('s'=>'Featured Products','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</a></li>
			  <?php }?>
            </ul>
			
            <div id="product_tab_content"><div class="product_tab_content tab-content">
			   <?php if ($_smarty_tpl->tpl_vars['special']->value) {?>	
					<div class="tab-pane" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['myTab']->value, ENT_QUOTES, 'UTF-8', true);?>
special">
					<?php $_smarty_tpl->tpl_vars['products'] = new Smarty_variable($_smarty_tpl->tpl_vars['special']->value, null, 0);?><?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['myTab']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['tabname'] = new Smarty_variable($_tmp3."-special", null, 0);?>
					<?php echo $_smarty_tpl->getSubTemplate ('./products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	              </div>
			   <?php }?>
			  <?php if ($_smarty_tpl->tpl_vars['newproducts']->value) {?>		  
              <div class="tab-pane" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['myTab']->value, ENT_QUOTES, 'UTF-8', true);?>
newproducts">
					<?php $_smarty_tpl->tpl_vars['products'] = new Smarty_variable($_smarty_tpl->tpl_vars['newproducts']->value, null, 0);?> <?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['myTab']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp4=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['tabname'] = new Smarty_variable($_tmp4."-newproducts", null, 0);?>
					<?php echo $_smarty_tpl->getSubTemplate ('./products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

              </div>
			 <?php }?>	
			 <?php if ($_smarty_tpl->tpl_vars['bestseller']->value) {?>		  
              <div class="tab-pane" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['myTab']->value, ENT_QUOTES, 'UTF-8', true);?>
bestseller">
					<?php $_smarty_tpl->tpl_vars['products'] = new Smarty_variable($_smarty_tpl->tpl_vars['bestseller']->value, null, 0);?> <?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['myTab']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp5=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['tabname'] = new Smarty_variable($_tmp5."-bestseller", null, 0);?>
					<?php echo $_smarty_tpl->getSubTemplate ('./products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

              </div>   
			 <?php }?>	
			 <?php if ($_smarty_tpl->tpl_vars['featured']->value) {?>		  
              <div class="tab-pane" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['myTab']->value, ENT_QUOTES, 'UTF-8', true);?>
featured">
					<?php $_smarty_tpl->tpl_vars['products'] = new Smarty_variable($_smarty_tpl->tpl_vars['featured']->value, null, 0);?> <?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['myTab']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp6=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['tabname'] = new Smarty_variable($_tmp6."-featured", null, 0);?>
					<?php echo $_smarty_tpl->getSubTemplate ('./products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

              </div>   
			  <?php }?>	
			 
			</div></div>
        
		
	</div>
</div>
<!-- /MODULE Block specials -->
<script>
$(document).ready(function() {
    $('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['myTab']->value, ENT_QUOTES, 'UTF-8', true);?>
 .carousel').each(function(){
        $(this).carousel({
            pause: 'hover',
            interval: <?php echo intval($_smarty_tpl->tpl_vars['interval']->value);?>

        });
    });
 
	$("#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['myTab']->value, ENT_QUOTES, 'UTF-8', true);?>
 ul.widget-tabs li", this).first().addClass("active");
	$("#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['myTab']->value, ENT_QUOTES, 'UTF-8', true);?>
 .tab-content .tab-pane", this).first().addClass("active");
 
});
</script>
 <?php }} ?>
