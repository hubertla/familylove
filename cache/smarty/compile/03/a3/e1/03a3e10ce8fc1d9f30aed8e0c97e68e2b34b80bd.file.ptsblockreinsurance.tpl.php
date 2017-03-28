<?php /* Smarty version Smarty-3.1.19, created on 2017-03-27 19:31:27
         compiled from "/home/familylove/public_html/themes/pf_milky/modules/ptsblockreinsurance/ptsblockreinsurance.tpl" */ ?>
<?php /*%%SmartyHeaderCode:187934010658d9061fca5511-46181964%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03a3e10ce8fc1d9f30aed8e0c97e68e2b34b80bd' => 
    array (
      0 => '/home/familylove/public_html/themes/pf_milky/modules/ptsblockreinsurance/ptsblockreinsurance.tpl',
      1 => 1490617399,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '187934010658d9061fca5511-46181964',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'infos' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d9061fcd3a36_50723080',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d9061fcd3a36_50723080')) {function content_58d9061fcd3a36_50723080($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['infos']->value)>0) {?>
<!-- MODULE Block reinsurance -->
<div id="reinsurance_block" class="block red">
	<div class="title_block"><?php echo smartyTranslate(array('s'=>"Shipping worldwide",'mod'=>"ptsblockreinsurance"),$_smarty_tpl);?>
</div>
	<div class="block_content">
		<ul>	
			<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['infos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
				<li>
					<i class="<?php if ($_smarty_tpl->tpl_vars['info']->value['addition_class']) {?><?php echo $_smarty_tpl->tpl_vars['info']->value['addition_class'];?>
 <?php }?>"></i>
					<p class="reinsurance_title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['info']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</p>
					<span><?php echo $_smarty_tpl->tpl_vars['info']->value['text'];?>
</span>
				</li>                        
			<?php } ?>
		</ul>
	</div>
</div>
<!-- /MODULE Block reinsurance -->
<?php }?><?php }} ?>
