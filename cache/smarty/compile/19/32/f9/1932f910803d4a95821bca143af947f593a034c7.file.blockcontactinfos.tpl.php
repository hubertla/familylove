<?php /* Smarty version Smarty-3.1.19, created on 2017-03-27 19:31:28
         compiled from "/home/familylove/public_html/themes/pf_milky/modules/blockcontactinfos/blockcontactinfos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:112963774058d9062073c0f8-48379158%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1932f910803d4a95821bca143af947f593a034c7' => 
    array (
      0 => '/home/familylove/public_html/themes/pf_milky/modules/blockcontactinfos/blockcontactinfos.tpl',
      1 => 1490617399,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112963774058d9062073c0f8-48379158',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'blockcontactinfos_company' => 0,
    'blockcontactinfos_address' => 0,
    'blockcontactinfos_phone' => 0,
    'blockcontactinfos_email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d906207859f4_18142807',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d906207859f4_18142807')) {function content_58d906207859f4_18142807($_smarty_tpl) {?><?php if (!is_callable('smarty_function_mailto')) include '/home/familylove/public_html/tools/smarty/plugins/function.mailto.php';
?>

<!-- MODULE Block contact infos -->
<div id="block_contact_infos" class="block red footer-block col-xs-12 col-md-3">
	<div>
        <h4 class="title_block"><?php echo smartyTranslate(array('s'=>'About Us','mod'=>'blockcontactinfos'),$_smarty_tpl);?>
</h4>
		<div class="block_content toggle-footer">
			<p class="des_contact_info">Milk is a white liquid produced by the mammary glands of mammals. It is the primary source </p>
			<ul class="">
				<?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_company']->value!='') {?>
					<li>
						<i class="icon-map-marker"></i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blockcontactinfos_company']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_address']->value!='') {?>, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blockcontactinfos_address']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>
					</li>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_phone']->value!='') {?>
					<li>
						<i class="icon-phone"></i><?php echo smartyTranslate(array('s'=>'Call us now:','mod'=>'blockcontactinfos'),$_smarty_tpl);?>
 
						<span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blockcontactinfos_phone']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
					</li>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_email']->value!='') {?>
					<li>
						<i class="icon-envelope-alt"></i><?php echo smartyTranslate(array('s'=>'Email:','mod'=>'blockcontactinfos'),$_smarty_tpl);?>
 
						<span><?php echo smarty_function_mailto(array('address'=>htmlspecialchars($_smarty_tpl->tpl_vars['blockcontactinfos_email']->value, ENT_QUOTES, 'UTF-8', true),'encode'=>"hex"),$_smarty_tpl);?>
</span>
					</li>
				<?php }?>
			</ul>
		</div>
    </div>
</div>
<!-- /MODULE Block contact infos -->
<?php }} ?>
