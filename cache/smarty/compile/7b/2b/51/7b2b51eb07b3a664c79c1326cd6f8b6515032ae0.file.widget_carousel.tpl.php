<?php /* Smarty version Smarty-3.1.19, created on 2017-03-27 09:14:08
         compiled from "/home/familylove/public_html/themes/leo_tshirt/modules/leomanagewidgets/views/widgets/widget_carousel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16615797858d91020b26a25-86819655%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b2b51eb07b3a664c79c1326cd6f8b6515032ae0' => 
    array (
      0 => '/home/familylove/public_html/themes/leo_tshirt/modules/leomanagewidgets/views/widgets/widget_carousel.tpl',
      1 => 1490620336,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16615797858d91020b26a25-86819655',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tab' => 0,
    'widget_heading' => 0,
    'products' => 0,
    'tabname' => 0,
    'interval' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d91020b54b25_25466188',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d91020b54b25_25466188')) {function content_58d91020b54b25_25466188($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['tabname'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['tab']->value), null, 0);?>
<div class="products_block exclusive leomanagerwidgets  block" >
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<h4 class="page-subheading">
		<?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>

	</h4>
	<?php }?>
	<div class="block_content">	
		<?php if (!empty($_smarty_tpl->tpl_vars['products']->value)) {?>
			<?php echo $_smarty_tpl->getSubTemplate ('./products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php } else { ?>
   			<p class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No products at this time.','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</p>	
		<?php }?>
	</div>
</div>
<script type="text/javascript">
$(document).ready(function() {
    $('#<?php echo $_smarty_tpl->tpl_vars['tabname']->value;?>
').each(function(){
        $(this).carousel({
            pause: 'hover',
            interval: <?php echo $_smarty_tpl->tpl_vars['interval']->value;?>

        });
    });
});
</script>
<?php }} ?>
