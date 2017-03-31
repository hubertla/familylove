<?php /* Smarty version Smarty-3.1.19, created on 2017-03-30 07:53:40
         compiled from "/home/familylove/public_html/themes/leo_tshirt/modules/blockwishlist/blockwishlist_button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:83456960358dc5714c36861-70372169%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '249ec9dcc46c6b582395a08288291e6bf94e4cd2' => 
    array (
      0 => '/home/familylove/public_html/themes/leo_tshirt/modules/blockwishlist/blockwishlist_button.tpl',
      1 => 1490620336,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83456960358dc5714c36861-70372169',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wishlists' => 0,
    'product' => 0,
    'wishlist' => 0,
    'id_product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58dc5714ce0c35_46476862',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58dc5714ce0c35_46476862')) {function content_58dc5714ce0c35_46476862($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['wishlists']->value)&&count($_smarty_tpl->tpl_vars['wishlists']->value)>1) {?>
<div class="wishlist">
	<?php  $_smarty_tpl->tpl_vars['wishlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['wishlist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wishlists']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['wishlist']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['wishlist']->iteration=0;
 $_smarty_tpl->tpl_vars['wishlist']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['wishlist']->key => $_smarty_tpl->tpl_vars['wishlist']->value) {
$_smarty_tpl->tpl_vars['wishlist']->_loop = true;
 $_smarty_tpl->tpl_vars['wishlist']->iteration++;
 $_smarty_tpl->tpl_vars['wishlist']->index++;
 $_smarty_tpl->tpl_vars['wishlist']->first = $_smarty_tpl->tpl_vars['wishlist']->index === 0;
 $_smarty_tpl->tpl_vars['wishlist']->last = $_smarty_tpl->tpl_vars['wishlist']->iteration === $_smarty_tpl->tpl_vars['wishlist']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['wl']['first'] = $_smarty_tpl->tpl_vars['wishlist']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['wl']['last'] = $_smarty_tpl->tpl_vars['wishlist']->last;
?>
		<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['wl']['first']) {?>
			<a class="wishlist_button_list btn btn-outline-inverse" data-link="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" tabindex="0" data-toggle="popover" data-trigger="focus" title="<?php echo smartyTranslate(array('s'=>'Wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>
" data-placement="top">
					<i class="fa fa fa-heart-o"></i> <span><?php echo smartyTranslate(array('s'=>'Add to wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>
</span>
		</a>
				<div hidden class="popover-content">
						<table class="table" border="0">
							<tbody>
			<?php }?>
								<tr title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wishlist']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" value="<?php echo $_smarty_tpl->tpl_vars['wishlist']->value['id_wishlist'];?>
" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
', false, 1, '<?php echo $_smarty_tpl->tpl_vars['wishlist']->value['id_wishlist'];?>
');">
									<td>
										<?php echo smartyTranslate(array('s'=>'%s','sprintf'=>array($_smarty_tpl->tpl_vars['wishlist']->value['name']),'mod'=>'blockwishlist'),$_smarty_tpl);?>

								</td>
							</tr>
		<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['wl']['last']) {?>
					</tbody>
				</table>
			</div>
		<?php }?>
	<?php }
if (!$_smarty_tpl->tpl_vars['wishlist']->_loop) {
?>
		<a href="#" id="wishlist_button_nopop" data-link="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['id_product']->value);?>
', $('#idCombination').val(), document.getElementById('quantity_wanted').value); return false;" title="<?php echo smartyTranslate(array('s'=>'Add to my wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
		<i class="fa fa-heart-o"></i> 	<span><?php echo smartyTranslate(array('s'=>'Add to Wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>
</span>
	
		</a>
	<?php } ?>
	</div>
<?php } else { ?>
	<div class="wishlist">
		<a class="btn-tooltip btn btn-outline-inverse addToWishlist wishlistProd_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" data-link="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" href="#" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
', false, 1); return false;" title="<?php echo smartyTranslate(array('s'=>'Add to my wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
		
		<i class="fa fa-heart-o"></i> <span><?php echo smartyTranslate(array('s'=>'Add to Wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>
</span>
		
	</a>
	</div>
<?php }?><?php }} ?>
