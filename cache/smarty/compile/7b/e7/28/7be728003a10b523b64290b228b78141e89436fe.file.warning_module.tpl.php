<?php /* Smarty version Smarty-3.1.19, created on 2017-03-29 14:04:14
         compiled from "/home/familylove/public_html/adminFL/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:95104872358db5c6e414568-97841872%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '95104872358db5c6e414568-97841872',
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
  'unifunc' => 'content_58db5c6e41f437_30430985',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58db5c6e41f437_30430985')) {function content_58db5c6e41f437_30430985($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
