<?php /* Smarty version Smarty-3.1.19, created on 2017-03-30 07:53:41
         compiled from "/home/familylove/public_html/themes/leo_tshirt/modules/leomanagewidgets/views/widgets/displayfooter/widget_html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:81971158758dc57155ed268-08777885%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '681a7ad8febbc068b7f0a7f15b448f073767c6d5' => 
    array (
      0 => '/home/familylove/public_html/themes/leo_tshirt/modules/leomanagewidgets/views/widgets/displayfooter/widget_html.tpl',
      1 => 1490620336,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '81971158758dc57155ed268-08777885',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'html' => 0,
    'widget_heading' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58dc571560a954_49228213',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58dc571560a954_49228213')) {function content_58dc571560a954_49228213($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['html']->value)) {?>
<div class="widget-html block footer-block block nopadding">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<h4 class="title_block">
		<?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>

	</h4>
	<?php }?>
	<div class="block_content toggle-footer">
		<?php echo $_smarty_tpl->tpl_vars['html']->value;?>

	</div>
</div>
<?php }?><?php }} ?>
