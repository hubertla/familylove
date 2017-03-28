<?php /* Smarty version Smarty-3.1.19, created on 2017-03-27 09:05:35
         compiled from "/home/familylove/public_html/themes/pf_basic/modules/ptsblocksearch/views/templates/hook/categories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11794131358d90e1f97a2a9-32035999%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f47859084aca0da01e3126c4d127d18dc7c8ebd2' => 
    array (
      0 => '/home/familylove/public_html/themes/pf_basic/modules/ptsblocksearch/views/templates/hook/categories.tpl',
      1 => 1490619696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11794131358d90e1f97a2a9-32035999',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ptsblocksearchCategTree' => 0,
    'current_category' => 0,
    'home_category' => 0,
    'child' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d90e1f9cc263_57220345',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d90e1f9cc263_57220345')) {function content_58d90e1f9cc263_57220345($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['ptsblocksearchCategTree']->value&&count($_smarty_tpl->tpl_vars['ptsblocksearchCategTree']->value['children'])) {?>
    <select name="category_filter" id="category_filter">
        <option value="0"  <?php if ($_smarty_tpl->tpl_vars['current_category']->value==0) {?>selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>'All Categories','mod'=>'ptsblocksearch'),$_smarty_tpl);?>
</option>
        <option value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['home_category']->value->id, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"  <?php if ($_smarty_tpl->tpl_vars['current_category']->value==$_smarty_tpl->tpl_vars['home_category']->value->id) {?>selected="selected"<?php }?>>-- <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['home_category']->value->name, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</option>
        <?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ptsblocksearchCategTree']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['child']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['child']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
 $_smarty_tpl->tpl_vars['child']->iteration++;
 $_smarty_tpl->tpl_vars['child']->last = $_smarty_tpl->tpl_vars['child']->iteration === $_smarty_tpl->tpl_vars['child']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['ptsblocksearchCategTree']['last'] = $_smarty_tpl->tpl_vars['child']->last;
?>
            <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['ptsblocksearchCategTree']['last']) {?>
                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['ptsbranche_tpl_path']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value,'last'=>'true'), 0);?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['ptsbranche_tpl_path']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value), 0);?>

            <?php }?>
        <?php } ?>
    </select>
<?php }?>
<?php }} ?>
