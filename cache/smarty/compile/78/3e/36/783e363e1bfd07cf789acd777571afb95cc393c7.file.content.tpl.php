<?php /* Smarty version Smarty-3.1.19, created on 2017-03-27 20:02:31
         compiled from "/home/familylove/public_html/adminFL/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:44033672158d90d67bda459-04352684%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '783e363e1bfd07cf789acd777571afb95cc393c7' => 
    array (
      0 => '/home/familylove/public_html/adminFL/themes/default/template/content.tpl',
      1 => 1490614765,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '44033672158d90d67bda459-04352684',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d90d67be8aa6_61074882',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d90d67be8aa6_61074882')) {function content_58d90d67be8aa6_61074882($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
