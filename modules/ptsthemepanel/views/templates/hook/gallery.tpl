{*
* Pts Prestashop Theme Framework for Prestashop 1.6.x
*
* @package   ptsthemepanel
* @version   1.6
* @author    http://www.prestabrain.com
* @copyright Copyright (C) October 2013 prestabrain.com <@emai:prestabrain@gmail.com>
*               <info@prestabrain.com>.All rights reserved.
* @license   GNU General Public License version 2
*}
{if $ptsimages}
	<div class="thumbs-wrap">
		<a id="view_scroll_left{$ptsgkey|escape:'html':'UTF-8'}" class="view_scroll_left {if isset($ptsimages) && count($ptsimages) < 5}hidden{/if}" href="javascript:{}" title="Other views" rel="11"><i class="icon-chevron-up"></i></a>
		<div id="thumbs_list{$ptsgkey|escape:'html':'UTF-8'}" class="thumbs_list">
			<ul id="thumbs_list_frame{$ptsgkey|escape:'html':'UTF-8'}" class="thumbs_list_frame">
				{foreach from=$ptsimages item=image name=thumbnails}
					{assign var=imageIds value="`$product.id_product`-`$image.id_image`"}
					{if !empty($image.legend)}
						{assign var=imageTitle value=$image.legend|escape:'html':'UTF-8'}
					{else}
						{assign var=imageTitle value=$product.name|escape:'html':'UTF-8'}
					{/if}
					<li id="thumbnail{$ptsgkey|escape:'html':'UTF-8'}_{$image.id_image|escape:'html':'UTF-8'}"{if $smarty.foreach.thumbnails.last} class="last"{/if}>
						<a 
							href="{$link->getImageLink($product.link_rewrite, $imageIds, 'thickbox_default')|escape:'html':'UTF-8'}"
							data-fancybox-group="other-views-{$product.id_product|escape:'html':'UTF-8'}"
							class="pts-fancybox"
							title="{$imageTitle|escape:'html':'UTF-8'}">

							<img class="img-responsive" src="{$link->getImageLink($product.link_rewrite, $imageIds, 'cart_default')|escape:'html':'UTF-8'}" alt="{$imageTitle|escape:'html':'UTF-8'}" title="{$imageTitle|escape:'html':'UTF-8'}" itemprop="image" />
						</a>
					</li>
				{/foreach}
			</ul>
		</div>
		<a id="view_scroll_right{$ptsgkey|escape:'html':'UTF-8'}" class="view_scroll_right {if isset($ptsimages) && count($ptsimages) < 5}hidden{/if}" href="javascript:{}" title="Other views" rel="11"><i class="icon-chevron-down"></i></a>
	</div>
	<script type="text/javascript">
		$('#thumbs_list{$ptsgkey|escape:'html':'UTF-8'}').serialScroll({
			items:'li:visible',
			prev:'#view_scroll_left{$ptsgkey|escape:'html':'UTF-8'}',
			next:'#view_scroll_right{$ptsgkey|escape:'html':'UTF-8'}',
			axis:'y',
			offset:0,
			start:0,
			stop:true,
			onBefore:serialScrollFixLock,
			duration:700,
			step: 3,
			lazy: true,
			lock: false,
			force:false,
			cycle:false
		});
		$('#thumbs_list{$ptsgkey|escape:'html':'UTF-8'}').trigger('goto', 1);// SerialScroll Bug on goto 0 ?
		$('#thumbs_list{$ptsgkey|escape:'html':'UTF-8'}').trigger('goto', 0);

		function serialScrollFixLock(event, targeted, scrolled, items, position)
		{
			serialScrollNbImages = $('#thumbs_list{$ptsgkey|escape:'html':'UTF-8'} li:visible').length;
			serialScrollNbImagesDisplayed = 3;

			var leftArrow = position == 0 ? true : false;
			var rightArrow = position + serialScrollNbImagesDisplayed >= serialScrollNbImages ? true : false;

			$('#view_scroll_left{$ptsgkey|escape:'html':'UTF-8'}').css('cursor', leftArrow ? 'default' : 'pointer').css('display', leftArrow ? 'block' : 'block').fadeTo(0, leftArrow ? 1 : 1);
			$('#view_scroll_right{$ptsgkey|escape:'html':'UTF-8'}').css('cursor', rightArrow ? 'default' : 'pointer').fadeTo(0, rightArrow ? 1 : 1).css('display', rightArrow ? 'block' : 'block');
			return true;
		}

	</script>
{/if}