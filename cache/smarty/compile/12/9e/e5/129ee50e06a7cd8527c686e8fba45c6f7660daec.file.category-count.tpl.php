<?php /* Smarty version Smarty-3.1.19, created on 2016-08-08 20:36:40
         compiled from "C:\xampp\htdocs\tienda\themes\default-bootstrap\category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2047857a8d1386878c6-64272359%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '129ee50e06a7cd8527c686e8fba45c6f7660daec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda\\themes\\default-bootstrap\\category-count.tpl',
      1 => 1470677383,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2047857a8d1386878c6-64272359',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57a8d1386878c6_54551917',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a8d1386878c6_54551917')) {function content_57a8d1386878c6_54551917($_smarty_tpl) {?>
<span class="heading-counter"><?php if ((isset($_smarty_tpl->tpl_vars['category']->value)&&$_smarty_tpl->tpl_vars['category']->value->id==1)||(isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==0)) {?><?php echo smartyTranslate(array('s'=>'There are no products in this category.'),$_smarty_tpl);?>
<?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==1) {?><?php echo smartyTranslate(array('s'=>'There is 1 product.'),$_smarty_tpl);?>
<?php } elseif (isset($_smarty_tpl->tpl_vars['nb_products']->value)) {?><?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>
<?php }?><?php }?></span>
<?php }} ?>
