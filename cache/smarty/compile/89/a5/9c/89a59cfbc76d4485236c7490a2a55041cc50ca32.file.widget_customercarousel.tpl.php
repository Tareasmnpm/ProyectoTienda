<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 11:09:09
         compiled from "C:\xampp\htdocs\tienda\modules\leomanagewidgets\views\widgets\widget_customercarousel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1625757ab51a56b10d9-41558260%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89a59cfbc76d4485236c7490a2a55041cc50ca32' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda\\modules\\leomanagewidgets\\views\\widgets\\widget_customercarousel.tpl',
      1 => 1470845278,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1625757ab51a56b10d9-41558260',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'widget_heading' => 0,
    'show_controls' => 0,
    'customercarousel' => 0,
    'startSlide' => 0,
    'item' => 0,
    'interval' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab51a572e0f6_56431392',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab51a572e0f6_56431392')) {function content_57ab51a572e0f6_56431392($_smarty_tpl) {?>

<div id="custhtmlcarosel<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="block">
    <?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
    <h4 class="title_block">
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_heading']->value, ENT_QUOTES, 'UTF-8', true);?>

    </h4>
    <?php }?>
	<div class="block_content">
		<div class="carousel slide">
			<?php if ($_smarty_tpl->tpl_vars['show_controls']->value&&count($_smarty_tpl->tpl_vars['customercarousel']->value)>1) {?>
			<a class="carousel-control left" href="#custhtmlcarosel<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
"   data-slide="prev">&lsaquo;</a>
			<a class="carousel-control right" href="#custhtmlcarosel<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
"  data-slide="next">&rsaquo;</a>
			<?php }?>
			<div class="carousel-inner">
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['customercarousel']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["mypLoop"]['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["mypLoop"]['index']++;
?>
				<div class="item item <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['mypLoop']['index']==$_smarty_tpl->tpl_vars['startSlide']->value) {?>active<?php }?>"><?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
</div>
			<?php } ?>   
		</div>
	</div>
	</div>
</div>
<script type="text/javascript">

$(document).ready(function() {
    $('#custhtmlcarosel<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
').each(function(){
        $(this).carousel({
            pause: true,
            interval: <?php echo intval($_smarty_tpl->tpl_vars['interval']->value);?>

        });
    });
     
});


</script><?php }} ?>
