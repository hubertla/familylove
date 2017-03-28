<?php /* Smarty version Smarty-3.1.19, created on 2017-03-27 09:05:35
         compiled from "/home/familylove/public_html/themes/pf_basic/modules/psmegamenu/views/templates/front/widgets/widget_videocode.tpl" */ ?>
<?php /*%%SmartyHeaderCode:142202588658d90e1fbdbd76-78988524%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67f1f0ab2c31708deb3ed693b6944ee4e0ed1324' => 
    array (
      0 => '/home/familylove/public_html/themes/pf_basic/modules/psmegamenu/views/templates/front/widgets/widget_videocode.tpl',
      1 => 1490619696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142202588658d90e1fbdbd76-78988524',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'video_link' => 0,
    'widget_heading' => 0,
    'width' => 0,
    'height' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d90e1fc0c8e0_48547615',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d90e1fc0c8e0_48547615')) {function content_58d90e1fc0c8e0_48547615($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['video_link']->value)) {?>
<div class="widget-video block">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<div class="widget-heading title_block">
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_heading']->value, ENT_QUOTES, 'UTF-8', true);?>

	</div>
	<?php }?>
	<div class="widget-inner">
		<iframe src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['video_link']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" style="width:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['width']->value, ENT_QUOTES, 'UTF-8', true);?>
;height:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['height']->value, ENT_QUOTES, 'UTF-8', true);?>
;" allowfullscreen></iframe>
	</div>
</div>
<?php }?><?php }} ?>
