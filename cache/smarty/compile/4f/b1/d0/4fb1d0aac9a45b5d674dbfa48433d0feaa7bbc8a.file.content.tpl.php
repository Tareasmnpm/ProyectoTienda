<?php /* Smarty version Smarty-3.1.19, created on 2016-08-08 20:36:39
         compiled from "C:\xampp\htdocs\tienda\admin\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:112857a8d137b508b3-30068363%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fb1d0aac9a45b5d674dbfa48433d0feaa7bbc8a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda\\admin\\themes\\default\\template\\content.tpl',
      1 => 1470677303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112857a8d137b508b3-30068363',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57a8d137bca6b8_09045689',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a8d137bca6b8_09045689')) {function content_57a8d137bca6b8_09045689($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
