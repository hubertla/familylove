<?php /* Smarty version Smarty-3.1.19, created on 2017-03-27 09:07:58
         compiled from "/home/familylove/public_html/adminFL/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:166249575358d90eae4ff1c6-80110712%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40e741ee1048aeaf3af70fdf53dfffb3604e315a' => 
    array (
      0 => '/home/familylove/public_html/adminFL/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1490614769,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '166249575358d90eae4ff1c6-80110712',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d90eae5191b7_53206325',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d90eae5191b7_53206325')) {function content_58d90eae5191b7_53206325($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
