<?php /* Smarty version Smarty-3.1.19, created on 2017-03-27 09:05:35
         compiled from "/home/familylove/public_html/themes/pf_basic/modules/psmegamenu/views/templates/hook/megamenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:117054542158d90e1fdd1a59-57862911%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7d5ce2a01f2e03d54397695a17c1b65923ef173' => 
    array (
      0 => '/home/familylove/public_html/themes/pf_basic/modules/psmegamenu/views/templates/hook/megamenu.tpl',
      1 => 1490619696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117054542158d90e1fdd1a59-57862911',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'psmegamenu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d90e1fddd4d6_98602605',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d90e1fddd4d6_98602605')) {function content_58d90e1fddd4d6_98602605($_smarty_tpl) {?>
<nav id="cavas_menu" class="sf-contener pts-megamenu">
    <div class="navbar" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only"><?php echo smartyTranslate(array('s'=>'Toggle navigation','mod'=>'psmegamenu'),$_smarty_tpl);?>
</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div id="pts-top-menu" class="collapse navbar-collapse navbar-ex1-collapse ">
            <?php echo $_smarty_tpl->tpl_vars['psmegamenu']->value;?>

        </div>
    </div>  
</nav>
<script type="text/javascript">
    $('#pts-top-menu a.dropdown-toggle').click(function(){
        var redirect_url = $(this).attr('href');
        window.location = redirect_url;
    });
</script><?php }} ?>
