<?php /* Smarty version Smarty-3.1.19, created on 2017-03-27 20:03:17
         compiled from "/home/familylove/public_html/modules/ptsthemepanel/views/templates/admin/injecthead.tpl" */ ?>
<?php /*%%SmartyHeaderCode:105010260858d90d95d57179-56860057%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '652f29eefbb4994ab171ba5057a0a0667032e4fc' => 
    array (
      0 => '/home/familylove/public_html/modules/ptsthemepanel/views/templates/admin/injecthead.tpl',
      1 => 1490619696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105010260858d90d95d57179-56860057',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d90d95dd5806_81298973',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d90d95dd5806_81298973')) {function content_58d90d95dd5806_81298973($_smarty_tpl) {?>
<div class="hide"><div id="ptswarninginstall">
	<div class="bootstrap" style="width:550px; margin:20px;">  
	<div class="alert alert-danger" >

		<h4><?php echo smartyTranslate(array('s'=>'You have been switched to new theme for your store.','mod'=>'ptsthemepanel'),$_smarty_tpl);?>
</h4>
		<p><?php echo smartyTranslate(array('s'=>'May be you need install default data samples and data configurations for modules to take look same as our demo','mod'=>'ptsthemepanel'),$_smarty_tpl);?>
</p>
	</div>
	 <p>
	 	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8', true);?>
#sitetools" class="btn btn-lg btn-danger"><?php echo smartyTranslate(array('s'=>'Install Sample Now','mod'=>'ptsthemepanel'),$_smarty_tpl);?>
<br><em style="font-size:10px"><?php echo smartyTranslate(array('s'=>'Automatic Install Sample in Theme Control Panel','mod'=>'ptsthemepanel'),$_smarty_tpl);?>
</em></a> 
	 	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="btn btn-lg btn-info"><?php echo smartyTranslate(array('s'=>'UserGuide','mod'=>'ptsthemepanel'),$_smarty_tpl);?>
<br><em style="font-size:10px"><?php echo smartyTranslate(array('s'=>'Manually Installing Sample Via Reading Guides','mod'=>'ptsthemepanel'),$_smarty_tpl);?>
 </em></a> 
	 </p>
	 <p>
	 	<em>!!!<?php echo smartyTranslate(array('s'=>'Close this popup it will be not showed in next time','mod'=>'ptsthemepanel'),$_smarty_tpl);?>
</em>
	 </p>
</div></div></div>
<script type="text/javascript">
		
		jQuery.fancybox( {
			onStart:function () { 
					delay(9000);
			},
			padding: "0px",
			autoScale: true,
			transitionIn: "fade",

			transitionOut: "fade",
			showCloseButton: false,
			type: "inline",
			href: "#ptswarninginstall",
			afterClose:function(){	
				$.ajax({
					url: "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8', true);?>
&closePopup=1"
				}).done(function() {
				 
				});	 	
			} 
		});
		jQuery("#ptswarninginstall").trigger("click"); 


</script><?php }} ?>
