<?php /* Smarty version Smarty-3.1.19, created on 2017-03-27 09:05:35
         compiled from "/home/familylove/public_html/themes/pf_basic/sub/headers/default/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:98735742358d90e1f738612-27621236%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb594b8e9daaaf43adc35a45f70711224bb35b13' => 
    array (
      0 => '/home/familylove/public_html/themes/pf_basic/sub/headers/default/default.tpl',
      1 => 1490619696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98735742358d90e1f738612-27621236',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_dir' => 0,
    'shop_name' => 0,
    'logo_url' => 0,
    'HOOK_TOP' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d90e1f77fb49_06285521',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d90e1f77fb49_06285521')) {function content_58d90e1f77fb49_06285521($_smarty_tpl) {?>

	<header id="header" class="header-default">
		<div id="topbar" class="topbar">
			<div class="container">
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayNav"),$_smarty_tpl);?>

			</div>
		</div>	
		<div  id="header-main" class="header">
			<div class="container">
				<div class="row">
					<div id="header_logo" class="col-xs-12 col-sm-12 col-md-3 col-lg-3 inner">
						<div id="logo-theme" class="<?php if (Configuration::get('PTS_CP_LOGOTYPE')=='logo-theme') {?>logo-theme<?php } else { ?>logo-store<?php }?>">
							<a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>
">
								<img class="logo img-responsive <?php if (Configuration::get('PTS_CP_LOGOTYPE')=='logo-theme') {?>hidden<?php }?>" src="<?php echo $_smarty_tpl->tpl_vars['logo_url']->value;?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
							</a>
						</div>
					</div>
					<?php if (class_exists('PtsthemePanel')) {?>
						<div class="col-xs-12 col-sm-8 col-md-6 col-lg-6">
							<?php echo PtsthemePanel::smartyplugin(array('module'=>'ptsblocksearch','hook'=>'displayTop'),$_smarty_tpl);?>

						</div>						   
					<?php }?>
					<?php if (isset($_smarty_tpl->tpl_vars['HOOK_TOP']->value)) {?>
						<div class="header-right col-xs-12 col-sm-4 col-md-3 col-lg-3">
							<?php echo $_smarty_tpl->tpl_vars['HOOK_TOP']->value;?>

						</div>
					<?php }?>							
				</div>
			</div>	
		</div>
	    <div  id="pts-mainnav">
	        <div class="container">
	        	<div class="wrap">
		        	<div class="inner">
		        		<div class="main-menu">
					        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayMainmenu"),$_smarty_tpl);?>

					    </div>
					</div>
				</div>
	        </div>
	    </div>
	</header><?php }} ?>
