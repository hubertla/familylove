<?php /* Smarty version Smarty-3.1.19, created on 2017-03-27 10:18:25
         compiled from "/home/familylove/public_html/modules/ptsstaticcontent/views/templates/admin/admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:53682297058d91f31308173-58776073%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '323ac1a29c6328149e01b3c15d7091bf0b67f7e4' => 
    array (
      0 => '/home/familylove/public_html/modules/ptsstaticcontent/views/templates/admin/admin.tpl',
      1 => 1490617399,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '53682297058d91f31308173-58776073',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'htmlcontent' => 0,
    'error' => 0,
    'confirmation' => 0,
    'htmlitems' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d91f313f2b01_83599674',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d91f313f2b01_83599674')) {function content_58d91f313f2b01_83599674($_smarty_tpl) {?><div id="htmlcontent" class="clearfix">
    <h2><?php echo $_smarty_tpl->tpl_vars['htmlcontent']->value['info']['name'];?>
 (v.<?php echo $_smarty_tpl->tpl_vars['htmlcontent']->value['info']['version'];?>
)</h2>
    <?php if (isset($_smarty_tpl->tpl_vars['error']->value)&&$_smarty_tpl->tpl_vars['error']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['htmlcontent']->value['admin_tpl_path'])."messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"main",'text'=>$_smarty_tpl->tpl_vars['error']->value,'class'=>'error'), 0);?>

    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['confirmation']->value)&&$_smarty_tpl->tpl_vars['confirmation']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['htmlcontent']->value['admin_tpl_path'])."messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"main",'text'=>$_smarty_tpl->tpl_vars['confirmation']->value,'class'=>'conf'), 0);?>

    <?php }?>
    <!-- New -->
     <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['htmlcontent']->value['admin_tpl_path'])."items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dcol'=>$_smarty_tpl->tpl_vars['htmlitems']->value['autocol']), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['htmlcontent']->value['admin_tpl_path'])."new.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dcol'=>$_smarty_tpl->tpl_vars['htmlitems']->value['autocol']), 0);?>

    <!-- Slides -->
   
</div>
<?php }} ?>
