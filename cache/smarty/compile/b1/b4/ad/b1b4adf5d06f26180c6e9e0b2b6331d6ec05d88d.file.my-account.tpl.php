<?php /* Smarty version Smarty-3.1.19, created on 2016-08-08 20:36:42
         compiled from "C:\xampp\htdocs\tienda\themes\default-bootstrap\modules\blockwishlist\my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2699457a8d13ac31901-13869034%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1b4adf5d06f26180c6e9e0b2b6331d6ec05d88d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda\\themes\\default-bootstrap\\modules\\blockwishlist\\my-account.tpl',
      1 => 1470677388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2699457a8d13ac31901-13869034',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57a8d13ac31904_79068835',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a8d13ac31904_79068835')) {function content_57a8d13ac31904_79068835($_smarty_tpl) {?>

<!-- MODULE WishList -->
<li class="lnk_wishlist">
	<a 	href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
		<i class="icon-heart"></i>
		<span><?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
</span>
	</a>
</li>
<!-- END : MODULE WishList --><?php }} ?>
