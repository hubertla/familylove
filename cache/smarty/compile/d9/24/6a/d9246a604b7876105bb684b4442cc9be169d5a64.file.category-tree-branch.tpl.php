<?php /* Smarty version Smarty-3.1.19, created on 2017-03-27 09:05:35
         compiled from "/home/familylove/public_html/themes/pf_basic/modules/ptsblocksearch/views/templates/hook/category-tree-branch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:161281176558d90e1f9d2b38-48091151%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9246a604b7876105bb684b4442cc9be169d5a64' => 
    array (
      0 => '/home/familylove/public_html/themes/pf_basic/modules/ptsblocksearch/views/templates/hook/category-tree-branch.tpl',
      1 => 1490619696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '161281176558d90e1f9d2b38-48091151',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'current_category' => 0,
    'child' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d90e1fa20517_02666231',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d90e1fa20517_02666231')) {function content_58d90e1fa20517_02666231($_smarty_tpl) {?>
<option value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['current_category']->value==$_smarty_tpl->tpl_vars['node']->value['id']) {?>selected="selected"<?php }?>>
    <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['prefix'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

</option>
<?php if (count($_smarty_tpl->tpl_vars['node']->value['children'])>0) {?>
    <?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['node']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['child']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['child']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
 $_smarty_tpl->tpl_vars['child']->iteration++;
 $_smarty_tpl->tpl_vars['child']->last = $_smarty_tpl->tpl_vars['child']->iteration === $_smarty_tpl->tpl_vars['child']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['ptsblocksearchTreeBranch']['last'] = $_smarty_tpl->tpl_vars['child']->last;
?>
        <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['ptsblocksearchTreeBranch']['last']) {?>
            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['ptsbranche_tpl_path']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value,'last'=>'true'), 0);?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['ptsbranche_tpl_path']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value,'last'=>'false'), 0);?>

        <?php }?>
    <?php } ?>
<?php }?>
<?php }} ?>
