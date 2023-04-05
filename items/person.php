<?php
$pageTitle = __('인물');
echo head(array('title' => $pageTitle, 'bodyclass' => 'items browse'));
?>

<div class="bg-neutral-100 pt-3">
	<div class="breadcrumb container bg-white text-xs px-4 py-1 rounded-lg">
		<div class="flex gap-[10px] text-neutral-400">
			<a class="hover:underline" href="<?php echo html_escape(url('/')); ?>">홈</a>
			<i class="xi-angle-right text-neutral-200"></i>
			<a class="hover:underline" href="<?php echo html_escape(url('items/person?search=&advanced[0][joiner]=and&advanced[0][element_id]=74&advanced[0][type]=is+exactly&advanced[0][terms]=정보사전-인물')); ?>">정보</a>
			<i class="xi-angle-right text-neutral-200"></i>
			<span class="text-primary"><?php echo $pageTitle; ?></span>
		</div>
	</div>
	<div class="container pt-14">
		<h1 class="text-3xl font-bold mb-14">인물정보</h1>
		<div class="menu-tab01 menu-tab01-01">
			<ul >
				<li><a href="<?php echo html_escape(url('items/persont1')); ?>">개요</a></li>
				<li class="current"><a href="javascript:void(0);">검색</a></li>
				<li><a href="<?php echo html_escape(url('items/persont3')); ?>">관계</a></li>
			</ul>
		</div>
	</div>
</div>

<!-- 본문영역 -->
<div class="container pt-8 pb-28">
 
	<?php //echo item_search_filters(); ?>
	<div class="mb-8 flex gap-2">
		<!-- 셀렉트 옵션 -->
		<select onchange="if(this.value) location.href=(this.value);">
			<option value="" selected>인물구분</option>
			<option value="<?php echo html_escape(url('items/person?search=&advanced[0][joiner]=and&advanced[0][element_id]=144&advanced[0][type]=contains&advanced[0][terms]=피해자')); ?>">피해자</option>
			<option value="<?php echo html_escape(url('items/person?search=&advanced[0][joiner]=and&advanced[0][element_id]=144&advanced[0][type]=contains&advanced[0][terms]=활동가')); ?>">활동가</option>
			<option value="<?php echo html_escape(url('items/person?search=&advanced[0][joiner]=and&advanced[0][element_id]=144&advanced[0][type]=contains&advanced[0][terms]=연구자')); ?>">연구자</option>
			<option value="<?php echo html_escape(url('items/person?search=&advanced[0][joiner]=and&advanced[0][element_id]=144&advanced[0][type]=contains&advanced[0][terms]=정치인')); ?>">정치인</option>
		</select>
		<select onchange="if(this.value) location.href=(this.value);">
			<option value="" selected>국적구분</option>
			<option value="<?php echo html_escape(url('items/person?search=&advanced[0][joiner]=and&advanced[0][element_id]=143&advanced[0][type]=contains&advanced[0][terms]=한국')); ?>">한국</option>
			<option value="<?php echo html_escape(url('items/person?search=&advanced[0][joiner]=and&advanced[0][element_id]=143&advanced[0][type]=contains&advanced[0][terms]=일본')); ?>">일본</option>
			<option value="<?php echo html_escape(url('items/person?search=&advanced[0][joiner]=and&advanced[0][element_id]=143&advanced[0][type]=contains&advanced[0][terms]=중국')); ?>">중국</option>
			<option value="<?php echo html_escape(url('items/person?search=&advanced[0][joiner]=and&advanced[0][element_id]=143&advanced[0][type]=contains&advanced[0][terms]=미국')); ?>">미국</option>
		</select>
	</div>

	<!-- 검색폼 -->
	<div class="mb-14">
		<form name="search-person" action="<?php echo html_escape(url('items/person')); ?>" method="get" role="search">
			<!--div class="mb-8 flex gap-2" -->
			<div style="display: none;"><?php // 검색폼에서 셀렉트 옵션은 출력 용도는 아니라서 안보이게 처리했습니다. ?>
				<select name="advanced[0][joiner]" id="" title="Search Joiner" class="advanced-search-joiner">
					<option value="and" selected="selected">AND</option>
				</select>
				<select name="advanced[0][element_id]" id="" title="Search Field" class="advanced-search-element">
					<option value="74" selected="selected">목록구분</option>
				</select>
				<select name="advanced[0][type]" id="" title="Search Type" class="advanced-search-type">
					<option value="contains" selected="selected">contains</option>
				</select>
				<input type="text" name="advanced[0][terms]" id="" value="정보사전-인물" size="20" title="Search Terms" class="advanced-search-terms">                
				<button type="button" class="remove_search small red button" style="">Remove field</button>
				<select name="advanced[1][joiner]" id="" title="Search Joiner" class="advanced-search-joiner">
					<option value="and" selected="selected">AND</option>
				</select>
				<select name="advanced[1][element_id]" id="" title="Search Field" class="advanced-search-element">
					<option value="165">인물명칭</option>
				</select>
				<select name="advanced[1][type]" id="" title="Search Type" class="advanced-search-type">
					<option value="contains" selected="selected">contains</option>
				</select>
			</div>

			<div class='search-form flex gap-2 max-w-[800px]'>
				<input id='query' type='text' name="advanced[1][terms]" value='' class='w-full h-[52px] bg-gray-100 border-0' autofocus placeholder="'인물'을 검색해 보세요">
				<button id='submit_search' type='submit' value='Search' onclick="document.forms['search-person'].submit();" class="flex-shrink-0 bg-primary text-white w-[84px] h-[52px] leading-[52px] hover:bg-black cursor-pointer">검색</button>
			</div>

		  </form>
		  <script type="text/javascript" src="/application/views/scripts/javascripts/items-search.js?v=3.0.3" charset="utf-8"></script>
		  <script type="text/javascript">
			  jQuery(document).ready(function () {
				  Omeka.Search.activateSearchButtons();
			  });
		  </script>     
	</div>
	<!-- //검색폼 -->

	<h2>
		검색결과: <?php echo __('%s', $total_results); ?> 건
	</h2> 

	<?php //echo pagination_links(); ?>

	<!-- 리스트 -->
	<ul class="mb-28">

	<?php foreach (loop('items') as $item): ?>
	<?php 
		$제목 = metadata($item, array('Dublin Core', 'Title'), array('delimiter' => '; '));
		$내용 = metadata($item, array('Dublin Core', 'Description'), array('delimiter' => '; ', 'snippet' => 200));	 		
		$목록구분 = metadata($item, array('Item Type Metadata', 'Classification of catalog'), array('delimiter' => '; '));	                   
		//인물 정보
		$인물명칭 = metadata($item, array('Item Type Metadata', 'Person Name'), array('delimiter' => '; '));	  
		$인물한글명칭 = metadata($item, array('Item Type Metadata', 'Person First Name'), array('delimiter' => '; '));	
		$인물외국어명칭 = metadata($item, array('Item Type Metadata', 'Person Foreign Language Name'), array('delimiter' => '; '));	
		$출생일 = metadata($item, array('Item Type Metadata', 'Date of birth'), array('delimiter' => '; '));	
		$사망일 = metadata($item, array('Item Type Metadata', 'Date of death'), array('delimiter' => '; '));	
		$인물구분 = metadata($item, array('Item Type Metadata', 'Classification of person'), array('delimiter' => '; '));     
		$국적 = metadata($item, array('Item Type Metadata', 'Nationality'), array('delimiter' => '; '));       
		//$인물설명 = metadata($item, array('Item Type Metadata', 'Person Description'), array('delimiter' => '; ', 'snippet' => 200));	            
		$인물상세 = metadata($item, array('Item Type Metadata', 'Person Details'), array('delimiter' => '; ', 'snippet' => 200));	
		$정보출처 = metadata($item, array('Item Type Metadata', 'Sources of information'), array('delimiter' => '; '));                     
	?>	
		<li class="p-4 flex items-center border-b border-neutral-200">
			<div class="w-[64%] flex items-center gap-4">
				<?php if (metadata($item, 'has files')) {  ?>		
					<?php echo link_to_item(item_image('square_thumbnail', array('class' => 'w-[5rem] aspect-1 object-cover rounded-full'))); ?>		
				<?php } else {} ?>	
				<div>
					<?php echo link_to_item(metadata('item', array('Dublin Core', 'Title')), array('class'=>'block font-bold text-lg hover:text-primary mb-2')); ?>
					<ul class="text-sm text-neutral-700 flex gap-8">
					<?php if ($인물구분!= null) { ?><li>구분 : <?php echo strip_formatting($인물구분); ?></li><?php } else {} ?>
					<?php if ($국적!= null) { ?><li>국적 : <?php echo strip_formatting($국적); ?></li><?php } else {} ?>
					<?php if ($출생일!= null) { ?><li>출생일 : <?php echo strip_formatting($출생일); ?></li><?php } else {} ?>
					<?php if ($사망일!= null) { ?><li>사망일 : <?php echo strip_formatting($사망일); ?></li><?php } else {} ?>
					<?php if ($인물외국어명칭!= null) { ?><li>외국명 : <?php echo strip_formatting($인물외국어명칭); ?></li><?php } else {} ?>
					</ul>		
				</div>
			</div>
			<p class="w-[36%] line-clamp-4 text-sm text-neutral-700"><?php if ($내용!= null || 인물상세!= null) { ?><?php echo strip_formatting($인물상세); ?><br><?php echo strip_formatting($내용); ?><?php } else {} ?></p>
		</li>
	<?php endforeach; ?>

	</ul>
	<!-- //리스트 -->

	<div id="search-pagination-bottom">
		<?php echo pagination_links(); ?>
	</div>

</div>
<!-- //본문영역 -->







<?php fire_plugin_hook('public_items_browse', array('items' => $items, 'view' => $this)); ?>

<?php echo foot(); ?>
