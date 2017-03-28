<?php /* Smarty version Smarty-3.1.19, created on 2017-03-27 09:49:01
         compiled from "/home/familylove/public_html/modules/ptssliderlayer/views/templates/hook/grouplist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:119393650858d9184d3f48c9-96740343%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3aabc9e4391da96c69fb402cb182340c7341110' => 
    array (
      0 => '/home/familylove/public_html/modules/ptssliderlayer/views/templates/hook/grouplist.tpl',
      1 => 1490619696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119393650858d9184d3f48c9-96740343',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'groups' => 0,
    'group' => 0,
    'curentGroup' => 0,
    'languages' => 0,
    'msecure_key' => 0,
    'arrayParam' => 0,
    'language' => 0,
    'exportLink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d9184d5479e9_28713292',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d9184d5479e9_28713292')) {function content_58d9184d5479e9_28713292($_smarty_tpl) {?>
<fieldset>
    <div id="groupLayer" class="panel col-lg-12">
        <h3><?php echo smartyTranslate(array('s'=>'Group List'),$_smarty_tpl);?>
</h3>
        <div class="alert alert-info"><a href="http://www.prestabrain.com/guides/prestashop16/leo-slider-layer/" target="_blank"><?php echo smartyTranslate(array('s'=>'Click to see configuration guide'),$_smarty_tpl);?>
</a></div>
        <div class="table-responsive clearfix">
            <table class="table">
                <thead>
                    <tr class="nodrag nodrop">
                        <th class="center fixed-width-xs"></th>

                        <th class="">
                            <span class="title_box ">
                                <?php echo smartyTranslate(array('s'=>'Group Name'),$_smarty_tpl);?>

                            </span>
                        </th>
                        <th class="center fixed-width-xs"> <span class="title_box "><?php echo smartyTranslate(array('s'=>'Status'),$_smarty_tpl);?>
</span></th>

                        <th colspan="2">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=ptssliderlayer&addNewGroup=1" class="btn btn-default">
                                <i class="icon-plus"></i> <?php echo smartyTranslate(array('s'=>'Add new Group'),$_smarty_tpl);?>

                            </a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
                        <tr class=" odd">
                            <td class="text-center"><strong>#<?php echo $_smarty_tpl->tpl_vars['group']->value['id_ptssliderlayer_groups'];?>
</strong></td>
                            <td <?php if ($_smarty_tpl->tpl_vars['group']->value['id_ptssliderlayer_groups']!=$_smarty_tpl->tpl_vars['curentGroup']->value) {?>onclick="document.location = '<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=ptssliderlayer&editgroup=1&id_group=<?php echo $_smarty_tpl->tpl_vars['group']->value['id_ptssliderlayer_groups'];?>
'"<?php }?> class="pointer">
                                <?php echo $_smarty_tpl->tpl_vars['group']->value['title'];?>

                            </td>
                            <td>
                                <?php echo $_smarty_tpl->tpl_vars['group']->value['status'];?>
&nbsp;&nbsp;&nbsp;
                            </td>

                            <td>
                                <div class="btn-group-action">
                                    <div class="btn-group pull-right">
                                        <?php if ($_smarty_tpl->tpl_vars['group']->value['id_ptssliderlayer_groups']!=$_smarty_tpl->tpl_vars['curentGroup']->value) {?>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=ptssliderlayer&editgroup=1&id_group=<?php echo $_smarty_tpl->tpl_vars['group']->value['id_ptssliderlayer_groups'];?>
" title="<?php echo smartyTranslate(array('s'=>'Edit Group'),$_smarty_tpl);?>
" class="edit btn btn-default">
                                                <i class="icon-pencil"></i> <?php echo smartyTranslate(array('s'=>'Edit'),$_smarty_tpl);?>

                                            </a>
                                        <?php } else { ?>
                                            <a href="#" title="<?php echo smartyTranslate(array('s'=>'Editting'),$_smarty_tpl);?>
" class="btn " style="color:#BBBBBB">
                                                <?php echo smartyTranslate(array('s'=>'Editting'),$_smarty_tpl);?>

                                            </a>
                                        <?php }?>
                                        <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>&nbsp;
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=ptssliderlayer&deletegroup=1&id_group=<?php echo $_smarty_tpl->tpl_vars['group']->value['id_ptssliderlayer_groups'];?>
" onclick="if (confirm('<?php echo smartyTranslate(array('s'=>'Delete Selected Group?'),$_smarty_tpl);?>
')) {
                                        return true;
                                    } else {
                                        event.stopPropagation();
                                        event.preventDefault();
                                    }
                                    ;" title="<?php echo smartyTranslate(array('s'=>'Delete'),$_smarty_tpl);?>
" class="delete">
                                                    <i class="icon-trash"></i> <?php echo smartyTranslate(array('s'=>'Delete'),$_smarty_tpl);?>

                                                </a>
                                                <?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
                                                    <?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
                                                        <?php $_smarty_tpl->tpl_vars['arrayParam'] = new Smarty_variable(array('secure_key'=>$_smarty_tpl->tpl_vars['msecure_key']->value,'id_group'=>$_smarty_tpl->tpl_vars['group']->value['id_ptssliderlayer_groups']), null, 0);?>
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('ptssliderlayer','preview',$_smarty_tpl->tpl_vars['arrayParam']->value,null,$_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
" class="group-preview">
                                                            <i class="icon-eye-open"></i> <?php echo smartyTranslate(array('s'=>'Preview For'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>

                                                        </a>
                                                    <?php } ?>
                                                <?php } else { ?>
                                                    <a class="" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=ptssliderlayer&exportgroup=1&id_group=<?php echo $_smarty_tpl->tpl_vars['group']->value['id_ptssliderlayer_groups'];?>
">
                                                        <i class="icon-eye-open"></i> <?php echo smartyTranslate(array('s'=>'Preview Group'),$_smarty_tpl);?>

                                                    </a>
                                                <?php }?>
                                                <a class="" target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['exportLink']->value;?>
&id_group=<?php echo $_smarty_tpl->tpl_vars['group']->value['id_ptssliderlayer_groups'];?>
">
                                                    <i class="icon-archive"></i> <?php echo smartyTranslate(array('s'=>'Export Group and sliders'),$_smarty_tpl);?>

                                                </a>
                                                
                                                <a class="" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=ptssliderlayer&editgroup=1&copylang=1&id_group=<?php echo $_smarty_tpl->tpl_vars['group']->value['id_ptssliderlayer_groups'];?>
">
                                                    <i class="icon-edit"></i> <?php echo smartyTranslate(array('s'=>'Copy default language to other'),$_smarty_tpl);?>

                                                </a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>				
                            </td>
                            <td>
                                <a class="btn btn-default color_success" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=ptssliderlayer&showsliders=1&id_group=<?php echo $_smarty_tpl->tpl_vars['group']->value['id_ptssliderlayer_groups'];?>
"><i class="icon-film"></i> <?php echo smartyTranslate(array('s'=>'Manages Sliders'),$_smarty_tpl);?>
</a>
                            </td>
                        </tr> 
                    <?php } ?>
            </table>
            <table class="table">
                <thead>
                    <tr class="nodrag nodrop">
                        <th class="center fixed-width-xs"></th>
                        <th class="">
                            <span class="title_box ">
                                <?php echo smartyTranslate(array('s'=>'Import Group'),$_smarty_tpl);?>

                            </span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class=" odd">
                        <td colspan="2" style="margin-top:10px;padding:10px">
                            <form method="post" enctype="multipart/form-data" action="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=ptssliderlayer&importGroup=1">
                                <div class="row">
                                        <div class="form-group">
                                                
                                                <input type="file" class="hide" name="import_file" id="import_file">
                                                <div class="dummyfile input-group">
                                                        <span class="input-group-addon"><i class="icon-file"></i></span>
                                                        <input type="text" readonly="" name="filename" class="disabled" id="import_file-name">
                                                        <span class="input-group-btn">
                                                                <button class="btn btn-default" name="submitAddAttachments" type="button" id="import_file-selectbutton">
                                                                        <i class="icon-folder-open"></i> <?php echo smartyTranslate(array('s'=>'Choose a file'),$_smarty_tpl);?>

                                                                </button>
                                                        </span>
                                                </div>
                                                <p class="help-block color_danger"><?php echo smartyTranslate(array('s'=>"Please upload *.txt only"),$_smarty_tpl);?>
</p>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4" for="title_group">
                                                    <?php echo smartyTranslate(array('s'=>'Overide group or not:'),$_smarty_tpl);?>

                                            </label>
                                            <div class="input-group col-lg-3">
                                                    <span class="switch prestashop-switch">
                                                                                                                                                            <input type="radio" value="1" id="override_group_on" name="override_group">
                                                            <label for="override_group_on">
                                                                                                                                                                                    <i class="icon-check-sign color_success"></i> <?php echo smartyTranslate(array('s'=>'Yes'),$_smarty_tpl);?>

                                                                                                                                                                    </label>
                                                                                                                                                            <input type="radio" checked="checked" value="0" id="override_group_off" name="override_group">
                                                            <label for="override_group_off">
                                                                                                                                                                                    <i class="icon-ban-circle color_danger"></i> <?php echo smartyTranslate(array('s'=>'No'),$_smarty_tpl);?>

                                                                                                                                                                    </label>
                                                                                                                                                            <a class="slide-button btn btn-default"></a>
                                                    </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
						<div class="col-lg-12">
							<button class="btn btn-default dash_trend_right" name="importGroup" id="import_file_submit_btn" type="submit">
								 <?php echo smartyTranslate(array('s'=>'Import'),$_smarty_tpl);?>

							</button>
													</div>
					</div>                                                                                                                            
                                </div>
                            </form>
                        </td>
                    </tr> 
                </tbody>
            </table>
        </div>
    </div>
</fieldset>
<script type="text/javascript">
    $(document).ready(function() {
        //import export fix
        $('#import_file-selectbutton').click(function(e){
                $('#import_file').trigger('click');
        });
        $('#import_file').change(function(e){
                var val = $(this).val();
                var file = val.split(/[\\/]/);
                $('#import_file-name').val(file[file.length-1]);
        });
        $('#import_file_submit_btn').click(function(e){
            if($("#import_file-name").val().indexOf(".txt") != -1){
                if($("override_group_on").is(":checked")) return confirm("<?php echo smartyTranslate(array('s'=>'Are you sure to override group?'),$_smarty_tpl);?>
");
                return true;
            }else{
                alert("<?php echo smartyTranslate(array('s'=>'Please upload txt file'),$_smarty_tpl);?>
");
                $('#import_file').val("");
                $('#import_file-name').val("");
                return false;
            }
	});		
        
        $(".group-preview").click(function() {
            eleDiv = $(this).parent().parent().parent();
            if ($(eleDiv).hasClass("open"))
                eleDiv.removeClass("open");

            var url = $(this).attr("href") + "&content_only=1";
            $('#dialog').remove();
            $('#content').prepend('<div id="dialog" style="padding: 3px 0px 0px 0px;"><iframe name="iframename2" src="' + url + '" style="padding:0; margin: 0; display: block; width: 100%; height: 100%;" frameborder="no" scrolling="auto"></iframe></div>');
            $('#dialog').dialog({
                title: 'Preview Management',
                close: function(event, ui) {

                },
                bgiframe: true,
                width: 1000,
                height: 500,
                resizable: false,
                draggable:false,
                modal: true
            });
            return false;
        });
    });
</script>
<?php }} ?>
