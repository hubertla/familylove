<?php /* Smarty version Smarty-3.1.19, created on 2017-03-29 14:17:25
         compiled from "/home/familylove/public_html/adminFL/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:164108584358db5f8527e871-77468104%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd95fa9c7d97a2eee2d4af9bacee27c8525458976' => 
    array (
      0 => '/home/familylove/public_html/adminFL/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1490614769,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164108584358db5f8527e871-77468104',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58db5f85286ef2_30744333',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58db5f85286ef2_30744333')) {function content_58db5f85286ef2_30744333($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
