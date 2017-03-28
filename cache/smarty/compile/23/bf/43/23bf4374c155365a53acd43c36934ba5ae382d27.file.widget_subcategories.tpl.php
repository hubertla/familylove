<?php /* Smarty version Smarty-3.1.19, created on 2017-03-27 09:05:35
         compiled from "/home/familylove/public_html/themes/pf_basic/modules/psmegamenu/views/templates/front/widgets/widget_subcategories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:160723356058d90e1fb6ae82-78059336%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23bf4374c155365a53acd43c36934ba5ae382d27' => 
    array (
      0 => '/home/familylove/public_html/themes/pf_basic/modules/psmegamenu/views/templates/front/widgets/widget_subcategories.tpl',
      1 => 1490619696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160723356058d90e1fb6ae82-78059336',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'subcategories' => 0,
    'widget_heading' => 0,
    'subcategory' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d90e1fbada71_22228739',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d90e1fbada71_22228739')) {function content_58d90e1fbada71_22228739($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['subcategories']->value)) {?>
<div class="widget-subcategories block">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<div class="widget-heading title_block">
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_heading']->value, ENT_QUOTES, 'UTF-8', true);?>

	</div>
	<?php }?>
	<div class="widget-inner block_content">
		<ul>
			<?php  $_smarty_tpl->tpl_vars['subcategory'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subcategory']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subcategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subcategory']->key => $_smarty_tpl->tpl_vars['subcategory']->value) {
$_smarty_tpl->tpl_vars['subcategory']->_loop = true;
?>
				<li class="clearfix">
					<a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['subcategory']->value['id_category'],$_smarty_tpl->tpl_vars['subcategory']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['subcategory']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="img">
						<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['subcategory']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 
					</a>
				</li>
			<?php } ?>
		</ul>
	</div>
</div>
<?php }?> <?php }} ?>
