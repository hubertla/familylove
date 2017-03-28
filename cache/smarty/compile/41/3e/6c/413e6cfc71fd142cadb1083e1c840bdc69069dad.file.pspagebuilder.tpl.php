<?php /* Smarty version Smarty-3.1.19, created on 2017-03-27 09:05:34
         compiled from "/home/familylove/public_html/themes/pf_basic/modules/pspagebuilder/views/templates/hook/pspagebuilder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:84663544358d90e1e2cf593-03714574%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '413e6cfc71fd142cadb1083e1c840bdc69069dad' => 
    array (
      0 => '/home/familylove/public_html/themes/pf_basic/modules/pspagebuilder/views/templates/hook/pspagebuilder.tpl',
      1 => 1490619696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '84663544358d90e1e2cf593-03714574',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefix' => 0,
    'time' => 0,
    'layout' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d90e1e3379a5_41494300',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d90e1e3379a5_41494300')) {function content_58d90e1e3379a5_41494300($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['ime'] = new Smarty_variable(time(), null, 0);?>
<div id="pts<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['time']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8', true);?>
 clearfix">
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['layout_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('rows'=>$_smarty_tpl->tpl_vars['layout']->value), 0);?>

</div><?php }} ?>
