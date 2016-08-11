<?php /* Smarty version Smarty-3.1.19, created on 2016-08-08 20:36:47
         compiled from "C:\xampp\htdocs\tienda\admin\themes\default\template\helpers\tree\tree_node_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2160757a8d13f61ee82-44574404%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd08882267ddc73971a8efaa9ed7ad2618d5dafe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda\\admin\\themes\\default\\template\\helpers\\tree\\tree_node_item.tpl',
      1 => 1470677311,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2160757a8d13f61ee82-44574404',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57a8d13f61ee82_48979611',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a8d13f61ee82_48979611')) {function content_57a8d13f61ee82_48979611($_smarty_tpl) {?>

<li class="tree-item">
	<span class="tree-item-name">
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li><?php }} ?>
