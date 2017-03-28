<?php /* Smarty version Smarty-3.1.19, created on 2017-03-27 20:03:18
         compiled from "/home/familylove/public_html/adminFL/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:136987896458d90d96c91e02-17686462%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7be728003a10b523b64290b228b78141e89436fe' => 
    array (
      0 => '/home/familylove/public_html/adminFL/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1490614767,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136987896458d90d96c91e02-17686462',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d90d96c9d1e4_01232612',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d90d96c9d1e4_01232612')) {function content_58d90d96c9d1e4_01232612($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
