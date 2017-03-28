<?php /* Smarty version Smarty-3.1.19, created on 2017-03-27 09:14:08
         compiled from "/home/familylove/public_html/modules/leomanagewidgets/views/widgets/widget_html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32856021658d9102015cf26-31786703%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be9bad987fb54a7a5abee3b7dea94b0aa4107cb9' => 
    array (
      0 => '/home/familylove/public_html/modules/leomanagewidgets/views/widgets/widget_html.tpl',
      1 => 1490620337,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32856021658d9102015cf26-31786703',
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
  'unifunc' => 'content_58d910201793b0_86609590',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d910201793b0_86609590')) {function content_58d910201793b0_86609590($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['html']->value)) {?>
<div class="widget-html block">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<h4 class="title_block">
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_heading']->value, ENT_QUOTES, 'UTF-8', true);?>

	</h4>
	<?php }?>
	<div class="block_content">
		<?php echo $_smarty_tpl->tpl_vars['html']->value;?>

	</div>
</div>
<?php }?><?php }} ?>
