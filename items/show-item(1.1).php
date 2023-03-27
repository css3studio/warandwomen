<?php 
		//기본정보 메타 출력용
		$제목 = metadata($item, array('Dublin Core', 'Title'), array('delimiter' => '; '));
		$관리번호 = metadata($item, array('Dublin Core', 'Identifier'));			
		$내용 = metadata($item, array('Dublin Core', 'Description'));		  
		$생산연대 = metadata($item, array('Dublin Core', 'Date'));		
		$생산자 = metadata($item, array('Dublin Core', 'Creator'));		
		//$목록유형 = metadata($item, array('Dublin Core', 'Subject'));		
		//$기록유형 = metadata($item, array('Dublin Core', 'Type'));		
		//$단위유형 = metadata($item, array('Dublin Core', 'Coverage'));		
		//$목록구분 = metadata($item, array('Item Type Metadata', 'Classification of catalog'), array('delimiter' => '; '));	        
		$원제목 = metadata($item, array('Item Type Metadata', 'Original title'), array('delimiter' => '; '));	 
		$기록유형 = metadata($item, array('Item Type Metadata', 'Type of records'), array('delimiter' => '; '));	 
		$기록형태 = metadata($item, array('Item Type Metadata', 'Format of records'), array('delimiter' => '; '));	  
		$기록출처 = metadata($item, array('Item Type Metadata', 'Source of records'), array('delimiter' => '; '));	  
		$언어 = metadata($item, array('Item Type Metadata', 'Language of records'), array('delimiter' => '; '));	  
		$생산날짜 = metadata($item, array('Item Type Metadata', 'Dates of creation'), array('delimiter' => '; '));
		$생산자소속단체 = metadata($item, array('Item Type Metadata', 'Creator note'), array('delimiter' => '; '));		  
		$생산자주기 = metadata($item, array('Item Type Metadata', 'Creator note'), array('delimiter' => '; '));	/* 비로그인 사용자에게는 비공개 */
		$키워드= metadata($item, array('Item Type Metadata', 'Keyword'), array('delimiter' => '; '));	  
		$목록공개 = metadata($item, array('Item Type Metadata', 'Disclosure of catalog'), array('delimiter' => '; '));	  
		$원문공개 = metadata($item, array('Item Type Metadata', 'Disclosure of original text'), array('delimiter' => '; '));	  
		$매체용도1 = metadata($item, array('Item Type Metadata', 'Media purpose1'), array('delimiter' => '; '));	  
		$매체1 = metadata($item, array('Item Type Metadata', 'Media1'), array('delimiter' => '; '));	  
		$매체상세정보1 = metadata($item, array('Item Type Metadata', 'Media details1'), array('delimiter' => '; '));	  
		$원문제공1 = metadata($item, array('Item Type Metadata', 'Provision of original text1'), array('delimiter' => '; '));	  
		$수량규모1 = metadata($item, array('Item Type Metadata', 'Quantity/scale1'), array('delimiter' => '; '));	  
		$크기포맷1 = metadata($item, array('Item Type Metadata', 'Size/Format1'), array('delimiter' => '; '));	  
		$매체용도1 = metadata($item, array('Item Type Metadata', 'Media purpose1'), array('delimiter' => '; '));	  
		$매체1 = metadata($item, array('Item Type Metadata', 'Media1'), array('delimiter' => '; '));	  
		$매체상세정보1 = metadata($item, array('Item Type Metadata', 'Media details1'), array('delimiter' => '; '));	  
		$원문제공1 = metadata($item, array('Item Type Metadata', 'Provision of original text1'), array('delimiter' => '; '));	  
		$수량규모1 = metadata($item, array('Item Type Metadata', 'Quantity/scale1'), array('delimiter' => '; '));	  
		$크기포맷1 = metadata($item, array('Item Type Metadata', 'Size/Format1'), array('delimiter' => '; '));	  
		$매체용도2 = metadata($item, array('Item Type Metadata', 'Media purpose2'), array('delimiter' => '; '));	  
		$매체2 = metadata($item, array('Item Type Metadata', 'Media2'), array('delimiter' => '; '));	  
		$매체상세정보2 = metadata($item, array('Item Type Metadata', 'Media details2'), array('delimiter' => '; '));	  
		$원문제공2 = metadata($item, array('Item Type Metadata', 'Provision of original text2'), array('delimiter' => '; '));	  
		$수량규모2 = metadata($item, array('Item Type Metadata', 'Quantity/scale2'), array('delimiter' => '; '));	  
		$크기포맷2 = metadata($item, array('Item Type Metadata', 'Size/Format2'), array('delimiter' => '; '));	  
		$매체용도3 = metadata($item, array('Item Type Metadata', 'Media purpose3'), array('delimiter' => '; '));	  
		$매체3 = metadata($item, array('Item Type Metadata', 'Media3'), array('delimiter' => '; '));	  
		$매체상세정보3 = metadata($item, array('Item Type Metadata', 'Media details3'), array('delimiter' => '; '));	  
		$원문제공3 = metadata($item, array('Item Type Metadata', 'Provision of original text3'), array('delimiter' => '; '));	  
		$수량규모3 = metadata($item, array('Item Type Metadata', 'Quantity/scale3'), array('delimiter' => '; '));	  
		$크기포맷3 = metadata($item, array('Item Type Metadata', 'Size/Format3'), array('delimiter' => '; '));	  
		$매체용도4 = metadata($item, array('Item Type Metadata', 'Media purpose4'), array('delimiter' => '; '));	  
		$매체4 = metadata($item, array('Item Type Metadata', 'Media4'), array('delimiter' => '; '));	  
		$매체상세정보4 = metadata($item, array('Item Type Metadata', 'Media details4'), array('delimiter' => '; '));	  
		$원문제공4 = metadata($item, array('Item Type Metadata', 'Provision of original text4'), array('delimiter' => '; '));	  
		$수량규모4 = metadata($item, array('Item Type Metadata', 'Quantity/scale4'), array('delimiter' => '; '));	  
		$크기포맷4 = metadata($item, array('Item Type Metadata', 'Size/Format4'), array('delimiter' => '; '));	   

		//아이템세트 정보
		$구성정보 = metadata($item, array('Item Type Metadata', 'Configuration information'), array('delimiter' => '; '));	   

		//인물 정보
  		$인물명 = metadata($item, array('Item Type Metadata', 'Person Name'), array('delimiter' => '; '));	
  		$인물성씨 = metadata($item, array('Item Type Metadata', 'Person Last Name'), array('delimiter' => '; '));	
  		$인물이름 = metadata($item, array('Item Type Metadata', 'Person First Name'), array('delimiter' => '; '));	
  		$인물외국어명칭 = metadata($item, array('Item Type Metadata', 'Person Foreign Language Name'), array('delimiter' => '; '));	
  		$인물비대표명칭 = metadata($item, array('Item Type Metadata', 'Person non-representative name'), array('delimiter' => '; '));	
  		$인물설명 = metadata($item, array('Item Type Metadata', 'Person Description'), array('delimiter' => '; '));	
  		//$인물상세설명 = metadata($item, array('Item Type Metadata', 'Size/Format4'), array('delimiter' => '; '));	
  		$국적 = metadata($item, array('Item Type Metadata', 'Nationality'), array('delimiter' => '; '));	
  		$인물구분 = metadata($item, array('Item Type Metadata', 'Classification of person'), array('delimiter' => '; '));	
  		$출생일 = metadata($item, array('Item Type Metadata', 'Date of birth'), array('delimiter' => '; '));	
  		$사망일 = metadata($item, array('Item Type Metadata', 'Date of death'), array('delimiter' => '; '));	

		//단체 정보
  		$조직명칭 = metadata($item, array('Item Type Metadata', 'Organization Name'), array('delimiter' => '; '));	
  		$조직외국어명칭 = metadata($item, array('Item Type Metadata', 'Organization Foreign Language Name'), array('delimiter' => '; '));	
  		$조직비대표명칭 = metadata($item, array('Item Type Metadata', 'Organization non-representative name'), array('delimiter' => '; '));	
  		$조직설명 = metadata($item, array('Item Type Metadata', 'Organization Description'), array('delimiter' => '; '));	
  		$활동국가 = metadata($item, array('Item Type Metadata', 'Country of activity'), array('delimiter' => '; '));	
  		$조직구분 = metadata($item, array('Item Type Metadata', 'Classification of organization'), array('delimiter' => '; '));	
  		$조직유형 = metadata($item, array('Item Type Metadata', 'Type of organization'), array('delimiter' => '; '));	
  		$설립일 = metadata($item, array('Item Type Metadata', 'Founding date'), array('delimiter' => '; '));	
  		$해산일 = metadata($item, array('Item Type Metadata', 'Dissolution date'), array('delimiter' => '; '));	
		
		//연표 정보
  		$연표명칭 = metadata($item, array('Item Type Metadata', 'Chronological Name'), array('delimiter' => '; '));	
  		$연표연도 = metadata($item, array('Item Type Metadata', 'Chronological year'), array('delimiter' => '; '));	
  		$연표시작일자 = metadata($item, array('Item Type Metadata', 'Chronological start date'), array('delimiter' => '; '));	
  		$연표종료일자 = metadata($item, array('Item Type Metadata', 'Chronological end date'), array('delimiter' => '; '));	
  		$연표설명 = metadata($item, array('Item Type Metadata', 'Chronology Description'), array('delimiter' => '; '));	
  		$연표구분 = metadata($item, array('Item Type Metadata', 'Classification of Chronology'), array('delimiter' => '; '));	
  		$관할지역 = metadata($item, array('Item Type Metadata', 'Jurisdiction'), array('delimiter' => '; '));	  
		
		//사건 정보

		//장소 정보
		
		//공통
		$목록구분 = metadata($item, array('Item Type Metadata', 'Classification of catalog'), array('delimiter' => '; '));	  
  		$정보출처 = metadata($item, array('Item Type Metadata', 'Sources of information'), array('delimiter' => '; '));	      
?>	

<?php
	$itemFiles = $item->Files;
	$images = array();
	$nonImages = array();
	foreach ($itemFiles as $itemFile) {
		$mimeType = $itemFile->mime_type;
		if (strpos($mimeType, 'image') !== false) {
			$images[] = $itemFile;
		} else {
			$nonImages[] = $itemFile;
		}
	}
	$hasImages = (count($images) > 0); 	
	
?>
<?php $id =  metadata('item', 'id'); ?>

<?php
if (plugin_is_active('AvantReport') && isset($_GET['report']))
{
    $report = new AvantReport();
    $report->createReportForItem($item);
    exit();
}
$viewerScript = plugin_is_active('AvantZoom') ? ImageZoom::generateOpenSeadragonViewer($item) : '';
$zoomingEnabled = !empty($viewerScript);

// Specify whether the Show page displays the cover image for a reference item. When enabled, and when the item has a
// cover image, the image displays at the top of the left-side panel along with the image's item number and that item's
// title, both of which can be clicked to go to the cover image's item. To prevent that same image from appearing twice
// on the page, the cover image is excluded from the Images section. While this seemed like a good feature, it has
// caused confusion among users who are interested in the cover image itself as opposed to the reference item. When
// referring to the image, they often use the reference item number and when referring to the reference item, use the
// cover image's item number. It's also confusing that the cover image does not appear in the Images section where
// people are used to clicking to see an item's images, whereas they don't tend to click the cover image or its links.
// For now, this feature is getting disabled to see if it's better to not display the cover image at upper left on the
// Show page and instead just display it as a thumbnail in the Images section.
$coverImageEnabledOnShowPage = true;

if ($zoomingEnabled)
{
    // This must be emitted before the call to the head() function below.
    queue_js_file('openseadragon.min');
}

$title = ItemMetadata::getItemTitle($item);
echo head(array('title' => $title, 'bodyclass' => 'items show'));
?>
<link href="/plugins/AvantCommon/views/shared/css/magnific-popup.css?v=3.0.3" media="all" rel="stylesheet" type="text/css">
<link href="/plugins/AvantCommon/views/shared/css/avantcommon.css?v=3.0.3.6" media="all" rel="stylesheet" type="text/css">
<link href="/plugins/AvantElements/views/shared/css/avantelements.css?v=3.0.3" media="all" rel="stylesheet" type="text/css">
<link href="/plugins/AvantRelationships/views/shared/css/cytoscape.js-panzoom.css?v=3.0.3" media="all" rel="stylesheet" type="text/css">
<link href="/plugins/AvantRelationships/views/shared/css/avantrelationships.css?v=3.0.3" media="all" rel="stylesheet" type="text/css">
<link href="/plugins/AvantSearch/views/public/css/avantsearch.css?v=3.0.3" media="all" rel="stylesheet" type="text/css">
<link href="/plugins/AvantZoom/views/shared/css/avantzoom.css?v=3.0.3" media="all" rel="stylesheet" type="text/css">
<link href="/plugins/AvantElasticsearch/views/public/css/avantelasticsearch.css?v=3.0.3" media="all" rel="stylesheet" type="text/css">
<link href="/plugins/AvantVocabulary/views/shared/css/avantvocabulary-tree.css?v=3.0.3" media="all" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/plugins/AvantSearch/views/public/javascripts/results-view-script.js?v=3.0.3"></script>
<script type="text/javascript" src="/plugins/AvantCommon/views/shared/javascripts/jquery.magnific-popup.min.js?v=3.0.3"></script>
<script type="text/javascript" src="/plugins/AvantCommon/views/shared/javascripts/js.cookie-2.2.1.min.js?v=3.0.3"></script>
<script type="text/javascript" src="/plugins/AvantCommon/views/shared/javascripts/avantcommon-script.js?v=3.0.3"></script>
<script type="text/javascript" src="/plugins/AvantRelationships/views/shared/javascripts/cytoscape.min.js?v=3.0.3"></script>
<script type="text/javascript" src="/plugins/AvantRelationships/views/shared/javascripts/cytoscape-cose-bilkent.js?v=3.0.3"></script>
<script type="text/javascript" src="/plugins/AvantRelationships/views/shared/javascripts/dagre.js?v=3.0.3"></script>
<script type="text/javascript" src="/plugins/AvantRelationships/views/shared/javascripts/cytoscape-dagre.js?v=3.0.3"></script>
<script type="text/javascript" src="/plugins/AvantRelationships/views/shared/javascripts/cytoscape-panzoom.js?v=3.0.3"></script>

<link rel="stylesheet" href="/etc/fonts/fontawesome/css/font-awesome.min.css">
<link href="/etc/vendor/lightslider/css/lightslider.css" media="all" rel="stylesheet" type="text/css">
<script src="/etc/vendor/lightslider/js/lightslider.js"></script> 
<script>  
	$(document).ready(function() {
	  $("#content-slider-d").lightSlider({
		loop:true,
		auto:true,
		keyPress:true
	  });
	  $('#image-gallery-d').lightSlider({
				autoWidth: false,
				adaptiveHeight:true,
		gallery:true,
		item:1,
		thumbItem:9,
		slideMargin: 0,
		speed:500,
		auto:false,
		loop:true,
		onSliderLoad: function() {
		  $('#image-gallery-d').removeClass('cS-hidden');
		}  
	  });
	});
</script>

<?php 
	$user = current_user();
	$isLoggedIn = !empty($user);     
?>             
<div class="breadcrumb container bg-neutral-50 text-xs px-4 py-1 mt-3">
	<div class="flex gap-[10px] text-neutral-400">
		<a class="hover:underline" href="/">홈</a>
		<i class="xi-angle-right text-neutral-200"></i>
		<a class="hover:underline" href="#">기록</a>
		<i class="xi-angle-right text-neutral-200"></i>
		<span class="text-primary">기록찾기</span>
	</div>
</div>
<div class="container pt-14">
	<h1 class="text-3xl font-bold mb-6">기록 이름</h1>
	<div class="flex gap-8 mb-24">
		<!--left area -->
		<div class="w-[48.75%] flex-shrink-0 aspect-[624/397] bg-slate-400">
			iframe 추가
		</div>
		<!--//left area -->
		<!--right area -->
		<div class="flex-grow relative">
			<div class="menu-tab01">
				<ul >
					<li class="current"><a data-target="dataA01" href="#">탭메뉴1</a></li>
					<li><a href="#" data-target="dataA02">탭메뉴2</a></li>
					<li><a href="#" data-target="dataA03">탭메뉴3</a></li>
				</ul>
			</div>
			<div class="dataA">
				<div id="dataA01" style="">
				<dl class="flex text-neutral-500 mb-4">
						<dt class="font-bold text-neutral-500 w-[150px]">식별번호</dt> 
						<dd>12345</dd> 
					</dl>
					<dl class="flex text-neutral-500 mb-4">
						<dt class="font-bold text-neutral-500 w-[150px]">식별번호</dt> 
						<dd>12345</dd> 
					</dl>
					<dl class="flex text-neutral-500 mb-4">
						<dt class="font-bold text-neutral-500 w-[150px]">식별번호</dt> 
						<dd>12345</dd> 
					</dl>
					<dl class="flex text-neutral-500 mb-4">
						<dt class="font-bold text-neutral-500 w-[150px]">식별번호</dt> 
						<dd>12345</dd> 
					</dl>
				</div>
				<div id="dataA02" style="display:none">
					data2
				</div>
				<div id="dataA03" style="display:none">
					data3
				</div>
			</div>
			<div class="absolute bottom-0 right-0 flex justify-end gap-2">
				<a class="border border-gray-200 text-sm py-1.5 px-3 hover:text-primary" href="#">오류신고</a>
				<a class="border border-gray-200 text-sm py-1.5 px-3 hover:text-primary" href="#">즐겨찾기</a>
				<a class="border border-gray-200 text-sm py-1.5 px-3 hover:text-primary" href="#">목록받기</a>
			</div>
		</div>
		<!--//right area -->
	</div>

	<!-- 관계정보 -->
	<div class="relation-info-area">

		<div class="bg-gray-300 w-full h-[400px]">관계정보</div>

	</div>
	<!-- //관계정보 -->
	</div>

<!-- ====== 소장기록 Section Start ========  -->
<?php if ($목록구분 == '소장기록') { ?>

		<?php //일반 이미지 포맷인 경우 이미지 뷰어 출력. 단, pdf는 제외. ?>	
		<?php if ($hasImages): ?>
		  <div class="rounded-md" style="background: #F6F6F6;">      
			  <div class="imageArea-d">
				<div class="item">      
				  <div class="clearfix" style="width: 100%;">		
					<ul id="image-gallery-d" class="gallery list-unstyled cS-hidden">
					  <?php foreach ($itemFiles as $itemFile): ?>							
						<li data-thumb="<?php echo $itemFile->getWebPath('square_thumbnail'); ?>" class="rounded-md"> 
							<div class="image-box-d">
								<img class="image-thumbnail-d rounded-md" src="<?php echo $itemFile->getWebPath('fullsize'); ?>" />
							</div>
						</li>
					  <?php endforeach; ?>								
					</ul>														
				  </div>
				</div>
			  </div>	
		  </div>
		<?php endif; ?>	

		<?php //PDF 파일인 경우 pdfjs 뷰어 출력 ?>			
		<?php if (!$item) $item = get_current_record('item'); 
			$files = $item->Files; 
			foreach($files as $file) 
			if ($file->getExtension() =='pdf')	{
				echo '<iframe width="100%;" height="650px;" src="/etc/vendor/pdfjs/web/viewer.html?file=/files/original/'.metadata($file,'filename').'"></iframe><div style="height: 10px;"></div>';
			} 		
			else if ($file->getExtension() =='PDF')	{
				echo '<iframe width="100%;" height="650px;" src="/etc/vendor/pdfjs/web/viewer.html?file=/files/original/'.metadata($file,'filename').'"></iframe><div style="height: 10px;"></div>';
			}
		?> 

		<!-- 기본정보 탭에 출력될 메타데이터 항목 -->
		기본정보 탭 출력용<br>
		<p class="">기록유형: <?php echo strip_formatting($기록유형); ?></p>
		<p class="">기록형태: <?php echo strip_formatting($기록형태); ?></p>
		<p class="">생산날짜: <?php echo strip_formatting($생산날짜); ?></p>
		<?php 
			//if($user->role == 'super' || $user->role == 'admin' || $user->role == 'researcher')
			if ($isLoggedIn) {    //로그인 사용자만 볼 수 있는 메타데이터 정보 출력      
		?>
		<p class="">생산자주기: <?php echo strip_formatting($생산자주기); ?></p>
		<?php 
			} else {} 
		?>
		<!-- 이용정보 탭에 출력될 메타데이터 항목 -->
		이용정보 탭 출력용<br>
		<p class="">목록구분: <?php echo strip_formatting($목록구분); ?></p>
		<p class="">생산연대: <?php echo strip_formatting($생산연대); ?></p>
		<p class="">언어: <?php echo strip_formatting($언어); ?></p>
		<p class="">기록출처: <?php echo strip_formatting($기록출처); ?></p>
		<p class="">목록공개: <?php echo strip_formatting($목록공개); ?></p>
		<p class="">원문공개: <?php echo strip_formatting($원문공개); ?></p>

		<!-- 매체정보 탭에 출력될 메타데이터 항목 -->
		매체정보 탭 출력용<br>
		<p class="">매체용도1: <?php echo strip_formatting($매체용도1); ?></p>
		<p class="">매체1: <?php echo strip_formatting($매체1); ?></p>
		<p class="">매체상세정보1: <?php echo strip_formatting($매체상세정보1); ?></p>
		<p class="">원문제공1: <?php echo strip_formatting($원문제공1); ?></p>
		<p class="">수량/규모1: <?php echo strip_formatting($수량규모1); ?></p>
		<p class="">크기/포맷1: <?php echo strip_formatting($크기포맷1); ?></p>
		<p class="">매체용도2: <?php echo strip_formatting($매체용도2); ?></p>
		<p class="">매체2: <?php echo strip_formatting($매체2); ?></p>
		<p class="">매체상세정보2: <?php echo strip_formatting($매체상세정보2); ?></p>
		<p class="">원문제공2: <?php echo strip_formatting($원문제공2); ?></p>
		<p class="">수량/규모2: <?php echo strip_formatting($수량규모2); ?></p>
		<p class="">크기/포맷2: <?php echo strip_formatting($크기포맷2); ?></p>
		<p class="">매체용도3: <?php echo strip_formatting($매체용도3); ?></p>
		<p class="">매체3: <?php echo strip_formatting($매체3); ?></p>
		<p class="">매체상세정보3: <?php echo strip_formatting($매체상세정보3); ?></p>
		<p class="">원문제공3: <?php echo strip_formatting($원문제공3); ?></p>
		<p class="">수량/규모3: <?php echo strip_formatting($수량규모3); ?></p>
		<p class="">크기/포맷3: <?php echo strip_formatting($크기포맷3); ?></p>
		<p class="">매체용도4: <?php echo strip_formatting($매체용도4); ?></p>
		<p class="">매체4: <?php echo strip_formatting($매체4); ?></p>
		<p class="">매체상세정보4: <?php echo strip_formatting($매체상세정보4); ?></p>
		<p class="">원문제공4: <?php echo strip_formatting($원문제공4); ?></p>
		<p class="">수량/규모4: <?php echo strip_formatting($수량규모4); ?></p>
		<p class="">크기/포맷4: <?php echo strip_formatting($크기포맷4); ?></p>
<?php 
	} else {} 
?>
<!-- ====== 소장기록 Section End ========  -->

<!-- ====== 아이템세트 Section Start ========  -->
<?php if ($목록구분 == '아이템세트') { ?>

		<!-- 썸네일 이미지가 있는 경우 출력 -->
		<?php if (metadata($item, 'has files')) {  ?>	          
		<div class="mb-3 w-full max-w-[520px] sm:mb-0">
		<?php echo files_for_item(array('linkToFile' => false, 'imageSize' => 'fullsize', 'imgAttributes' => array('class' => 'rounded-md h-full w-full object-cover object-center block'))); ?>	
		</div>        
		<?php } else { ?>
		<img src="/etc/images/global/no-image-global-square-v2.jpg" class="rounded-md h-full w-full object-cover object-center">	
		<?php } ?>

		<p class="">구성정보: <?php echo strip_formatting($구성정보); ?></p>
<?php 
	} else {} 
?>
<!-- ====== 아이템세트 Section End ========  -->

<!-- ====== 정보사전-인물 Section Start ========  -->
<?php if ($목록구분 == '정보사전-인물') { ?>

		<!-- 썸네일 이미지가 있는 경우 출력 -->
		<?php if (metadata($item, 'has files')) {  ?>	          
		<div class="mb-3 w-full max-w-[520px] sm:mb-0">
		<?php echo files_for_item(array('linkToFile' => false, 'imageSize' => 'fullsize', 'imgAttributes' => array('class' => 'rounded-md h-full w-full object-cover object-center block'))); ?>	
		</div>        
		<?php } else { ?>
		<img src="/etc/images/global/no-image-global-square-v2.jpg" class="rounded-md h-full w-full object-cover object-center">	
		<?php } ?>

		<p class="">인물명칭: <?php echo strip_formatting($인물명칭); ?></p>
<?php 
	//if($user->role == 'super' || $user->role == 'admin' || $user->role == 'researcher')
	if ($isLoggedIn) {    //로그인 사용자만 볼 수 있는 메타데이터 정보 출력      
?>
		<p class="">이름성씨: <?php echo strip_formatting($인물성씨); ?></p>
		<p class="">이름: <?php echo strip_formatting($인물이름); ?></p>
<?php 
	} else {} 
?>
		<p class="">외국어명칭: <?php echo strip_formatting($인물외국어명칭); ?></p>
		<p class="">비대표명칭: <?php echo strip_formatting($인물비대표명칭); ?></p>
		<p class="">설명: <?php echo strip_formatting($인물설명); ?></p>
		<p class="">국적: <?php echo strip_formatting($국적); ?></p>
		<p class="">인물구분: <?php echo strip_formatting($인물구분); ?></p>
		<p class="">출생일: <?php echo strip_formatting($출생일); ?></p>
		<p class="">사망일: <?php echo strip_formatting($사망일); ?></p>
		<p class="">정보출처: <?php echo strip_formatting($정보출처); ?></p>
<?php 
	} else {} 
?>
<!-- ====== 정보사전-인물 Section End ========  -->

<!-- ====== 정보사전-조직 Section Start ========  -->
<?php if ($목록구분 == '정보사전-조직') { ?>

		<!-- 썸네일 이미지가 있는 경우 출력 -->
		<?php if (metadata($item, 'has files')) {  ?>	          
		<div class="mb-3 w-full max-w-[520px] sm:mb-0">
		<?php echo files_for_item(array('linkToFile' => false, 'imageSize' => 'fullsize', 'imgAttributes' => array('class' => 'rounded-md h-full w-full object-cover object-center block'))); ?>	
		</div>        
		<?php } else { ?>
		<img src="/etc/images/global/no-image-global-square-v2.jpg" class="rounded-md h-full w-full object-cover object-center">	
		<?php } ?>

		<p class="">조직명칭: <?php echo strip_formatting($조직명칭); ?></p>
		<p class="">조직외국어명칭: <?php echo strip_formatting($조직외국어명칭); ?></p>
		<p class="">조직비대표명칭: <?php echo strip_formatting($조직비대표명칭); ?></p>
		<p class="">설명: <?php echo strip_formatting($조직설명); ?></p>
		<p class="">활동국가: <?php echo strip_formatting($활동국가); ?></p>
		<p class="">조직구분: <?php echo strip_formatting($조직구분); ?></p>
		<p class="">조직유형: <?php echo strip_formatting($조직유형); ?></p>
		<p class="">설립일: <?php echo strip_formatting($설립일); ?></p>
		<p class="">해산일: <?php echo strip_formatting($해산일); ?></p>
		<p class="">정보출처: <?php echo strip_formatting($정보출처); ?></p>
<?php 
	} else {} 
?>
<!-- ====== 정보사전-조직 Section End ========  -->

<!-- ====== 정보사전-연표 Section Start ========  -->
<?php if ($목록구분 == '정보사전-연표') { ?>

		<!-- 썸네일 이미지가 있는 경우 출력 -->
		<?php if (metadata($item, 'has files')) {  ?>	          
		<div class="mb-3 w-full max-w-[520px] sm:mb-0">
		<?php echo files_for_item(array('linkToFile' => false, 'imageSize' => 'fullsize', 'imgAttributes' => array('class' => 'rounded-md h-full w-full object-cover object-center block'))); ?>	
		</div>        
		<?php } else { ?>
		<img src="/etc/images/global/no-image-global-square-v2.jpg" class="rounded-md h-full w-full object-cover object-center">	
		<?php } ?>

		<p class="">연표명칭: <?php echo strip_formatting($연표명칭); ?></p>
		<p class="">연표연도: <?php echo strip_formatting($연표연도); ?></p>
		<p class="">연표시작일자: <?php echo strip_formatting($연표시작일자); ?></p>
		<p class="">연표종료일자: <?php echo strip_formatting($연표종료일자); ?></p>
		<p class="">연표설명: <?php echo strip_formatting($연표설명); ?></p>
		<p class="">연표구분: <?php echo strip_formatting($연표구분); ?></p>
		<p class="">관할지역: <?php echo strip_formatting($관할지역); ?></p>
		<p class="">정보출처: <?php echo strip_formatting($정보출처); ?></p>
<?php 
	} else {} 
?>
<!-- ====== 정보사전-연표 Section End ========  -->


<!-- 오메카 태그 정보 출력(요구사항이 있는 경우에만 사용 -->
<?php if (metadata($item, 'has tags')): ?>
	<div id="item-tags" class="element">
		<h2>Tags</h2>
		<div class="element-text tags"><?php echo tag_string('item', 'find'); ?></div>
	</div>
<?php endif; ?>


<div id="secondary">
	<!-- 관심기록 추가하기 버튼 링크 출력 -->
    <?php echo get_specific_plugin_hook_output('Cart', 'public_items_show', array('view' => $this, 'item' => $item)); ?>

    <?php 
		// If this item has a cover image, that image will appear in the sidebar, so pass it to
		// admin_items_show to indicate that the image should be excluded from the list of related items.
		$excludeItem = $coverImageEnabledOnShowPage ? ItemPreview::getCoverImageItem($item) : null;
	?>
    <?php echo get_specific_plugin_hook_output('AvantCustom', 'admin_items_show', array('view' => $this, 'item' => $item, 'exclude' => $excludeItem)); ?>

	<!-- 관계 그래프 및 관련 목록 영역 출력 -->
    <?php echo get_specific_plugin_hook_output('AvantRelationships', 'public_items_show', array('view' => $this, 'item' => $item, 'exclude' => $excludeItem)); ?>
    <?php echo get_specific_plugin_hook_output('AvantRelationships', 'show_relationships_visualization', array('view' => $this, 'item' => $item)); ?>

	<!-- 지도 영역 출력 -->
    <?php echo get_specific_plugin_hook_output('Geolocation', 'public_items_show', array('view' => $this, 'item' => $item)); ?>

	<!-- pdf 반출 영역 출력(사용안함) -->
    <?php echo get_specific_plugin_hook_output('AvantReport', 'public_items_show', array('view' => $this, 'item' => $item)); ?>
</div>


<?php
	if ($zoomingEnabled)
	{
		echo $this->partial('avantzoom-script.php', array('viewerScript' => $viewerScript));
	}
?>

