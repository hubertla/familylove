<?php /* Smarty version Smarty-3.1.19, created on 2017-03-27 10:18:25
         compiled from "/home/familylove/public_html/modules/ptsstaticcontent/views/templates/admin/new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:51604946558d91f3157a361-47297661%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75b856b923c38a02d77511adb1a475f6382410c8' => 
    array (
      0 => '/home/familylove/public_html/modules/ptsstaticcontent/views/templates/admin/new.tpl',
      1 => 1490617399,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51604946558d91f3157a361-47297661',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'htmlitems' => 0,
    'lang' => 0,
    'hook' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d91f3169af22_21107534',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d91f3169af22_21107534')) {function content_58d91f3169af22_21107534($_smarty_tpl) {?><div class="new-item">
	<div class="form-group clearfix">
    	<span class="button btn btn-default new-item"><i class="icon-plus-sign"></i><?php echo smartyTranslate(array('s'=>'Add item','mod'=>'ptsstaticcontent'),$_smarty_tpl);?>
</span>
    </div>
    <div class="item-container">
        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['htmlitems']->value['postAction'];?>
" enctype="multipart/form-data" class="item-form defaultForm  form-horizontal">
        	<div class="panel">
                <div class="language item-field form-group">
                    <label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Language','mod'=>'ptsstaticcontent'),$_smarty_tpl);?>
</label>
                    <div class="col-lg-7">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
                            <span id="selected-language">
                            <?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['htmlitems']->value['lang']['all']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->_loop = true;
?>
                                <?php if ($_smarty_tpl->tpl_vars['lang']->value['id_lang']==$_smarty_tpl->tpl_vars['htmlitems']->value['lang']['default']['id_lang']) {?> <?php echo $_smarty_tpl->tpl_vars['lang']->value['iso_code'];?>
<?php }?>
                            <?php } ?>
                            </span>
                            <span class="caret">&nbsp;</span>
                        </button>
                        <ul class="languages dropdown-menu">
                            <?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['htmlitems']->value['lang']['all']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->_loop = true;
?>
                                <li id="lang-<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value['id_lang'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="new-lang-flag"><a href="javascript:setLanguage(<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value['id_lang'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
, '<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value['iso_code'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
');"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a></li>
                            <?php } ?>
                        </ul>
                        <input type="hidden" id="lang-id" name="id_lang" value="<?php echo $_smarty_tpl->tpl_vars['htmlitems']->value['lang']['default']['id_lang'];?>
" />
                    </div>
                </div>
                
                <div class="title item-field form-group">
                    <label class="control-label col-lg-3 "><?php echo smartyTranslate(array('s'=>'Title','mod'=>'ptsstaticcontent'),$_smarty_tpl);?>
</label>
                    <div class="col-lg-7">
                    	<input class="form-control" type="text" name="item_title" size="48" value="" />
                    </div>
                </div>

                 


                <div class="title_use item-field form-group">
                    <label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Use title in front','mod'=>'ptsstaticcontent'),$_smarty_tpl);?>
</label>
                    <input type="checkbox" name="item_title_use" value="1" />
                </div>
                <div class="image_w item-field form-group">
                    <label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Addition Class','mod'=>'ptsstaticcontent'),$_smarty_tpl);?>
</label>
                    <div class="col-lg-7">
                    	<input name="class" type="text" size="4" value=""/>
                    </div>
                </div>
                    
                <div class="hook item-field form-group">
                    <label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Hook','mod'=>'ptsstaticcontent'),$_smarty_tpl);?>
</label>
                    <div class="col-lg-7">
                        <select class="form-control" name="item_hook" default="home">
                           <?php  $_smarty_tpl->tpl_vars['hook'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hook']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['htmlitems']->value['modulehooks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hook']->key => $_smarty_tpl->tpl_vars['hook']->value) {
$_smarty_tpl->tpl_vars['hook']->_loop = true;
?>
                           <option value="<?php echo $_smarty_tpl->tpl_vars['hook']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['hook']->value;?>
</option>  
                            <?php } ?> 
                        </select>
                    </div>
                </div>
                <div class="image item-field form-group">
                    <label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Image','mod'=>'ptsstaticcontent'),$_smarty_tpl);?>
</label>
                    <div class="col-lg-7">
                    	<input type="file" name="item_img" />
                    </div>
                </div>
                <div class="image_w item-field form-group">
                    <label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Image width','mod'=>'ptsstaticcontent'),$_smarty_tpl);?>
</label>
                    <div class="col-lg-7">
                    	<input name="item_img_w" type="text" maxlength="4" size="4" value=""/>
                    </div>
                </div>
                <div class="image_h item-field form-group">
                    <label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Image height','mod'=>'ptsstaticcontent'),$_smarty_tpl);?>
</label>
                    <div class="col-lg-7">
                   		<input name="item_img_h" type="text" maxlength="4" size="4" value=""/>
                    </div>
                </div>

                <div class="col_lg item-field form-group">
                    <label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Column Width In Large Screen','mod'=>'ptsstaticcontent'),$_smarty_tpl);?>
</label>
                    <div class="col-lg-7">
                        <input name="col_lg" type="text" maxlength="4" size="4" value=""/>
                    </div>
                </div>



                <div class="url item-field form-group">
                    <label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'URL','mod'=>'ptsstaticcontent'),$_smarty_tpl);?>
</label>
                    <div class="col-lg-7">
                    	<input type="text" name="item_url" size="48" value="http://" />
                    </div>
                </div>
                <div class="target item-field form-group">
                    <label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Target blank','mod'=>'ptsstaticcontent'),$_smarty_tpl);?>
</label>
                    <div class="col-lg-7">
                    	<input type="checkbox" name="item_target" value="1" />
                    </div>
                </div>
                <div class="html item-field form-group">
                    <label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'HTML','mod'=>'ptsstaticcontent'),$_smarty_tpl);?>
</label>
                    <div class="col-lg-7">
                    	<textarea  class="rte autoload_rte" name="item_html" cols="65" rows="12"></textarea>
                    </div>
                </div>
                <div class="form-group">
                	<div class="col-lg-9 col-lg-offset-3">
                		<button type="submit" name="newItem" class="button-save btn btn-default" onClick="this.form.submit();"><?php echo smartyTranslate(array('s'=>'Save','mod'=>'ptsstaticcontent'),$_smarty_tpl);?>
</button>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>

<script type="text/javascript">
    var iso = '<?php echo $_smarty_tpl->tpl_vars['htmlitems']->value['isoTinyMCE'];?>
' ;
    var pathCSS = '<?php echo $_smarty_tpl->tpl_vars['htmlitems']->value['_THEME_CSS_DIR_'];?>
' ;
    var ad = '<?php echo $_smarty_tpl->tpl_vars['htmlitems']->value['ad'];?>
' ;
    tinySetup();
</script>
<script type="text/javascript">
	function setLanguage(language_id, language_code) {
		$('#lang-id').val(language_id);
		$('#selected-language').html(language_code);
	}
</script><?php }} ?>
