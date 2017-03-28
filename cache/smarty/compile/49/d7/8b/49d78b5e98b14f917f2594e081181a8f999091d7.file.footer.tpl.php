<?php /* Smarty version Smarty-3.1.19, created on 2017-03-27 09:05:35
         compiled from "/home/familylove/public_html/themes/pf_basic/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:210153551258d90e1fde53e0-86360235%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49d78b5e98b14f917f2594e081181a8f999091d7' => 
    array (
      0 => '/home/familylove/public_html/themes/pf_basic/footer.tpl',
      1 => 1490619696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '210153551258d90e1fde53e0-86360235',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'PTS_PAGEBUILDER_ACTIVED' => 0,
    'PTS_PAGEBUILDER_FULL' => 0,
    'right_column_size' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'page_name' => 0,
    'PTS_FOOTERBUILDER_CONTENT' => 0,
    'HOOK_FOOTER' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d90e1fe96761_48393508',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d90e1fe96761_48393508')) {function content_58d90e1fe96761_48393508($_smarty_tpl) {?>
<?php if (!isset($_smarty_tpl->tpl_vars['content_only']->value)||!$_smarty_tpl->tpl_vars['content_only']->value) {?>
  			<?php if (Configuration::get('PTS_CP_ENABLE_PBUILDER')&&isset($_smarty_tpl->tpl_vars['PTS_PAGEBUILDER_ACTIVED']->value)&&$_smarty_tpl->tpl_vars['PTS_PAGEBUILDER_ACTIVED']->value&&$_smarty_tpl->tpl_vars['PTS_PAGEBUILDER_FULL']->value) {?>

  				</div ><!-- .columns-container -->
			<?php } else { ?>


							</div>
						</div><!-- #center_column -->
								<?php if (isset($_smarty_tpl->tpl_vars['right_column_size']->value)&&!empty($_smarty_tpl->tpl_vars['right_column_size']->value)) {?>
									<div id="right_column" class="col-xs-12 col-sm-12 col-md-<?php echo intval($_smarty_tpl->tpl_vars['right_column_size']->value);?>
 column sidebar"><?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>
</div>
								<?php }?>
				
							</div><!-- #columns -->
						</div>
					</div>
				</div>
					<?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index') {?>
					<div id="content-bottom">
						<div class="container">
							<div class="row">
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayContentBottom'),$_smarty_tpl);?>

							</div>
						</div>
					</div>
					<?php }?>
				</div ><!-- .columns-container -->
				<!-- Bottom-->
				<?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index') {?>
					<div id="bottom">
						<div class="container">
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayBottom'),$_smarty_tpl);?>

						</div>
					</div>
				<?php }?>
			<?php }?>
		
			<?php if (isset($_smarty_tpl->tpl_vars['PTS_FOOTERBUILDER_CONTENT']->value)&&!empty($_smarty_tpl->tpl_vars['PTS_FOOTERBUILDER_CONTENT']->value)) {?>	
				<footer id="footer">
					<?php echo $_smarty_tpl->tpl_vars['PTS_FOOTERBUILDER_CONTENT']->value;?>


						<?php if (class_exists('PtsthemePanel')) {?>
							<?php echo PtsthemePanel::smartyplugin(array('module'=>'ptssocialsidebar','hook'=>'footer'),$_smarty_tpl);?>

						<?php }?>

					<div id="pts-footercenter">
						<div class="container">
							<div class="inner">
								<div class="row">
									<?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>

								</div>
							</div>
						</div>
					</div>
				</footer>
			<?php } elseif (isset($_smarty_tpl->tpl_vars['HOOK_FOOTER']->value)) {?>
			<!-- Footer -->
				<footer id="footer">			
					<div id="pts-footer-top" class="footer-top">
						<div class="container">
							<div class="inner">
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFootertop'),$_smarty_tpl);?>

								<?php if (class_exists('PtsthemePanel')) {?>
									<?php echo PtsthemePanel::smartyplugin(array('module'=>'blocknewsletter','hook'=>'footer'),$_smarty_tpl);?>

								<?php }?>
							</div>
						</div>
					</div>
					
					<div id="pts-footercenter" class="footer-center">
						<div class="container">
							<div class="inner">
								<div class="row">
									<?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>

								</div>
							</div>
						</div>
					</div>
					<div id="pts-footer-bottom" class="footer-bottom">
						<div class="container">
							<div class="inner">
									<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooterbottom'),$_smarty_tpl);?>

							</div>
						</div>
					</div>
				</footer>
			<?php }?>
		</div>
		<!-- gototop -->
		<?php if (!$_smarty_tpl->tpl_vars['content_only']->value) {?>
		<a id="to_top" href="javascript:;" style="display: inline;"><span class="hidden-xs hidden-sm">&nbsp;</span></a>
		<?php }?>
		<!-- #page -->
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./global.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<div id="fancybox-compare-add" style="display:none;">
	   <div id="fancybox-html">
	    <div class="msg"><?php echo smartyTranslate(array('s'=>'Add product to compare successful'),$_smarty_tpl);?>
</div>
	    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('products-comparison'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'compare product'),$_smarty_tpl);?>
">
	      <strong><?php echo smartyTranslate(array('s'=>'Compare'),$_smarty_tpl);?>
 </strong>
	    </a>
	   </div>
	  </div>

	  <div id="fancybox-compare-remove" style="display:none;">
	   <div id="fancybox-html1">
	    <div class="msg"><?php echo smartyTranslate(array('s'=>'Remove product successful'),$_smarty_tpl);?>
</div>
	    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('products-comparison'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'compare product'),$_smarty_tpl);?>
">
	     <strong><?php echo smartyTranslate(array('s'=>'Click here to compare'),$_smarty_tpl);?>
</strong>
	    </a>
	   </div>
	  </div>
	</body>
</html><?php }} ?>
