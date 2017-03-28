<?php /* Smarty version Smarty-3.1.19, created on 2017-03-27 09:05:35
         compiled from "/home/familylove/public_html/themes/pf_basic/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:133890384058d90e1f44e822-06923862%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb44a78a4c8116ebc244f0b08a16a3bbbbd1e603' => 
    array (
      0 => '/home/familylove/public_html/themes/pf_basic/index.tpl',
      1 => 1490619696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '133890384058d90e1f44e822-06923862',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PTS_PAGEBUILDER_ACTIVED' => 0,
    'PTS_PAGEBUILDER_FULL' => 0,
    'HOOK_HOME_TAB_CONTENT' => 0,
    'HOOK_HOME_TAB' => 0,
    'HOOK_HOME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d90e1f48c0a3_20852526',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d90e1f48c0a3_20852526')) {function content_58d90e1f48c0a3_20852526($_smarty_tpl) {?>
<?php if (Configuration::get('PTS_CP_ENABLE_PBUILDER')&&isset($_smarty_tpl->tpl_vars['PTS_PAGEBUILDER_ACTIVED']->value)&&$_smarty_tpl->tpl_vars['PTS_PAGEBUILDER_ACTIVED']->value&&$_smarty_tpl->tpl_vars['PTS_PAGEBUILDER_FULL']->value) {?>
<?php } else { ?>
	<?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value)) {?>
	    <?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value)) {?>
		<div class="block producttabs">
			<div class="tab-nav">
				<ul id="home-page-tabs" class="nav nav-theme sclearfix">
					<?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value;?>

				</ul>
			</div>
		</div>		
		<?php }?>
		<div class="tab-content">
			<?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value;?>

		</div>
	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME']->value)) {?>
		<div class="clearfix">
			<?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

		</div>
	<?php }?>
<?php }?><?php }} ?>
