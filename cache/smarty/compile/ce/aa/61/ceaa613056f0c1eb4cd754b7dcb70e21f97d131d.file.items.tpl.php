<?php /* Smarty version Smarty-3.1.19, created on 2017-03-27 10:18:25
         compiled from "/home/familylove/public_html/modules/ptsstaticcontent/views/templates/admin/items.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103657961958d91f313fcaf7-32162260%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ceaa613056f0c1eb4cd754b7dcb70e21f97d131d' => 
    array (
      0 => '/home/familylove/public_html/modules/ptsstaticcontent/views/templates/admin/items.tpl',
      1 => 1490617399,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103657961958d91f313fcaf7-32162260',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'htmlitems' => 0,
    'lang' => 0,
    'langItems' => 0,
    'hook' => 0,
    'hookItems' => 0,
    'hItem' => 0,
    'module_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d91f31567a50_91883363',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d91f31567a50_91883363')) {function content_58d91f31567a50_91883363($_smarty_tpl) {?><ul class="lang-tabs nav nav-tabs">
    <?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['htmlitems']->value['lang']['all']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->_loop = true;
?>
		<li id="lang-<?php echo $_smarty_tpl->tpl_vars['lang']->value['id_lang'];?>
" class="lang-flag<?php if ($_smarty_tpl->tpl_vars['lang']->value['id_lang']==$_smarty_tpl->tpl_vars['htmlitems']->value['lang']['default']['id_lang']) {?> active<?php }?>"><img src="../img/l/<?php echo $_smarty_tpl->tpl_vars['lang']->value['id_lang'];?>
.jpg" class="pointer" alt="<?php echo $_smarty_tpl->tpl_vars['lang']->value['name'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['name'];?>
" /> <?php echo $_smarty_tpl->tpl_vars['lang']->value['name'];?>
</li>
    <?php } ?>
</ul>
<div class="lang-items clearfix">

<?php  $_smarty_tpl->tpl_vars['langItems'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['langItems']->_loop = false;
 $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['htmlitems']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['langItems']->key => $_smarty_tpl->tpl_vars['langItems']->value) {
$_smarty_tpl->tpl_vars['langItems']->_loop = true;
 $_smarty_tpl->tpl_vars['lang']->value = $_smarty_tpl->tpl_vars['langItems']->key;
?>
	<div class="accordion-wrapper"  >
    <div id="items-<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="lang-content accordion" style="display:<?php if ($_smarty_tpl->tpl_vars['lang']->value==$_smarty_tpl->tpl_vars['htmlitems']->value['lang']['default']['id_lang']) {?>block<?php } else { ?>none<?php }?>;">

    <?php  $_smarty_tpl->tpl_vars['hookItems'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hookItems']->_loop = false;
 $_smarty_tpl->tpl_vars['hook'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['langItems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hookItems']->key => $_smarty_tpl->tpl_vars['hookItems']->value) {
$_smarty_tpl->tpl_vars['hookItems']->_loop = true;
 $_smarty_tpl->tpl_vars['hook']->value = $_smarty_tpl->tpl_vars['hookItems']->key;
?>
        <div class="accordion-group panel panel-default">
        
        <div class="accordion-heading panel-heading">
            <a class="hook-title accordion-toggle" data-toggle="collapse" data-parent="#items-<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" href="#collapse<?php echo $_smarty_tpl->tpl_vars['hook']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" >
                <?php echo smartyTranslate(array('s'=>'Hook','mod'=>'ptsstaticcontent'),$_smarty_tpl);?>
 "<?php echo $_smarty_tpl->tpl_vars['hook']->value;?>
"
                <span class="label label-danger"><?php echo count($_smarty_tpl->tpl_vars['hookItems']->value);?>
</span>
            </a>
        </div>
        <div class="accordion-body collapse" id="collapse<?php echo $_smarty_tpl->tpl_vars['hook']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
">
        <?php if ($_smarty_tpl->tpl_vars['hookItems']->value) {?>
            <ul id="items" class="row">
                <?php  $_smarty_tpl->tpl_vars['hItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hookItems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hItem']->key => $_smarty_tpl->tpl_vars['hItem']->value) {
$_smarty_tpl->tpl_vars['hItem']->_loop = true;
?>
                    <li id="item-<?php echo $_smarty_tpl->tpl_vars['hItem']->value['id_item'];?>
" class="item  col-md-3 <?php if ($_smarty_tpl->tpl_vars['hItem']->value['active']!=1) {?> inactive <?php }?>" style="clear:none"><div class="panel">
                        <span class="item-order"><?php if ($_smarty_tpl->tpl_vars['hItem']->value['item_order']<=9) {?>0<?php }?><?php echo $_smarty_tpl->tpl_vars['hItem']->value['item_order'];?>
</span>
                        <!--<i class="icon-sort"></i>-->
                        <span class="item-title"><?php echo $_smarty_tpl->tpl_vars['hItem']->value['title'];?>
</span>
                        <span class="button btn btn-default button-edit pull-right hide"><i class="icon-edit"></i><?php echo smartyTranslate(array('s'=>'Edit','mod'=>'ptsstaticcontent'),$_smarty_tpl);?>
</span>
                        <span class="button btn btn-default button-close pull-right"><i class="icon-remove"></i><?php echo smartyTranslate(array('s'=>'Close','mod'=>'ptsstaticcontent'),$_smarty_tpl);?>
</span>
                        <div class="pull-right">
                             <?php if ($_smarty_tpl->tpl_vars['hItem']->value['image']) {?>
                            <a class="button btn btn-info pts-modal" href="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['hItem']->value['image'];?>
" title="<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['hItem']->value['image'],'mod'=>'ptsstaticcontent'),$_smarty_tpl);?>
"><span class="icon icon-picture-o"></span></a>
                            <?php }?>
                            
                            <a href="<?php echo $_smarty_tpl->tpl_vars['htmlitems']->value['postAction'];?>
&id=3&setActiveAction=1" title="<?php echo smartyTranslate(array('s'=>'Set Active Status','mod'=>'ptsstaticcontent'),$_smarty_tpl);?>
" data-active="<?php echo $_smarty_tpl->tpl_vars['hItem']->value['active'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['hItem']->value['id_item'];?>
" class="btn btn-activeaction btn-warning">
                                <span class="icon icon-circle"></span>
                            </a> 
                            <a href="<?php echo $_smarty_tpl->tpl_vars['htmlitems']->value['postAction'];?>
&formedit=1&id_item=<?php echo $_smarty_tpl->tpl_vars['hItem']->value['id_item'];?>
" class="fancybox button btn btn-danger button-edit " title="<?php echo smartyTranslate(array('s'=>'Edit','mod'=>'ptsstaticcontent'),$_smarty_tpl);?>
">
                                <i class="icon-edit"></i>
                            </a>
                        </div>
                   </div> </li>
                <?php } ?>
            </ul>
        <?php } else { ?>
            <div class="item">
                <?php echo smartyTranslate(array('s'=>'No items available','mod'=>'ptsstaticcontent'),$_smarty_tpl);?>

            </div>
        <?php }?>
         </div>
    </div>
    <?php } ?>
	</div>
<?php } ?>
</div>
<hr>
<script type="text/javascript">
    jQuery(document).ready(function(){
        $('.fancybox').fancybox({
		'transitionIn'	:	'elastic',
		'transitionOut'	:	'elastic',
		'speedIn'	:	600, 
		'speedOut'	:	200, 
		'overlayShow'	:	false,
                'type' : 'iframe'
	});
    });
</script><?php }} ?>
