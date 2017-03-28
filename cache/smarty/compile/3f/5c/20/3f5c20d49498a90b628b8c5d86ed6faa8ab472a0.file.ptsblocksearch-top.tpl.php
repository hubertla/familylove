<?php /* Smarty version Smarty-3.1.19, created on 2017-03-27 09:05:35
         compiled from "/home/familylove/public_html/themes/pf_basic/modules/ptsblocksearch/views/templates/hook/ptsblocksearch-top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:36843080258d90e1fa2dc67-04425629%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f5c20d49498a90b628b8c5d86ed6faa8ab472a0' => 
    array (
      0 => '/home/familylove/public_html/themes/pf_basic/modules/ptsblocksearch/views/templates/hook/ptsblocksearch-top.tpl',
      1 => 1490619696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36843080258d90e1fa2dc67-04425629',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hook_mobile' => 0,
    'link' => 0,
    'category_html' => 0,
    'search_query' => 0,
    'instance_tpl_path' => 0,
    'tags' => 0,
    'tag' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d90e1fa93591_72624087',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d90e1fa93591_72624087')) {function content_58d90e1fa93591_72624087($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['hook_mobile']->value)) {?>
    <div class="input_search" data-role="fieldcontain">
    	<form method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'UTF-8', true);?>
" id="searchbox">
                <input type="hidden" name="controller" value="search" />
                <?php echo $_smarty_tpl->tpl_vars['category_html']->value;?>

                <input type="hidden" name="orderby" value="position" />
                <input type="hidden" name="orderway" value="desc" />
                <input class="search_query" type="search" id="search_query_top" name="search_query" placeholder="<?php echo smartyTranslate(array('s'=>'Search','mod'=>'ptsblocksearch'),$_smarty_tpl);?>
" value="<?php echo stripslashes(htmlspecialchars($_smarty_tpl->tpl_vars['search_query']->value, ENT_QUOTES, 'UTF-8', true));?>
" />
    	</form>
    </div>
<?php } else { ?>
    <!-- Block search module TOP -->
    <div id="pts_search_block_top">
        <div class="pts-search">
            <form method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'UTF-8', true);?>
" id="searchbox">
                <input type="hidden" name="controller" value="search" />
                <div class="input-group">
                    <input type="hidden" name="orderby" value="position" />
                    <input type="hidden" name="orderway" value="desc" />
                    <input class="search_query form-control" type="text" placeholder="<?php echo smartyTranslate(array('s'=>'Enter key word ...','mod'=>'ptsblocksearch'),$_smarty_tpl);?>
" id="pts_search_query_top" name="search_query" value="<?php echo stripslashes(htmlspecialchars($_smarty_tpl->tpl_vars['search_query']->value, ENT_QUOTES, 'UTF-8', true));?>
" />
                    <div class="input-group-btn">
                        <?php echo $_smarty_tpl->tpl_vars['category_html']->value;?>

                    </div>
                    <button type="submit" name="submit_search" class="button-search">
                        <span class="icon icon-search"></span>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['instance_tpl_path']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php if ($_smarty_tpl->tpl_vars['tags']->value) {?>
        <div id="search_tags" class="search_tags">
            <?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?>
                <a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value['link'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value['tag'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value['tag'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a>
            <?php } ?>
        </div>
    <?php }?>
<?php }?>
<!-- /Block search module TOP -->
<?php }} ?>
