<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 11:13:53
         compiled from "C:\xampp\htdocs\tienda\themes\ap_office\layout\default\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:871857ab52c16aa311-32477117%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7e8d47d6ff4f741a18136556e3dbef0fcfb2602' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda\\themes\\ap_office\\layout\\default\\footer.tpl',
      1 => 1470845277,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '871857ab52c16aa311-32477117',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOOK_CONTENTBOTTOM' => 0,
    'page_name' => 0,
    'right_column_size' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab52c16b9d13_07092810',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab52c16b9d13_07092810')) {function content_57ab52c16b9d13_07092810($_smarty_tpl) {?>		<?php if ($_smarty_tpl->tpl_vars['HOOK_CONTENTBOTTOM']->value&&in_array($_smarty_tpl->tpl_vars['page_name']->value,array('index'))) {?>
			<div id="contentbottom" class="clearfix block">
				<?php echo $_smarty_tpl->tpl_vars['HOOK_CONTENTBOTTOM']->value;?>

			</div>
		<?php }?>
</section>
<?php if (isset($_smarty_tpl->tpl_vars['right_column_size']->value)&&!empty($_smarty_tpl->tpl_vars['right_column_size']->value)) {?>
<!-- Right -->
<section id="right_column" class="column sidebar col-md-<?php echo intval($_smarty_tpl->tpl_vars['right_column_size']->value);?>
">
		<?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>

</section>
<?php }?>

<?php }} ?>
