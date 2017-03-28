<?php /* Smarty version Smarty-3.1.19, created on 2017-03-27 19:31:27
         compiled from "/home/familylove/public_html/themes/pf_milky/modules/blocktopmenu/blocktopmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:180556261258d9061fa66782-30731818%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af290c2ce960f13133bd355a1051bd23f7a69718' => 
    array (
      0 => '/home/familylove/public_html/themes/pf_milky/modules/blocktopmenu/blocktopmenu.tpl',
      1 => 1490617399,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180556261258d9061fa66782-30731818',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MENU' => 0,
    'MENU_SEARCH' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d9061fa933d0_03657950',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d9061fa933d0_03657950')) {function content_58d9061fa933d0_03657950($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['MENU']->value!='') {?>
	<!-- Menu -->
	<div id="block_top_menu" class="col-xs-11">
		<h4 class="cat-title title_block"><?php echo smartyTranslate(array('s'=>"Main Menu",'mod'=>"blocktopmenu"),$_smarty_tpl);?>
</h4>
		<ul class="sf-menu clearfix menu-content block_content">
			<?php echo $_smarty_tpl->tpl_vars['MENU']->value;?>

			<?php if ($_smarty_tpl->tpl_vars['MENU_SEARCH']->value) {?>
				<li class="sf-search noBack" style="float:right">
					<form id="searchbox" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'UTF-8', true);?>
" method="get">
						<p>
							<input type="hidden" name="controller" value="search" />
							<input type="hidden" value="position" name="orderby"/>
							<input type="hidden" value="desc" name="orderway"/>
							<input type="text" name="search_query" value="<?php if (isset($_GET['search_query'])) {?><?php echo htmlspecialchars($_GET['search_query'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" />
						</p>
					</form>
				</li>
			<?php }?>
		</ul>
	</div>
	<!--/ Menu -->
<?php }?><?php }} ?>
