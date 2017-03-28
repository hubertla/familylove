<?php /* Smarty version Smarty-3.1.19, created on 2017-03-27 09:05:35
         compiled from "/home/familylove/public_html/themes/pf_basic/modules/blockwishlist/blockwishlist_button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28022634658d90e1f2bb3c7-92996098%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c447336ef3c9aacd9da8350e53be6c18ca93f85' => 
    array (
      0 => '/home/familylove/public_html/themes/pf_basic/modules/blockwishlist/blockwishlist_button.tpl',
      1 => 1490619695,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28022634658d90e1f2bb3c7-92996098',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d90e1f2cf465_94947765',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d90e1f2cf465_94947765')) {function content_58d90e1f2cf465_94947765($_smarty_tpl) {?>

<div class="wishlist">
	<a class="btn addToWishlist wishlistProd_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" title="<?php echo smartyTranslate(array('s'=>'Add to Wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>
" href="#" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
', false, 1); return false;">
		<i class="icon icon-heart-o"></i><span><?php echo smartyTranslate(array('s'=>"Add to Wishlist",'mod'=>'blockwishlist'),$_smarty_tpl);?>
</span>
	</a>
</div><?php }} ?>
