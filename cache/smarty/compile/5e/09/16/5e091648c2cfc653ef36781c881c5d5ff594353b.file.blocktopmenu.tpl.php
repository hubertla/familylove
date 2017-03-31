<?php /* Smarty version Smarty-3.1.19, created on 2017-03-30 07:53:39
         compiled from "/home/familylove/public_html/themes/leo_tshirt/modules/blocktopmenu/blocktopmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3782660558dc5713dc1b21-60287250%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e091648c2cfc653ef36781c881c5d5ff594353b' => 
    array (
      0 => '/home/familylove/public_html/themes/leo_tshirt/modules/blocktopmenu/blocktopmenu.tpl',
      1 => 1490683058,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3782660558dc5713dc1b21-60287250',
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
  'unifunc' => 'content_58dc5713e41978_17731660',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58dc5713e41978_17731660')) {function content_58dc5713e41978_17731660($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['MENU']->value!='') {?>
	<!-- Menu -->
	<div id="block_top_menu" class="sf-contener clearfix">
		<div class="cat-title"><i class="fa fa-navicon"></i></div>
		<ul class="sf-menu clearfix menu-content">
			<?php echo $_smarty_tpl->tpl_vars['MENU']->value;?>
			
		</ul>
		<?php if ($_smarty_tpl->tpl_vars['MENU_SEARCH']->value) {?>
			<div class="sf-search noBack">
				<form id="searchbox" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'UTF-8', true);?>
" method="get">
					<p>
						<input type="hidden" name="controller" value="search" />
						<input type="hidden" value="position" name="orderby"/>
						<input type="hidden" value="desc" name="orderway"/>
							<input type="text" name="search_query" placeholder="Tìm kiếm nhanh" value="<?php if (isset($_GET['search_query'])) {?><?php echo htmlspecialchars($_GET['search_query'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" />
					</p>
					<span>
						<button class="btn btn-outline-inverse" name="submit_search" type="submit">
							<span class="button-search fa fa-search"></span>
						</button>
					</span>
				</form>
			</div>
		<?php }?>
	</div>	
	<!--/ Menu -->
<?php }?><?php }} ?>
