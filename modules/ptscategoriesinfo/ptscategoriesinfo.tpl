{*
* 2007-2014 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2014 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
{if $infos|@count > 0}
<!-- MODULE Block reinsurance -->
<div id="ptscategoriesinfo_block" class="clearfix">
    <ul class="width{$nbblocks}">	
        {foreach from=$infos item=info}
            <li{if $info.addition_class} class="{$info.addition_class}"{/if}>
                {if $show_banner}
                    <img src="{$link->getMediaLink("`$module_dir`img/`$info.file_name|escape:'htmlall':'UTF-8'`")}" alt="{$info.text|escape:html:'UTF-8'}" /> 
                {/if}
                <h3>{$info.title|escape:html:'UTF-8'}</h3>

                {if $nb_products}
                	<span>{l s='Products: ' mod='ptscategoriesinfo'}{$info.nb_products}</span>
                {/if}
                {if $show_des}
                    <span>{$info.text}</span>
                {/if}
                {if $show_subcategory && $info.subcategories}
                    <ul>
                    {foreach from=$info.subcategories item=subcategory name=subcategory_name}
                        <li><a href="{$link->getCategoryLink({$subcategory.id_category})}" title="{$subcategory.name|escape:'htmlall':'UTF-8'}">{$subcategory.name|escape:'htmlall':'UTF-8'}</a></li>
                    {/foreach}
                    </ul>
                {/if}
            </li>                        
        {/foreach}
    </ul>
</div>
<!-- /MODULE Block reinsurance -->
{/if}