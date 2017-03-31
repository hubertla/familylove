<?php /* Smarty version Smarty-3.1.19, created on 2017-03-29 14:06:32
         compiled from "/home/familylove/public_html/adminFL/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4512964558db5cf8e21f65-02486671%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '4512964558db5cf8e21f65-02486671',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58db5cf8e2ef73_86180294',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58db5cf8e2ef73_86180294')) {function content_58db5cf8e2ef73_86180294($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
