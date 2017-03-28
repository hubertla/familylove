<?php /* Smarty version Smarty-3.1.19, created on 2017-03-27 19:31:29
         compiled from "/home/familylove/public_html/themes/pf_milky/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:115694589058d90621059a82-53611816%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea80e8c5f8c93600bcac43552f53622b5e5c45ac' => 
    array (
      0 => '/home/familylove/public_html/themes/pf_milky/footer.tpl',
      1 => 1490617399,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115694589058d90621059a82-53611816',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'right_column_size' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'HOOK_FOOTER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d90621090f06_79778259',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d90621090f06_79778259')) {function content_58d90621090f06_79778259($_smarty_tpl) {?>
<?php if (!isset($_smarty_tpl->tpl_vars['content_only']->value)||!$_smarty_tpl->tpl_vars['content_only']->value) {?>
					</div><!-- #center_column -->
					<?php if (isset($_smarty_tpl->tpl_vars['right_column_size']->value)&&!empty($_smarty_tpl->tpl_vars['right_column_size']->value)) {?>
						<div id="right_column" class="col-xs-12 col-md-<?php echo intval($_smarty_tpl->tpl_vars['right_column_size']->value);?>
 column sidebar"><?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>
</div>
					<?php }?>
					</div><!-- .row -->
				</div><!-- #columns -->
			</div><!-- .columns-container -->

			<?php if (isset($_smarty_tpl->tpl_vars['HOOK_FOOTER']->value)) {?>
				<!-- Footer -->
				<div id="footer_container" class="footer-container no-padding">
					<div id="footer"  class="container">
						<div class="row"><?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>
</div>
					</div>
				</div>
				<!-- #footer -->
			<?php }?>
		</div><!-- #page -->
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./global.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<script type="text/javascript">			
			var elements = document.getElementsByClassName('grid');
			for (var i = 0; i < elements.length; i++) {
			  new AnimOnScroll( elements[i], {
					minDuration : 0.4,
					maxDuration : 0.7,
					viewportFactor : 1.2
				} );		
			}
			jQuery(document).ready(function(){
				$("#home-page-tabs a[data-toggle=tab]").click(function(){
					var elements = document.getElementsByClassName('grid');
					for (var i = 0; i < elements.length; i++) {
					  new AnimOnScroll( elements[i], {
							minDuration : 0.4,
							maxDuration : 0.7,
							viewportFactor : 0
						} );		
					}
				});
			});
		</script>
	</body>
</html><?php }} ?>
