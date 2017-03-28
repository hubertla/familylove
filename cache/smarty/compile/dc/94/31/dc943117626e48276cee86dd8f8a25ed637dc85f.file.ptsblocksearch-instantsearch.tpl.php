<?php /* Smarty version Smarty-3.1.19, created on 2017-03-27 09:05:35
         compiled from "/home/familylove/public_html/themes/pf_basic/modules/ptsblocksearch/views/templates/hook/ptsblocksearch-instantsearch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8804912958d90e1fa9a6f9-78223978%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc943117626e48276cee86dd8f8a25ed637dc85f' => 
    array (
      0 => '/home/familylove/public_html/themes/pf_basic/modules/ptsblocksearch/views/templates/hook/ptsblocksearch-instantsearch.tpl',
      1 => 1490619696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8804912958d90e1fa9a6f9-78223978',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'instantsearch' => 0,
    'ptsblocksearch_type' => 0,
    'search_ssl' => 0,
    'link' => 0,
    'cookie' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d90e1fb2cdc7_17716388',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d90e1fb2cdc7_17716388')) {function content_58d90e1fb2cdc7_17716388($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['instantsearch']->value) {?>
	<script type="text/javascript">
	// <![CDATA[
		function tryToCloseInstantSearch() {
			if ($('#old_center_column').length > 0)
			{
				$('#center_column').remove();
				$('#old_center_column').attr('id', 'center_column');
				$('#center_column').show();
				return false;
			}
		}
		
		instantSearchQueries = new Array();
		function stopInstantSearchQueries(){
			for(i=0;i<instantSearchQueries.length;i++) {
				instantSearchQueries[i].abort();
			}
			instantSearchQueries = new Array();
		}
		
		$("#pts_search_query_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['ptsblocksearch_type']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
").keyup(function(){
			if($(this).val().length > 0){
				stopInstantSearchQueries();
				instantSearchQuery = $.ajax({
					url: '<?php if ($_smarty_tpl->tpl_vars['search_ssl']->value==1) {?><?php echo mb_convert_encoding(htmlspecialchars(addslashes($_smarty_tpl->tpl_vars['link']->value->getPageLink('search',true)), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php } else { ?><?php echo mb_convert_encoding(htmlspecialchars(addslashes($_smarty_tpl->tpl_vars['link']->value->getPageLink('search')), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?>',
					data: {
						instantSearch: 1,
						id_lang: <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cookie']->value->id_lang, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
,
						q: $(this).val(),
						category_filter: $("#category_filter").val()
					},
					dataType: 'html',
					type: 'POST',
					success: function(data){
						if($("#pts_search_query_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['ptsblocksearch_type']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
").val().length > 0)
						{
							tryToCloseInstantSearch();
							$('#center_column').attr('id', 'old_center_column');
							$('#old_center_column').after('<div id="center_column" class="' + $('#old_center_column').attr('class') + '">'+data+'</div>');
							$('#old_center_column').hide();
							// Button override
							ajaxCart.overrideButtonsInThePage();
							$("#instant_search_results a.close").click(function() {
								$("#pts_search_query_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['ptsblocksearch_type']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
").val('');
								return tryToCloseInstantSearch();
							});
							return false;
						}
						else
							tryToCloseInstantSearch();
					}
				});
				instantSearchQueries.push(instantSearchQuery);
			}
			else
				tryToCloseInstantSearch();
		});
	// ]]>
	</script>
<?php }?>


    <script type="text/javascript">
    // <![CDATA[
            $('document').ready( function() {
                    var ac = $("#pts_search_query_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['ptsblocksearch_type']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
")
                            .autocomplete(
                                    '<?php if ($_smarty_tpl->tpl_vars['search_ssl']->value==1) {?><?php echo mb_convert_encoding(htmlspecialchars(addslashes($_smarty_tpl->tpl_vars['link']->value->getPageLink('search',true)), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php } else { ?><?php echo mb_convert_encoding(htmlspecialchars(addslashes($_smarty_tpl->tpl_vars['link']->value->getPageLink('search')), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?>', {
                                            minChars: 3,
                                            max: 10,
                                            width: 350,
                                            selectFirst: false,
                                            scroll: false,
                                            dataType: "json",
                                            formatItem: function(data, i, max, value, term) {
                                                    return value;
                                            },
                                            parse: function(data) {
                                                    var mytab = new Array();
                                                    for (var i = 0; i < data.length; i++)
                                                        mytab[mytab.length] = { 
                                                            data: data[i], 
                                                            value: '<img class="pull-left" src="'+ data[i].image+'" style="margin-right:10px;"><div class="name">'+ data[i].pname +'</div><div class="price">Price '+ data[i].dprice +'</div> '
                                                        };
                                                    return mytab;
                                            },
                                            extraParams: {
                                                ajaxSearch: 1,
                                                id_lang: <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cookie']->value->id_lang, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
,
                                                category_filter: $("#category_filter").val()
                                            }
                                    }
                            )
                            .result(function(event, data, formatted) {
                                    $('#pts_search_query_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['ptsblocksearch_type']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
').val(data.pname);
                                    document.location.href = data.product_link;
                            });
                            
                            $("#category_filter").change(function() {
                                ac.setOptions({
                                    extraParams: {
                                        ajaxSearch: 1,
                                        id_lang: <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cookie']->value->id_lang, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
,
                                        category_filter: $("#category_filter").val()
                                    }
                                });
                            });
                              
            });
    // ]]>
    </script><?php }} ?>
