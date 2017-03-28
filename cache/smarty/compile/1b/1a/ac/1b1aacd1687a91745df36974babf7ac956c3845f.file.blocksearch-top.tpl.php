<?php /* Smarty version Smarty-3.1.19, created on 2017-03-27 09:37:54
         compiled from "/home/familylove/public_html/themes/leo_tshirt/modules/blocksearch/blocksearch-top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:146946305358d915b2851316-46609378%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b1aacd1687a91745df36974babf7ac956c3845f' => 
    array (
      0 => '/home/familylove/public_html/themes/leo_tshirt/modules/blocksearch/blocksearch-top.tpl',
      1 => 1490620336,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '146946305358d915b2851316-46609378',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d915b28b88b0_34601988',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d915b28b88b0_34601988')) {function content_58d915b28b88b0_34601988($_smarty_tpl) {?>
<!-- Block search module TOP -->
<div id="search_block_top" class="col-xs-12 col-sm-12 col-md-4 col-lg-4 inner pull-right">
	<form id="searchbox" method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search',null,null,null,false,null,true), ENT_QUOTES, 'UTF-8', true);?>
" >
		<div class="input-group">
			<input type="hidden" name="controller" value="search" />
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="orderway" value="desc" />
			<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="<?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch'),$_smarty_tpl);?>
" value="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['search_query']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
" />
			<span class="input-group-btn">
				<button type="submit" name="submit_search" class="btn btn-outline-inverse">
				<span class="button-search fa fa-search"><span class="unvisible"><?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch'),$_smarty_tpl);?>
</span></span>
			</button></span>
		</div>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
