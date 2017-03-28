<?php /* Smarty version Smarty-3.1.19, created on 2017-03-27 09:05:35
         compiled from "/home/familylove/public_html/themes/pf_basic/modules/ptsthemepanel/views/templates/hook/gallery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:175001102058d90e1f2de8e6-66175776%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '228fe623641aa2603268006de6e8258b35b4f154' => 
    array (
      0 => '/home/familylove/public_html/themes/pf_basic/modules/ptsthemepanel/views/templates/hook/gallery.tpl',
      1 => 1490619696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '175001102058d90e1f2de8e6-66175776',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ptsimages' => 0,
    'tabname' => 0,
    'ptsgkey' => 0,
    'columns' => 0,
    'class' => 0,
    'list_mode' => 0,
    'nbr_desktops' => 0,
    'nbr_tablets' => 0,
    'nbr_mobile' => 0,
    'product' => 0,
    'image' => 0,
    'imageIds' => 0,
    'link' => 0,
    'imageTitle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d90e1f3a31a3_19042938',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d90e1f3a31a3_19042938')) {function content_58d90e1f3a31a3_19042938($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['ptsimages']->value) {?>
<?php $_smarty_tpl->tpl_vars['tabname'] = new Smarty_variable("psthumbs_list", null, 0);?>
<?php $_smarty_tpl->tpl_vars['columns'] = new Smarty_variable(6, null, 0);?>
<?php $_smarty_tpl->tpl_vars['nbr_desktops'] = new Smarty_variable(5, null, 0);?>
<?php $_smarty_tpl->tpl_vars['nbr_tablets'] = new Smarty_variable(5, null, 0);?>
<?php $_smarty_tpl->tpl_vars['nbr_mobile'] = new Smarty_variable(5, null, 0);?>

	<div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tabname']->value, ENT_QUOTES, 'UTF-8', true);?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ptsgkey']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="  widget-content owl-carousel-play wrap_thumbnail" data-ride="owlcarousel">
	 	<?php if (count($_smarty_tpl->tpl_vars['ptsimages']->value)>$_smarty_tpl->tpl_vars['columns']->value) {?>
		 	<div class="carousel-controls">
			 	<a class="left carousel-control left_carousel" href="#">&lsaquo;</a>
				<a class="right carousel-control right_carousel" href="#">&rsaquo;</a>
			</div>
		<?php }?>
		<div class="thumbs_list_frame owl-carousel <?php if (isset($_smarty_tpl->tpl_vars['class']->value)&&$_smarty_tpl->tpl_vars['class']->value) {?> <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['list_mode']->value)&&$_smarty_tpl->tpl_vars['list_mode']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['list_mode']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" data-columns="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['columns']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-pagination="false" data-navigation="true"
			<?php if (isset($_smarty_tpl->tpl_vars['nbr_desktops']->value)) {?>data-desktop="[1200,<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nbr_desktops']->value, ENT_QUOTES, 'UTF-8', true);?>
]"<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['nbr_tablets']->value)) {?>data-desktopsmall="[992,<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nbr_tablets']->value, ENT_QUOTES, 'UTF-8', true);?>
]"<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['nbr_mobile']->value)) {?>data-tablet="[768,<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nbr_mobile']->value, ENT_QUOTES, 'UTF-8', true);?>
]"<?php }?>
			data-mobile="[480,4]">
			<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ptsimages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['image']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['image']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
 $_smarty_tpl->tpl_vars['image']->iteration++;
 $_smarty_tpl->tpl_vars['image']->last = $_smarty_tpl->tpl_vars['image']->iteration === $_smarty_tpl->tpl_vars['image']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['thumbnails']['last'] = $_smarty_tpl->tpl_vars['image']->last;
?>
				<?php $_smarty_tpl->tpl_vars['imageIds'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['product']->value['id_product'])."-".((string)$_smarty_tpl->tpl_vars['image']->value['id_image']), null, 0);?>
				<?php if (!empty($_smarty_tpl->tpl_vars['image']->value['legend'])) {?>
					<?php $_smarty_tpl->tpl_vars['imageTitle'] = new Smarty_variable(htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8', true), null, 0);?>
				<?php } else { ?>
					<?php $_smarty_tpl->tpl_vars['imageTitle'] = new Smarty_variable(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true), null, 0);?>
				<?php }?>
				<div class="item <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['thumbnails']['last']) {?> last<?php }?>">
					<a 
						href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['imageIds']->value,'thickbox_default'), ENT_QUOTES, 'UTF-8', true);?>
"
						data-fancybox-group="other-views-<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
"
						class="pts-fancybox"
						title="<?php echo $_smarty_tpl->tpl_vars['imageTitle']->value;?>
">

						<img class="img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['imageIds']->value,'cart_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['imageTitle']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['imageTitle']->value;?>
" itemprop="image" />
					</a>
				</div>
			<?php } ?>
		</div>
	</div>

<?php }?><?php }} ?>
