<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 11:13:53
         compiled from "C:\xampp\htdocs\tienda\themes\ap_office\modules\blockcontactinfos\blockcontactinfos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:56657ab52c10f52b7-91557356%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f067e2609e0ddf6e1890fde6505a50482379d76e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda\\themes\\ap_office\\modules\\blockcontactinfos\\blockcontactinfos.tpl',
      1 => 1470845277,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56657ab52c10f52b7-91557356',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'blockcontactinfos_phone' => 0,
    'blockcontactinfos_company' => 0,
    'blockcontactinfos_address' => 0,
    'blockcontactinfos_email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab52c11240c1_69227915',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab52c11240c1_69227915')) {function content_57ab52c11240c1_69227915($_smarty_tpl) {?><?php if (!is_callable('smarty_function_mailto')) include 'C:\\xampp\\htdocs\\tienda\\tools\\smarty\\plugins\\function.mailto.php';
?>

<!-- MODULE Block contact infos -->
<div id="block_contact_infos" class="footer-block block">
	<div>
        <h4 class="title_block"><?php echo smartyTranslate(array('s'=>'Contact Us','mod'=>'blockcontactinfos'),$_smarty_tpl);?>
</h4>
        <ul class="toggle-footer">
            <p><?php echo smartyTranslate(array('s'=>'Etiam lorem odio, varius sit amet eleifend vitae, varius at quam. Aliquam quis metus mauris. Class aptent taciti sociosqu ','mod'=>'blockcontactinfos'),$_smarty_tpl);?>
</p>
             <?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_phone']->value!='') {?>
                <li>
                    <i class="fa fa-phone"></i><?php echo smartyTranslate(array('s'=>'Phone:','mod'=>'blockcontactinfos'),$_smarty_tpl);?>
 
                    <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blockcontactinfos_phone']->value, ENT_QUOTES, 'UTF-8', true);?>
</p>
                </li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_company']->value!='') {?>
            	<li>
            		<i class="fa fa-map-marker"></i><?php echo smartyTranslate(array('s'=>'Address:','mod'=>'blockcontactinfos'),$_smarty_tpl);?>
 
                    <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blockcontactinfos_company']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_address']->value!='') {?>, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blockcontactinfos_address']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?></p>
            	</li>
            <?php }?>
           
            <?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_email']->value!='') {?>
            	<li>
            		<i class="fa fa-envelope"></i><?php echo smartyTranslate(array('s'=>'Email:','mod'=>'blockcontactinfos'),$_smarty_tpl);?>
 
            		<span><?php echo smarty_function_mailto(array('address'=>htmlspecialchars($_smarty_tpl->tpl_vars['blockcontactinfos_email']->value, ENT_QUOTES, 'UTF-8', true),'encode'=>"hex"),$_smarty_tpl);?>
</span>
            	</li>
            <?php }?>
        </ul>
    </div>
</div>
<!-- /MODULE Block contact infos -->
<?php }} ?>
