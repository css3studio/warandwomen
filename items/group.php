<?php
$pageTitle = __('조직');
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
		<h1 class="text-3xl font-bold mb-14">조직정보</h1>
		<div class="menu-tab01 menu-tab01-01">
			<ul >
				<li><a href="<?php echo html_escape(url('items/groupt1')); ?>">개요</a></li>
				<li class="current"><a href="javascript:void(0);">검색</a></li>
				<li><a href="<?php echo html_escape(url('items/groupt3')); ?>">관계</a></li>
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
			<option value="" selected>조직구분</option>
			<option value="<?php echo html_escape(url('items/group?search=&advanced[0][joiner]=and&advanced[0][element_id]=152&advanced[0][type]=contains&advanced[0][terms]=시민단체')); ?>">시민단체</option>
			<option value="<?php echo html_escape(url('items/group?search=&advanced[0][joiner]=and&advanced[0][element_id]=152&advanced[0][type]=contains&advanced[0][terms]=종교단체')); ?>">종교단체</option>
			<option value="<?php echo html_escape(url('items/group?search=&advanced[0][joiner]=and&advanced[0][element_id]=152&advanced[0][type]=contains&advanced[0][terms]=예술단체')); ?>">예술단체</option>
			<option value="<?php echo html_escape(url('items/group?search=&advanced[0][joiner]=and&advanced[0][element_id]=152&advanced[0][type]=contains&advanced[0][terms]=국제기구')); ?>">국제기구</option>
			<option value="<?php echo html_escape(url('items/group?search=&advanced[0][joiner]=and&advanced[0][element_id]=152&advanced[0][type]=contains&advanced[0][terms]=연구기관')); ?>">연구기관</option>
			<option value="<?php echo html_escape(url('items/group?search=&advanced[0][joiner]=and&advanced[0][element_id]=152&advanced[0][type]=contains&advanced[0][terms]=사기업')); ?>">사기업</option>
			<option value="<?php echo html_escape(url('items/group?search=&advanced[0][joiner]=and&advanced[0][element_id]=152&advanced[0][type]=contains&advanced[0][terms]=정당')); ?>">정당</option>
		</select>
		<select onchange="if(this.value) location.href=(this.value);">
			<option value="" selected>조직유형</option>
			<option value="<?php echo html_escape(url('items/group?search=&advanced[0][joiner]=and&advanced[0][element_id]=153&advanced[0][type]=contains&advanced[0][terms]=연대체')); ?>">연대체</option>
			<option value="<?php echo html_escape(url('items/group?search=&advanced[0][joiner]=and&advanced[0][element_id]=153&advanced[0][type]=contains&advanced[0][terms]=상설체')); ?>">상설체</option>
			<option value="<?php echo html_escape(url('items/group?search=&advanced[0][joiner]=and&advanced[0][element_id]=153&advanced[0][type]=contains&advanced[0][terms]=임시체')); ?>">임시체</option>
		</select>
		<select onchange="if(this.value) location.href=(this.value);">
			<option value="" selected>활동국가</option>
			<option value="<?php echo html_escape(url('items/group?search=&advanced[0][joiner]=and&advanced[0][element_id]=151&advanced[0][type]=contains&advanced[0][terms]=한국')); ?>">한국</option>
			<option value="<?php echo html_escape(url('items/group?search=&advanced[0][joiner]=and&advanced[0][element_id]=151&advanced[0][type]=contains&advanced[0][terms]=일본')); ?>">일본</option>
			<option value="<?php echo html_escape(url('items/group?search=&advanced[0][joiner]=and&advanced[0][element_id]=151&advanced[0][type]=contains&advanced[0][terms]=중국')); ?>">중국</option>
			<option value="<?php echo html_escape(url('items/group?search=&advanced[0][joiner]=and&advanced[0][element_id]=151&advanced[0][type]=contains&advanced[0][terms]=미국')); ?>">미국</option>
			<option value="<?php echo html_escape(url('items/group?search=&advanced[0][joiner]=and&advanced[0][element_id]=151&advanced[0][type]=contains&advanced[0][terms]=대만')); ?>">대만</option>
			<option value="<?php echo html_escape(url('items/group?search=&advanced[0][joiner]=and&advanced[0][element_id]=151&advanced[0][type]=contains&advanced[0][terms]=인도네시아')); ?>">인도네시아</option>
			<option value="<?php echo html_escape(url('items/group?search=&advanced[0][joiner]=and&advanced[0][element_id]=151&advanced[0][type]=contains&advanced[0][terms]=말레이시아')); ?>">말레이시아</option>
			<option value="<?php echo html_escape(url('items/group?search=&advanced[0][joiner]=and&advanced[0][element_id]=151&advanced[0][type]=contains&advanced[0][terms]=필리핀')); ?>">필리핀</option>
			<option value="<?php echo html_escape(url('items/group?search=&advanced[0][joiner]=and&advanced[0][element_id]=151&advanced[0][type]=contains&advanced[0][terms]=홍콩')); ?>">홍콩</option>
			<option value="<?php echo html_escape(url('items/group?search=&advanced[0][joiner]=and&advanced[0][element_id]=151&advanced[0][type]=contains&advanced[0][terms]=캐나다')); ?>">캐나다</option>
			<option value="<?php echo html_escape(url('items/group?search=&advanced[0][joiner]=and&advanced[0][element_id]=151&advanced[0][type]=contains&advanced[0][terms]=호주')); ?>">호주</option>
			<option value="<?php echo html_escape(url('items/group?search=&advanced[0][joiner]=and&advanced[0][element_id]=151&advanced[0][type]=contains&advanced[0][terms]=독일')); ?>">독일</option>
			<option value="<?php echo html_escape(url('items/group?search=&advanced[0][joiner]=and&advanced[0][element_id]=151&advanced[0][type]=contains&advanced[0][terms]=프랑스')); ?>">프랑스</option>
			<option value="<?php echo html_escape(url('items/group?search=&advanced[0][joiner]=and&advanced[0][element_id]=151&advanced[0][type]=contains&advanced[0][terms]=이탈리아')); ?>">이탈리아</option>
			<option value="<?php echo html_escape(url('items/group?search=&advanced[0][joiner]=and&advanced[0][element_id]=151&advanced[0][type]=contains&advanced[0][terms]=벨기에')); ?>">벨기에</option>
			<option value="<?php echo html_escape(url('items/group?search=&advanced[0][joiner]=and&advanced[0][element_id]=151&advanced[0][type]=contains&advanced[0][terms]=네덜란드')); ?>">네덜란드</option>
			<option value="<?php echo html_escape(url('items/group?search=&advanced[0][joiner]=and&advanced[0][element_id]=151&advanced[0][type]=contains&advanced[0][terms]=스위스')); ?>">스위스</option>
			<option value="<?php echo html_escape(url('items/group?search=&advanced[0][joiner]=and&advanced[0][element_id]=151&advanced[0][type]=contains&advanced[0][terms]=노르웨이')); ?>">노르웨이</option>
			<option value="<?php echo html_escape(url('items/group?search=&advanced[0][joiner]=and&advanced[0][element_id]=151&advanced[0][type]=contains&advanced[0][terms]=동티모르')); ?>">동티모르</option>
			<option value="<?php echo html_escape(url('items/group?search=&advanced[0][joiner]=and&advanced[0][element_id]=151&advanced[0][type]=contains&advanced[0][terms]=북한')); ?>">북한</option>
		</select>
	</div>

	<!-- 검색폼 -->
	<div class="mb-14">
		<form name="search-group" action="<?php echo html_escape(url('items/group')); ?>" method="get" role="search">
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
			<input type="text" name="advanced[0][terms]" id="" value="정보사전-조직" size="20" title="Search Terms" class="advanced-search-terms">                
			<button type="button" class="remove_search small red button" style="">Remove field</button>
			<select name="advanced[1][joiner]" id="" title="Search Joiner" class="advanced-search-joiner">
			  <option value="and" selected="selected">AND</option>
			</select>
			<select name="advanced[1][element_id]" id="" title="Search Field" class="advanced-search-element">
			  <option value="167">조직명칭</option>
			</select>
			<select name="advanced[1][type]" id="" title="Search Type" class="advanced-search-type">
			  <option value="contains" selected="selected">contains</option>
			</select>
		  </div>
		  <div class='search-form flex gap-2 max-w-[800px]'>
				<input id='query' type='text' name="advanced[1][terms]" value='' class='w-full h-[52px] bg-gray-100 border-0' autofocus placeholder="'조직'을 검색해 보세요">
				<button id='submit_search' type='submit' value='Search' onclick="document.forms['search-group'].submit();" class="flex-shrink-0 bg-primary text-white w-[84px] h-[52px] leading-[52px] hover:bg-black cursor-pointer">검색</button>
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

	<?php // echo pagination_links(); ?>

	<!-- 리스트 -->
	<ul class="mb-28">

	<?php foreach (loop('items') as $item): ?>
	<?php 
		//기본정보 메타 출력용
		$제목 = metadata($item, array('Dublin Core', 'Title'), array('delimiter' => '; '));
		$내용 = metadata($item, array('Dublin Core', 'Description'), array('delimiter' => '; ', 'snippet' => 200));	  
		$목록구분 = metadata($item, array('Item Type Metadata', 'Classification of catalog'), array('delimiter' => '; '));	                   
		//조직 정보
		$조직명칭 = metadata($item, array('Item Type Metadata', 'Organization Name'), array('delimiter' => '; '));	  
		$조직외국어명칭 = metadata($item, array('Item Type Metadata', 'Organization Foreign Language Name'), array('delimiter' => '; '));	
		$조직비대표명칭 = metadata($item, array('Item Type Metadata', 'Organization non-representative name'), array('delimiter' => '; '));	
		$활동국가 = metadata($item, array('Item Type Metadata', 'Country of activity'), array('delimiter' => '; '));	
		$조직구분 = metadata($item, array('Item Type Metadata', 'Classification of organization'), array('delimiter' => '; '));	
		$조직유형 = metadata($item, array('Item Type Metadata', 'Type of organization'), array('delimiter' => '; '));       
		$설립일 = metadata($item, array('Item Type Metadata', 'Founding date'), array('delimiter' => '; '));   
		$해산일 = metadata($item, array('Item Type Metadata', 'Dissolution date'), array('delimiter' => '; '));   
		//$조직설명 = metadata($item, array('Item Type Metadata', 'Organization Description'), array('delimiter' => '; ', 'snippet' => 500));	 
		$조직상세 = metadata($item, array('Item Type Metadata', 'Organization Details'), array('delimiter' => '; ', 'snippet' => 200));			           
		$정보출처 = metadata($item, array('Item Type Metadata', 'Sources of information'), array('delimiter' => '; '));           
	?>	
		<li class="p-4 flex items-center border-b border-neutral-200">
			<div class="w-[64%] flex items-center gap-4">
				<?php if (metadata($item, 'has files')) {  ?>		
					<?php echo link_to_item(item_image('square_thumbnail', array('class' => 'w-[5rem] aspect-1 object-cover'))); ?>		
				<?php } else {} ?>	
				<div>
					<?php echo link_to_item(metadata('item', array('Dublin Core', 'Title')), array('class'=>'block font-bold text-lg hover:text-primary mb-2')); ?>
					<ul class="text-sm text-neutral-700 flex gap-8">
					<?php if ($설립일!= null) { ?><li>설립일 : <?php echo strip_formatting($설립일); ?></li><?php } else {} ?>
					<!-- <?php //if ($해산일!= null) { ?><li>해산일 : <?php //echo strip_formatting($해산일); ?></li><?php //} else {} ?> -->
					<?php if ($조직구분!= null) { ?><li>구분 : <?php echo strip_formatting($조직구분); ?></li><?php } else {} ?>
					<?php if ($조직유형!= null) { ?><li>유형 : <?php echo strip_formatting($조직유형); ?></li><?php } else {} ?>
					<?php if ($활동국가!= null) { ?><li>활동국가 : <?php echo strip_formatting($활동국가); ?></li><?php } else {} ?>
					</ul>		
				</div>
			</div>
			<p class="w-[36%] line-clamp-3 text-sm text-neutral-700"><?php if ($내용!= null || 조직상세!= null) { ?><?php echo strip_formatting($조직상세); ?><br><?php echo strip_formatting($내용); ?><?php } else {} ?></p>			
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
