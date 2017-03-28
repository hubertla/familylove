<?php /* Smarty version Smarty-3.1.19, created on 2017-03-27 19:31:27
         compiled from "/home/familylove/public_html/themes/pf_milky/modules/blockadvertising/blockadvertising.tpl" */ ?>
<?php /*%%SmartyHeaderCode:211406753158d9061fc8bf74-13907231%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be2cf2f5558425792bea427dcbe1e55092abc1d7' => 
    array (
      0 => '/home/familylove/public_html/themes/pf_milky/modules/blockadvertising/blockadvertising.tpl',
      1 => 1490617399,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211406753158d9061fc8bf74-13907231',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'adv_link' => 0,
    'adv_title' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d9061fc9d935_30202392',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d9061fc9d935_30202392')) {function content_58d9061fc9d935_30202392($_smarty_tpl) {?>

<!-- MODULE Block advertising -->
<div class="advertising_block hidden-sm hidden-xs">
	<a href="<?php echo $_smarty_tpl->tpl_vars['adv_link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
"><img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
"/></a>
</div>
<!-- /MODULE Block advertising -->
<?php }} ?>
