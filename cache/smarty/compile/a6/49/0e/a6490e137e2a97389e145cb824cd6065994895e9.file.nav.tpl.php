<?php /* Smarty version Smarty-3.1.19, created on 2017-03-30 07:53:41
         compiled from "/home/familylove/public_html/themes/leo_tshirt/modules/blockuserinfo/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:100854667358dc57159d29b7-77799702%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6490e137e2a97389e145cb824cd6065994895e9' => 
    array (
      0 => '/home/familylove/public_html/themes/leo_tshirt/modules/blockuserinfo/nav.tpl',
      1 => 1490620337,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100854667358dc57159d29b7-77799702',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'is_logged' => 0,
    'cookie' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58dc5715aa31e3_41163359',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58dc5715aa31e3_41163359')) {function content_58dc5715aa31e3_41163359($_smarty_tpl) {?><script type="text/javascript">
/* Blockusreinfo */
	
$(document).ready( function(){
	if( $(window).width() < 991 ){
			 $(".header_user_info").addClass('btn-group');
			 $(".header_user_info .links").addClass('quick-setting dropdown-menu');
		}
		else{
			$(".header_user_info").removeClass('btn-group');
			 $(".header_user_info .links").removeClass('quick-setting dropdown-menu');
		}
	$(window).resize(function() {
		if( $(window).width() < 991 ){
			 $(".header_user_info").addClass('btn-group');
			 $(".header_user_info .links").addClass('quick-setting dropdown-menu');
		}
		else{
			$(".header_user_info").removeClass('btn-group');
			 $(".header_user_info .links").removeClass('quick-setting dropdown-menu');
		}
	});
});
</script>
<!-- Block user information module NAV  -->
<div class="header_user_info pull-right">
	<div data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-cog"></i><span><?php echo smartyTranslate(array('s'=>'Top links','mod'=>'blockuserinfo'),$_smarty_tpl);?>
 </span></div>	
		<ul class="links">
		<li class="first">
			<a id="wishlist-total" href="<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist',array(),true));?>
" title="<?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
			<i class="fa fa-heart"></i><?php echo smartyTranslate(array('s'=>'Wish List','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a>
		</li>
		
		<li>
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('products-comparison'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Compare','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" rel="nofollow">
				<i class="fa fa-compress"></i><?php echo smartyTranslate(array('s'=>'Compare','mod'=>'blockuserinfo'),$_smarty_tpl);?>

			</a>
		</li>
		<?php if ($_smarty_tpl->tpl_vars['is_logged']->value) {?>
			<li><a class="logout" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true,null,"mylogout"), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Log me out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
				<i class="fa fa-unlock-alt"></i><?php echo smartyTranslate(array('s'=>'Sign out','mod'=>'blockuserinfo'),$_smarty_tpl);?>

			</a></li>
		<?php } else { ?>
			<li><a class="login" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Login to your customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
				<i class="fa fa-unlock-alt"></i><?php echo smartyTranslate(array('s'=>'Sign in','mod'=>'blockuserinfo'),$_smarty_tpl);?>

			</a></li>
		<?php }?>

		<li>
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
"><i class="fa fa-user"></i><?php echo smartyTranslate(array('s'=>'My Account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a>
		</li>
		<li class="last">
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Checkout','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" class="last"><i class="fa fa-share"></i><?php echo smartyTranslate(array('s'=>'Checkout','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a></li>
		

		<?php if ($_smarty_tpl->tpl_vars['is_logged']->value) {?>
			<li>
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View my customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" class="account" rel="nofollow">
					<i class="fa fa-user"></i>
					<span><?php echo smartyTranslate(array('s'=>'Hello','mod'=>'blockuserinfo'),$_smarty_tpl);?>
, <?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_lastname;?>
</span></a>
			</li>
		<?php }?>
		
		</ul>
	
</div>	<?php }} ?>
