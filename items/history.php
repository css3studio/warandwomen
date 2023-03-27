<?php
$pageTitle = __('연표');
echo head(array('title' => $pageTitle, 'bodyclass' => 'items browse'));
?>

<div class="breadcrumb container bg-neutral-50 text-xs px-4 py-1 mt-3">
    <div class="flex gap-[10px] text-neutral-400">
        <a class="hover:underline" href="<?php echo html_escape(url('/')); ?>">홈</a>
        <i class="xi-angle-right text-neutral-200"></i>
        <a class="hover:underline" href="<?php echo html_escape(url('items/person?search=&advanced[0][joiner]=and&advanced[0][element_id]=74&advanced[0][type]=is+exactly&advanced[0][terms]=정보사전-인물')); ?>">정보</a>
        <i class="xi-angle-right text-neutral-200"></i>
        <span class="text-primary"><?php echo $pageTitle; ?></span>
    </div>
</div>

<h1><?php echo $pageTitle;?> <?php echo __('(%s total)', $total_results); ?></h1>

<nav class="items-nav navigation secondary-nav">
    <?php //echo public_nav_items(); ?>
</nav>

<?php //echo item_search_filters(); ?>

	<div>
		<form name="search-history" action="<?php echo html_escape(url('items/history')); ?>" method="get" role="search">
		  <div style="display: none;">
			<select name="advanced[0][joiner]" id="" title="Search Joiner" class="advanced-search-joiner">
			  <option value="and" selected="selected">AND</option>
			</select>
			<select name="advanced[0][element_id]" id="" title="Search Field" class="advanced-search-element">
			  <option value="74" selected="selected">목록구분</option>
			</select>
			<select name="advanced[0][type]" id="" title="Search Type" class="advanced-search-type">
			  <option value="contains" selected="selected">contains</option>
			</select>
			<input type="text" name="advanced[0][terms]" id="" value="정보사전-연표" size="20" title="Search Terms" class="advanced-search-terms">                
			<button type="button" class="remove_search small red button" style="">Remove field</button>
			<select name="advanced[1][joiner]" id="" title="Search Joiner" class="advanced-search-joiner">
			  <option value="and" selected="selected">AND</option>
			</select>
			<select name="advanced[1][element_id]" id="" title="Search Field" class="advanced-search-element">
			  <option value="166">연표명칭</option>
			</select>
			<select name="advanced[1][type]" id="" title="Search Type" class="advanced-search-type">
			  <option value="contains" selected="selected">contains</option>
			</select>
		  </div>
		  <input type="text" name="advanced[1][terms]" id="" value="" size="50" title="Search Terms" placeholder="연표명을 입력하세요" class="w-full rounded-lg border border-stroke bg-white py-3 pl-5 pr-12 text-body-color outline-none focus:border-primary focus:bg-white">                  
  
		  <span class="absolute top-4 right-5 -translate-y-1/2" onclick="document.forms['search-history'].submit();" style="cursor:pointer;">
			<svg
				width="20"
				height="20"
				viewBox="0 0 20 20"
				fill="none"
				xmlns="http://www.w3.org/2000/svg"
				>
				<path
				  fill-rule="evenodd"
				  clip-rule="evenodd"
				  d="M9.16667 3.33268C5.94501 3.33268 3.33334 5.94435 3.33334 9.16602C3.33334 12.3877 5.94501 14.9993 9.16667 14.9993C12.3883 14.9993 15 12.3877 15 9.16602C15 5.94435 12.3883 3.33268 9.16667 3.33268ZM1.66667 9.16602C1.66667 5.02388 5.02454 1.66602 9.16667 1.66602C13.3088 1.66602 16.6667 5.02388 16.6667 9.16602C16.6667 13.3082 13.3088 16.666 9.16667 16.666C5.02454 16.666 1.66667 13.3082 1.66667 9.16602Z"
				  fill="#637381"
				  />
				<path
				  fill-rule="evenodd"
				  clip-rule="evenodd"
				  d="M13.2857 13.2851C13.6112 12.9597 14.1388 12.9597 14.4643 13.2851L18.0893 16.9101C18.4147 17.2355 18.4147 17.7632 18.0893 18.0886C17.7638 18.414 17.2362 18.414 16.9108 18.0886L13.2857 14.4636C12.9603 14.1382 12.9603 13.6105 13.2857 13.2851Z"
				  fill="#637381"
				  />
			</svg>
			<input type="submit" class="submit big green button" name="submit_search" id="test" value="">
		  </span>
		  </form>
		  <script type="text/javascript" src="/application/views/scripts/javascripts/items-search.js?v=3.0.3" charset="utf-8"></script>
		  <script type="text/javascript">
			  jQuery(document).ready(function () {
				  Omeka.Search.activateSearchButtons();
			  });
		  </script>     
	</div>

<?php echo pagination_links(); ?>

<?php if ($total_results > 0): ?>
<?php
$sortLinks[__('Title')] = 'Dublin Core,Title';
$sortLinks[__('Creator')] = 'Dublin Core,Creator';
$sortLinks[__('Date Added')] = 'added';
?>
<div id="sort-links">
    <span class="sort-label"><?php echo __('Sort by: '); ?></span><?php echo browse_sort_links($sortLinks); ?>
</div>
<?php endif; ?>



<?php foreach (loop('items') as $item): ?>
<?php 
	//기본정보 메타 출력용
	$제목 = metadata($item, array('Dublin Core', 'Title'), array('delimiter' => '; '));
	$목록구분 = metadata($item, array('Item Type Metadata', 'Classification of catalog'), array('delimiter' => '; '));	                   
	//연표 정보
	$연표명칭 = metadata($item, array('Item Type Metadata', 'Chronological Name'), array('delimiter' => '; '));	
	$연표연도 = metadata($item, array('Item Type Metadata', 'Chronological year'), array('delimiter' => '; '));	
	$연표시작일자 = metadata($item, array('Item Type Metadata', 'Chronological start date'), array('delimiter' => '; '));	
	$연표종료일자 = metadata($item, array('Item Type Metadata', 'Chronological end date'), array('delimiter' => '; '));	
  	$연표구분 = metadata($item, array('Item Type Metadata', 'Chronological end date'), array('delimiter' => '; '));	

	$연표설명 = metadata($item, array('Item Type Metadata', 'Chronology Description'), array('delimiter' => '; ', 'snippet' => 50));	            
	$정보출처 = metadata($item, array('Item Type Metadata', 'Classification of Chronology'), array('delimiter' => '; '));               
?>	
	<div class="item hentry">
		<?php if (metadata($item, 'has files')) {  ?>		
			<?php echo link_to_item(item_image('square_thumbnail', array('class' => 'w-full'))); ?>		
		<?php } else { ?>	
			<?php echo link_to_item('<img src="/etc/images/person/no-image-global-square-v2.jpg" class="w-full">'); ?>		
		<?php }	?> 

		<?php echo link_to_item(metadata('item', array('Dublin Core', 'Title')), array('class'=>'permalink')); ?>
        <p><?php if ($연표설명!= null) { ?><?php echo strip_formatting($연표설명); ?><?php } else {} ?></p>
        <p><?php if ($연표시작일자!= null) { ?><?php echo strip_formatting($연표시작일자); ?><?php } else {} ?></p>
		<p><?php if ($연표종료일자!= null) { ?><?php echo strip_formatting($연표종료일자); ?><?php } else {} ?></p>
		<?php //fire_plugin_hook('public_items_browse_each', array('view' => $this, 'item' => $item)); ?>
	</div><!-- end class="item hentry" -->
<?php endforeach; ?>

<?php echo pagination_links(); ?>



<?php fire_plugin_hook('public_items_browse', array('items' => $items, 'view' => $this)); ?>

<?php echo foot(); ?>
