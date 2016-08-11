<?php /* Smarty version Smarty-3.1.19, created on 2016-08-09 11:43:03
         compiled from "C:\xampp\htdocs\tienda\admin4385dpczm\themes\default\template\helpers\list\list_action_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:442757aa08177aee54-62607472%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7dbd66d9d3c4b12a51d2912bf71b5b45481d7b34' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda\\admin4385dpczm\\themes\\default\\template\\helpers\\list\\list_action_delete.tpl',
      1 => 1470677312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '442757aa08177aee54-62607472',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'confirm' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57aa08177ebd56_15756579',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57aa08177ebd56_15756579')) {function content_57aa08177ebd56_15756579($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)) {?> onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')){return true;}else{event.stopPropagation(); event.preventDefault();};"<?php }?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="delete">
	<i class="icon-trash"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
