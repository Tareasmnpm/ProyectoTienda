<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 11:13:49
         compiled from "C:\xampp\htdocs\tienda\themes\ap_office\modules\blocksearch\blocksearch-top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3168857ab52bdda6762-99377995%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a88b67618e3ec4e85d4bf942c4313e8fd40668b4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda\\themes\\ap_office\\modules\\blocksearch\\blocksearch-top.tpl',
      1 => 1470845277,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3168857ab52bdda6762-99377995',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab52bddd16f6_97024161',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab52bddd16f6_97024161')) {function content_57ab52bddd16f6_97024161($_smarty_tpl) {?>
<!-- Block search module TOP -->
<div id="search_block_top" class="col-xs-12 col-sm-12 col-md-9-6 col-lg-7-2 inner">
	<form id="searchbox" method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search',null,null,null,false,null,true), ENT_QUOTES, 'UTF-8', true);?>
" >
		<div class="input-group">
			<input type="hidden" name="controller" value="search" />
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="orderway" value="desc" />
			<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="<?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch'),$_smarty_tpl);?>
" value="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['search_query']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
" />
			<span class="input-group-btn">
				<button type="submit" name="submit_search" class="btn btn-outline-inverse">
				<span class="button-search fa fa-search"><span class="unvisible"><?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch'),$_smarty_tpl);?>
</span></span>
			</button></span>
		</div>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
