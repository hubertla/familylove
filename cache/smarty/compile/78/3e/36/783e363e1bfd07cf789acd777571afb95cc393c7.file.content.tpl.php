<?php /* Smarty version Smarty-3.1.19, created on 2017-03-24 09:55:59
         compiled from "/home/familylove/public_html/adminFL/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:133599498758d48abf27c9d9-32245048%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '783e363e1bfd07cf789acd777571afb95cc393c7' => 
    array (
      0 => '/home/familylove/public_html/adminFL/themes/default/template/content.tpl',
      1 => 1482131820,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '133599498758d48abf27c9d9-32245048',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d48abf28aa05_51153117',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d48abf28aa05_51153117')) {function content_58d48abf28aa05_51153117($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
