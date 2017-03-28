<?php /* Smarty version Smarty-3.1.19, created on 2017-03-27 19:31:28
         compiled from "/home/familylove/public_html/themes/pf_milky/modules/ptscategoriesinfo/ptscategoriesinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:34136503358d90620087269-61877133%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43f3279028bc8bbb510078b4e4097e8c740675b9' => 
    array (
      0 => '/home/familylove/public_html/themes/pf_milky/modules/ptscategoriesinfo/ptscategoriesinfo.tpl',
      1 => 1490617399,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '34136503358d90620087269-61877133',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'infos' => 0,
    'info' => 0,
    'module_dir' => 0,
    'link' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d906200ce559_62758084',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d906200ce559_62758084')) {function content_58d906200ce559_62758084($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['infos']->value)>0) {?>
<!-- MODULE Block reinsurance -->
<div id="ptscategoriesinfo_block">
    <ul class="row">	
        <?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['infos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
            <li class="col-lg-4 col-md-4 col-sm-4 col-xs-4 <?php if ($_smarty_tpl->tpl_vars['info']->value['addition_class']) {?><?php echo $_smarty_tpl->tpl_vars['info']->value['addition_class'];?>
<?php }?>">
				<div class="box-items">
					<div class="items">
						<img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)$_smarty_tpl->tpl_vars['module_dir']->value)."img/".((string)mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['info']->value['file_name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8')));?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['info']->value['text'], ENT_QUOTES, 'UTF-8', true);?>
" /> 
						<div class="title_info">
									<p class="categoriesinfo_title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['info']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</p>
							<?php if ($_smarty_tpl->tpl_vars['nb_products']->value) {?>
								<p class="product_number"><?php echo smartyTranslate(array('s'=>'Products: ','mod'=>'ptscategoriesinfo'),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['info']->value['nb_products'];?>
</p>
							<?php }?>
						</div>				
						<?php if ($_smarty_tpl->tpl_vars['info']->value['text']) {?>
							<p class="product_description"><?php echo $_smarty_tpl->tpl_vars['info']->value['text'];?>
</p>
						<?php }?>
						<div class="view_more">								  
							<a class="" href="#"><input type="submit" value="View More" class="btn"><i class="icon-arrow-right"></i>	</a>										
						</div>
					</div>
				</div>
            </li>                        
        <?php } ?>
    </ul>
</div>
<!-- /MODULE Block reinsurance -->
<?php }?><?php }} ?>
