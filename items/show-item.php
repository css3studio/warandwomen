<?php
	$pageTitle = metadata($item, array('Dublin Core', 'Title'));
	$title = metadata('item', 'display_title');
?>
<?php 
	//공통
	$목록구분 = metadata($item, array('Item Type Metadata', 'Classification of catalog'), array('delimiter' => '; '));	  
	$정보출처 = metadata($item, array('Item Type Metadata', 'Sources of information'), array('delimiter' => '; '));	
	$유튜브영상 = metadata($item, array('Item Type Metadata', 'Video source'), array('delimiter' => '; '));	 

	//기본정보 메타 출력용
	$제목 = metadata($item, array('Dublin Core', 'Title'), array('delimiter' => '; '));
	$관리번호 = metadata($item, array('Dublin Core', 'Identifier'));			
	$내용 = metadata($item, array('Dublin Core', 'Description'));		  
	$생산연대 = metadata($item, array('Dublin Core', 'Date'));		
	$생산자 = metadata($item, array('Dublin Core', 'Creator'));		
	//$목록유형 = metadata($item, array('Dublin Core', 'Subject'));		
	//$기록유형 = metadata($item, array('Dublin Core', 'Type'));		
	$기술계층 = metadata($item, array('Dublin Core', 'Coverage'));		        
	$원제목 = metadata($item, array('Item Type Metadata', 'Original title'), array('delimiter' => '; '));	 
	$기록유형 = metadata($item, array('Item Type Metadata', 'Type of records'), array('delimiter' => '; '));	 
	$기록형태 = metadata($item, array('Item Type Metadata', 'Format of records'), array('delimiter' => '; '));	  
	$기록출처 = metadata($item, array('Item Type Metadata', 'Source of records'), array('delimiter' => '; '));	  
	$언어 = metadata($item, array('Item Type Metadata', 'Language of records'), array('delimiter' => '; '));	  
	$생산일자 = metadata($item, array('Item Type Metadata', 'Dates of creation'), array('delimiter' => '; '));
	$일자구분 = metadata($item, array('Item Type Metadata', 'Classification of date'), array('delimiter' => '; '));
	$생산자구분 = metadata($item, array('Item Type Metadata', 'Classification of creator'), array('delimiter' => '; '));
	$생산자소속단체 = metadata($item, array('Item Type Metadata', 'Creator note'), array('delimiter' => '; '));		  
	$생산자주기 = metadata($item, array('Item Type Metadata', 'Creator note'), array('delimiter' => '; '));	/* 비로그인 사용자에게는 비공개 */
	$키워드= metadata($item, array('Item Type Metadata', 'Keyword'), array('delimiter' => '; '));	  
	$목록공개 = metadata($item, array('Item Type Metadata', 'Disclosure of catalog'), array('delimiter' => '; '));	  
	$원문공개 = metadata($item, array('Item Type Metadata', 'Disclosure of original text'), array('delimiter' => '; '));	  
	$공개주기 = metadata($item, array('Item Type Metadata', 'Publication note'), array('delimiter' => '; '));		
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

	$내용전문 = metadata($item, array('Item Type Metadata', 'Disclosure of description text'), array('delimiter' => '; '));	/* 비로그인 사용자에게는 비공개 */   
	$기술상태 = metadata($item, array('Item Type Metadata', 'Description status'), array('delimiter' => '; '));	/* 비로그인 사용자에게는 비공개 */  

	//아이템세트 정보
	$구성정보 = metadata($item, array('Item Type Metadata', 'Configuration information'), array('delimiter' => '; '));	   

	//인물 정보
	$인물명 = metadata($item, array('Item Type Metadata', 'Person Name'), array('delimiter' => '; '));	
	$인물성씨 = metadata($item, array('Item Type Metadata', 'Person Last Name'), array('delimiter' => '; '));	
	$인물이름 = metadata($item, array('Item Type Metadata', 'Person First Name'), array('delimiter' => '; '));	
	$인물외국어명칭 = metadata($item, array('Item Type Metadata', 'Person Foreign Language Name'), array('delimiter' => '; '));	
	$인물비대표명칭 = metadata($item, array('Item Type Metadata', 'Person non-representative name'), array('delimiter' => '; '));	
	//$인물설명 = metadata($item, array('Item Type Metadata', 'Person Description'), array('delimiter' => '; '));	
	$인물상세 = metadata($item, array('Item Type Metadata', 'Person Details'), array('delimiter' => '; '));	
	$국적 = metadata($item, array('Item Type Metadata', 'Nationality'), array('delimiter' => '; '));	
	$인물구분 = metadata($item, array('Item Type Metadata', 'Classification of person'), array('delimiter' => '; '));	
	$출생일 = metadata($item, array('Item Type Metadata', 'Date of birth'), array('delimiter' => '; '));	
	$사망일 = metadata($item, array('Item Type Metadata', 'Date of death'), array('delimiter' => '; '));	

	//단체 정보
	$조직명칭 = metadata($item, array('Item Type Metadata', 'Organization Name'), array('delimiter' => '; '));	
	$조직외국어명칭 = metadata($item, array('Item Type Metadata', 'Organization Foreign Language Name'), array('delimiter' => '; '));	
	$조직비대표명칭 = metadata($item, array('Item Type Metadata', 'Organization non-representative name'), array('delimiter' => '; '));	
	//$조직설명 = metadata($item, array('Item Type Metadata', 'Organization Description'), array('delimiter' => '; '));	
	$조직상세 = metadata($item, array('Item Type Metadata', 'Organization Details'), array('delimiter' => '; '));	
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
	//$연표설명 = metadata($item, array('Item Type Metadata', 'Chronology Description'), array('delimiter' => '; '));	
	//$연표상세 = metadata($item, array('Item Type Metadata', 'Chronology Details'), array('delimiter' => '; '));		
	$연표구분 = metadata($item, array('Item Type Metadata', 'Classification of Chronology'), array('delimiter' => '; '));	
	$관할지역 = metadata($item, array('Item Type Metadata', 'Jurisdiction'), array('delimiter' => '; '));	  
	$관련활동 = metadata($item, array('Item Type Metadata', 'Related Activity'), array('delimiter' => '; '));	  	
	
	//사건 정보

	//장소 정보
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
<style>
.video-container {
    position: relative;
    height: 0;
    padding-bottom: 56.25%;
}	
.video-container iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border-radius: 0.1rem;
}	
</style>
         
<div class="pt-3">
	<div class="breadcrumb container bg-neutral-50 text-xs px-4 py-1 rounded-lg">
		<div class="flex gap-[10px] text-neutral-400">
			<a class="hover:underline" href="<?php echo html_escape(url('/')); ?>">홈</a>
		<?php if ($목록구분 == '소장기록') { ?>
			<i class="xi-angle-right text-neutral-200"></i>
			<a class="hover:underline" href="<?php echo html_escape(url('find/intro')); ?>">기록</a>
		<?php } else {} ?>
		<?php if ($목록구분 == '아이템세트') { ?>
			<i class="xi-angle-right text-neutral-200"></i>
			<a class="hover:underline" href="<?php echo html_escape(url('find?query=&site=1&leaf_coverage[]=아이템세트')); ?>">아이템세트</a>
		<?php } else {} ?>		
		<?php if ($목록구분 == '정보사전-인물') { ?>
			<i class="xi-angle-right text-neutral-200"></i>
			<a class="hover:underline" href="<?php echo html_escape(url('items/person?search=&advanced[0][joiner]=and&advanced[0][element_id]=74&advanced[0][type]=is+exactly&advanced[0][terms]=정보사전-인물')); ?>">정보</a>
			<i class="xi-angle-right text-neutral-200"></i>
			<a class="hover:underline" href="<?php echo html_escape(url('items/person?search=&advanced[0][joiner]=and&advanced[0][element_id]=74&advanced[0][type]=is+exactly&advanced[0][terms]=정보사전-인물')); ?>">인물</a>
		<?php } else {} ?>
		<?php if ($목록구분 == '정보사전-조직') { ?>
			<i class="xi-angle-right text-neutral-200"></i>
			<a class="hover:underline" href="<?php echo html_escape(url('items/person?search=&advanced[0][joiner]=and&advanced[0][element_id]=74&advanced[0][type]=is+exactly&advanced[0][terms]=정보사전-인물')); ?>">정보</a>
			<i class="xi-angle-right text-neutral-200"></i>
			<a class="hover:underline" href="<?php echo html_escape(url('items/group?search=&advanced[0][joiner]=and&advanced[0][element_id]=74&advanced[0][type]=is+exactly&advanced[0][terms]=정보사전-조직')); ?>">조직</a>
		<?php } else {} ?>
		<?php if ($목록구분 == '정보사전-연표') { ?>
			<i class="xi-angle-right text-neutral-200"></i>
			<a class="hover:underline" href="<?php echo html_escape(url('items/person?search=&advanced[0][joiner]=and&advanced[0][element_id]=74&advanced[0][type]=is+exactly&advanced[0][terms]=정보사전-인물')); ?>">정보</a>
			<i class="xi-angle-right text-neutral-200"></i>
			<a class="hover:underline" href="<?php echo html_escape(url('items/history?search=&advanced[0][joiner]=and&advanced[0][element_id]=74&advanced[0][type]=is+exactly&advanced[0][terms]=정보사전-연표')); ?>">연표</a>
		<?php } else {} ?>
			<i class="xi-angle-right text-neutral-200"></i>
			<span class="text-primary"><?php echo $pageTitle; ?></span>
		</div>
	</div>
</div>

<?php 
	$userRole = current_user();
	$isLoggedIn = !empty($userRole);     
?>   

<?php if ($목록구분 == '소장기록') {  // 해당 아이템이 소장기록에 해당하는 경우에만 섹션 출력 ?>
<!-- ====== 소장기록 Section Start ========  -->	
<div class="container pt-14">
	<h1 class="text-3xl font-bold mb-6"><?php echo $pageTitle; ?></h1>
	<div class="flex gap-8 mb-24">
		<!--left area -->
		<div class="w-[48.75%] flex-shrink-0 "><!-- aspect-[624/397] -->

				<?php //PDF 파일인 경우 pdfjs 뷰어 출력 ?>			
				<?php if (!$item) $item = get_current_record('item'); 
					$files = $item->Files; 
					foreach($files as $file) 
					if ($file->getExtension() =='pdf')	{
						echo '<iframe class="w-full h-[500px]" src="/etc/vendor/pdfjs/web/viewer.html?file=/files/original/'.metadata($file,'filename').'"></iframe>';
					} 		
					else if ($file->getExtension() =='PDF')	{
						echo '<iframe  class="w-full h-[500px]" src="/etc/vendor/pdfjs/web/viewer.html?file=/files/original/'.metadata($file,'filename').'"></iframe>';
					}
				?> 

				<?php if ($유튜브영상 = metadata($item, array('Item Type Metadata', 'Video source'))): ?>    
				<div class="w-full px-4">
				<?php //유튜브 영상 임베드 스크립트 출력 ?>    
				<div class="video-container">  
					<iframe src="<?php echo $유튜브영상; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				</div>
				<?php endif; ?>	

				<?php if ($유튜브영상 == null) { ?>  							
				<?php //일반 이미지 포맷인 경우 이미지 뷰어 출력. 단, pdf는 제외. ?>	
				<?php if ($hasImages): ?>
				  <div>      
					  <div class="imageArea-d">
						<div class="item">      
						  <div class="clearfix" style="width: 100%;">		
							<ul id="image-gallery-d" class="gallery list-unstyled cS-hidden">
							  <?php foreach ($itemFiles as $itemFile): ?>							
								<li data-thumb="<?php echo $itemFile->getWebPath('square_thumbnail'); ?>" class=""> 
									<div class="image-box-d">
										<img class="image-thumbnail-d" src="<?php echo $itemFile->getWebPath('fullsize'); ?>" />
									</div>
								</li>
							  <?php endforeach; ?>								
							</ul>														
						  </div>
						</div>
					  </div>	
				  </div>
				<?php endif; ?>
				<?php } else {} ?>			
		</div>
		<!--//left area -->
		<!--right area -->
		<div class="flex-grow relative">
			<div class="menu-tab01 !mb-0">
				<ul >
					<li class="current"><a data-target="dataA01" href="#">기본정보</a></li>
					<li><a href="#" data-target="dataA02">이용정보</a></li>
					<li><a href="#" data-target="dataA03">매체정보</a></li>
				</ul>
			</div>
			<div class="dataA max-h-[36rem] overflow-y-auto">
				<div id="dataA01" class="py-10">
					<?php if ($관리번호!= null && $isLoggedIn) { //로그인 사용자만 열람 ?>
					<dl class="flex text-neutral-500 mb-4">
						<dt class="font-bold text-neutral-500 w-[150px] flex-shrink-0">관리번호</dt> 
						<dd><?php echo strip_formatting($관리번호); ?></dd> 
					</dl>
					<?php } else {} ?>
					<?php if ($제목!= null) { ?>
					<dl class="flex text-neutral-500 mb-4">
						<dt class="font-bold text-neutral-500 w-[150px] flex-shrink-0">제목</dt> 
						<dd><?php echo strip_formatting($제목); ?></dd> 
					</dl>
					<?php } else {} ?>					
					<?php if ($내용!= null) { ?>
					<dl class="flex text-neutral-500 mb-4">
						<dt class="font-bold text-neutral-500 w-[150px] flex-shrink-0">내용</dt> 
						<dd><?php echo strip_formatting($내용); ?></dd> 
					</dl>
					<?php } else {} ?>
					<?php if ($내용전문!= null && $isLoggedIn) { //로그인 사용자만 열람 ?>
					<dl class="flex text-neutral-500 mb-4">
						<dt class="font-bold text-neutral-500 w-[150px] flex-shrink-0">비공개 내용</dt> 
						<dd><?php echo strip_formatting($내용전문); ?></dd> 
					</dl>
					<?php } else {} ?>					

					<?php // 생산자가 추정에 해당하는 경우 생산자에 각 괄호를 삽입해서 출력 ?>					
					<?php if ($생산자!= null && $생산자구분=='Y') { ?>
					<dl class="flex text-neutral-500 mb-4">
						<dt class="font-bold text-neutral-500 w-[150px] flex-shrink-0">생산자</dt> 
						<dd>[<?php echo strip_formatting($생산자); ?>]</dd> 
					</dl>
					<?php // 생산자가 추정에 해당하지 않는 경우 생산자는 그대로 출력 ?>						
					<?php } else if ($생산자!= null && $생산자구분=='N') { ?>
					<dl class="flex text-neutral-500 mb-4">
						<dt class="font-bold text-neutral-500 w-[150px] flex-shrink-0">생산자</dt> 
						<dd><?php echo strip_formatting($생산자); ?></dd> 
					</dl>					
					<?php } else {} ?>

					<?php // 생산일자가 추정일자에 해당하는 경우 생산일자에 각 괄호를 삽입해서 출력 ?>					
					<?php if ($생산일자!= null && $일자구분=='Y') { ?>
					<dl class="flex text-neutral-500 mb-4">
						<dt class="font-bold text-neutral-500 w-[150px] flex-shrink-0">생산일자</dt> 
						<dd>[<?php echo strip_formatting($생산일자); ?>]</dd> 
					</dl>
					<?php // 생산일자가 추정일자에 해당하지 않는 경우 생산일자는 그대로 출력 ?>						
					<?php } else if ($생산일자!= null && $일자구분=='N') { ?>
					<dl class="flex text-neutral-500 mb-4">
						<dt class="font-bold text-neutral-500 w-[150px] flex-shrink-0">생산일자</dt> 
						<dd><?php echo strip_formatting($생산일자); ?></dd> 
					</dl>					
					<?php } else {} ?>	

					<?php if ($기록유형!= null) { ?>
					<dl class="flex text-neutral-500 mb-4">
						<dt class="font-bold text-neutral-500 w-[150px] flex-shrink-0">기록유형</dt> 
						<dd><?php echo strip_formatting($기록유형); ?></dd> 
					</dl>
					<?php } else {} ?>				
					<?php if ($기록형태!= null) { ?>
					<dl class="flex text-neutral-500 mb-4">
						<dt class="font-bold text-neutral-500 w-[150px] flex-shrink-0">기록형태</dt> 
						<dd><?php echo strip_formatting($기록형태); ?></dd> 
					</dl>
					<?php } else {} ?>				
					<?php if ($생산자주기!= null && $isLoggedIn) { ?>
					<dl class="flex text-neutral-500 mb-4">
						<dt class="font-bold text-neutral-500 w-[150px] flex-shrink-0">생산자주기</dt> 
						<dd><?php echo strip_formatting($생산자주기); ?></dd> 
					</dl>
					<?php } else {} ?>					
					<?php //if ($키워드!= null) { ?>
					<!-- dl class="flex text-neutral-500 mb-4">
						<dt class="font-bold text-neutral-500 w-[150px] flex-shrink-0">키워드</dt> 
						<dd><?php //echo strip_formatting($키워드); ?></dd> 
					</!-->
					<?php //} else {} ?>
					<?php if (metadata($item, 'has tags')): ?>
					<dl class="flex text-neutral-500 mb-4">
						<dt class="font-bold text-neutral-500 w-[150px] flex-shrink-0">태그</dt> 
						<dd><?php echo tag_string('item', 'find'); ?></dd> 
					</dl>
					<?php endif; ?>	
				</div>
				<div id="dataA02" class="py-10" style="display:none">
					<!-- 이용정보 탭에 출력될 메타데이터 항목 -->
					<?php if ($목록구분!= null) { ?>						
					<dl class="flex text-neutral-500 mb-4">
						<dt class="font-bold text-neutral-500 w-[150px] flex-shrink-0">목록구분</dt> 
						<dd><?php echo strip_formatting($목록구분); ?></dd> 
					</dl>
					<?php } else {} ?>
					<?php if ($언어!= null) { ?>					
					<dl class="flex text-neutral-500 mb-4">
						<dt class="font-bold text-neutral-500 w-[150px] flex-shrink-0">언어</dt> 
						<dd><?php echo strip_formatting($언어); ?></dd> 
					</dl>
					<?php } else {} ?>
					<?php if ($기록출처!= null) { ?>					
					<dl class="flex text-neutral-500 mb-4">
						<dt class="font-bold text-neutral-500 w-[150px] flex-shrink-0">기록출처</dt> 
						<dd><?php echo strip_formatting($기록출처); ?></dd> 
					</dl>
					<?php } else {} ?>
					<?php if ($목록공개!= null) { ?>					
					<dl class="flex text-neutral-500 mb-4">
						<dt class="font-bold text-neutral-500 w-[150px] flex-shrink-0">목록공개</dt> 
						<dd><?php echo strip_formatting($목록공개); ?></dd> 
					</dl>
					<?php } else {} ?>				
					<?php if($원문공개!= null) { ?>				
						<dl class="flex text-neutral-500 mb-4">
							<dt class="font-bold text-neutral-500 w-[150px] flex-shrink-0">원문공개</dt> 
							<dd><?php echo strip_formatting($원문공개); ?></dd> 
						</dl>
					<?php } else {} ?>	
					<?php if($userRole) : ?>							
					<?php if($공개주기!= null && $userRole->role == 'super' || $userRole->role == 'admin') { //관리자 권한 이상만 열람 ?>			
						<dl class="flex text-neutral-500 mb-4">
							<dt class="font-bold text-neutral-500 w-[150px] flex-shrink-0">공개주기</dt> 
							<dd><?php echo strip_formatting($공개주기); ?></dd> 
						</dl>
					<?php } else {} ?>	
					<?php endif; ?>	
				</div>
				<div id="dataA03" class="py-10" style="display:none">
					<!-- 매체정보 탭에 출력될 메타데이터 항목 -->
					<?php if ($매체용도1!= null) { //메체정보1에 해당하는 데이터가 없는 경우 출력 제외 ?>		
					<h3 class="text-xl mb-4 font-bold">매체정보 1</h3>
					<div class="grid grid-cols-2 gap-x-10 mb-4">
						<dl class="flex text-neutral-500 mb-4">
							<dt class="font-bold text-neutral-500 w-[150px] flex-shrink-0">매체용도</dt> 
							<dd><?php echo strip_formatting($매체용도1); ?></dd> 
						</dl>
						<dl class="flex text-neutral-500 mb-4">
							<dt class="font-bold text-neutral-500 w-[150px] flex-shrink-0">매체</dt> 
							<dd><?php echo strip_formatting($매체1); ?></dd> 
						</dl>
						<dl class="flex text-neutral-500 mb-4">
							<dt class="font-bold text-neutral-500 w-[150px] flex-shrink-0">매체상세정보</dt> 
							<dd><?php echo strip_formatting($매체상세정보1); ?></dd> 
						</dl>
						<dl class="flex text-neutral-500 mb-4">
							<dt class="font-bold text-neutral-500 w-[150px] flex-shrink-0">원문제공</dt> 
							<dd><?php echo strip_formatting($원문제공1); ?></dd> 
						</dl>
						<dl class="flex text-neutral-500 mb-4">
							<dt class="font-bold text-neutral-500 w-[150px] flex-shrink-0">수량규모</dt> 
							<dd><?php echo strip_formatting($수량규모1); ?></dd> 
						</dl>
						<dl class="flex text-neutral-500 mb-4">
							<dt class="font-bold text-neutral-500 w-[150px] flex-shrink-0">크기포맷</dt> 
							<dd><?php echo strip_formatting($크기포맷1); ?></dd> 
						</dl>
					</div>
					<?php } else {} ?>						

					<?php if ($매체용도2!= null) { //메체정보2에 해당하는 데이터가 없는 경우 출력 제외 ?>							
					<h3 class="text-xl mb-4 font-bold">매체정보 2</h3>
					<div class="grid grid-cols-2 gap-x-10 mb-4">
						<dl class="flex text-neutral-500 mb-4">
							<dt class="font-bold text-neutral-500 w-[150px] flex-shrink-0">매체용도</dt> 
							<dd><?php echo strip_formatting($매체용도2); ?></dd> 
						</dl>
						<dl class="flex text-neutral-500 mb-4">
							<dt class="font-bold text-neutral-500 w-[150px] flex-shrink-0">매체</dt> 
							<dd><?php echo strip_formatting($매체2); ?></dd> 
						</dl>
						<dl class="flex text-neutral-500 mb-4">
							<dt class="font-bold text-neutral-500 w-[150px] flex-shrink-0">매체상세정보</dt> 
							<dd><?php echo strip_formatting($매체상세정보2); ?></dd> 
						</dl>
						<dl class="flex text-neutral-500 mb-4">
							<dt class="font-bold text-neutral-500 w-[150px] flex-shrink-0">원문제공</dt> 
							<dd><?php echo strip_formatting($원문제공2); ?></dd> 
						</dl>
						<dl class="flex text-neutral-500 mb-4">
							<dt class="font-bold text-neutral-500 w-[150px] flex-shrink-0">수량규모</dt> 
							<dd><?php echo strip_formatting($수량규모2); ?></dd> 
						</dl>
						<dl class="flex text-neutral-500 mb-4">
							<dt class="font-bold text-neutral-500 w-[150px] flex-shrink-0">크기포맷</dt> 
							<dd><?php echo strip_formatting($크기포맷2); ?></dd> 
						</dl>
					</div>
					<?php } else {} ?>						

					<?php if ($매체용도3!= null) { //메체정보3에 해당하는 데이터가 없는 경우 출력 제외 ?>						
					<h3 class="text-xl mb-4 font-bold">매체정보 3</h3>
					<div class="grid grid-cols-2 gap-x-10 mb-4">
						<dl class="flex text-neutral-500 mb-4">
							<dt class="font-bold text-neutral-500 w-[150px] flex-shrink-0">매체용도</dt> 
							<dd><?php echo strip_formatting($매체용도3); ?></dd> 
						</dl>
						<dl class="flex text-neutral-500 mb-4">
							<dt class="font-bold text-neutral-500 w-[150px] flex-shrink-0">매체</dt> 
							<dd><?php echo strip_formatting($매체3); ?></dd> 
						</dl>
						<dl class="flex text-neutral-500 mb-4">
							<dt class="font-bold text-neutral-500 w-[150px] flex-shrink-0">매체상세정보</dt> 
							<dd><?php echo strip_formatting($매체상세정보3); ?></dd> 
						</dl>
						<dl class="flex text-neutral-500 mb-4">
							<dt class="font-bold text-neutral-500 w-[150px] flex-shrink-0">원문제공</dt> 
							<dd><?php echo strip_formatting($원문제공3); ?></dd> 
						</dl>
						<dl class="flex text-neutral-500 mb-4">
							<dt class="font-bold text-neutral-500 w-[150px] flex-shrink-0">수량규모</dt> 
							<dd><?php echo strip_formatting($수량규모3); ?></dd> 
						</dl>
						<dl class="flex text-neutral-500 mb-4">
							<dt class="font-bold text-neutral-500 w-[150px] flex-shrink-0">크기포맷</dt> 
							<dd><?php echo strip_formatting($크기포맷3); ?></dd> 
						</dl>
					</div>
					<?php } else {} ?>						

					<?php if ($매체용도4!= null) { //메체정보4에 해당하는 데이터가 없는 경우 출력 제외 ?>	
					<h3 class="text-xl mb-4 font-bold">매체정보 4</h3>
					<div class="grid grid-cols-2 gap-x-10 mb-4">
						<dl class="flex text-neutral-500 mb-4">
							<dt class="font-bold text-neutral-500 w-[150px] flex-shrink-0">매체용도</dt> 
							<dd><?php echo strip_formatting($매체용도4); ?></dd> 
						</dl>
						<dl class="flex text-neutral-500 mb-4">
							<dt class="font-bold text-neutral-500 w-[150px] flex-shrink-0">매체</dt> 
							<dd><?php echo strip_formatting($매체4); ?></dd> 
						</dl>
						<dl class="flex text-neutral-500 mb-4">
							<dt class="font-bold text-neutral-500 w-[150px] flex-shrink-0">매체상세정보</dt> 
							<dd><?php echo strip_formatting($매체상세정보4); ?></dd> 
						</dl>
						<dl class="flex text-neutral-500 mb-4">
							<dt class="font-bold text-neutral-500 w-[150px] flex-shrink-0">원문제공</dt> 
							<dd><?php echo strip_formatting($원문제공4); ?></dd> 
						</dl>
						<dl class="flex text-neutral-500 mb-4">
							<dt class="font-bold text-neutral-500 w-[150px] flex-shrink-0">수량규모</dt> 
							<dd><?php echo strip_formatting($수량규모4); ?></dd> 
						</dl>
						<dl class="flex text-neutral-500 mb-4">
							<dt class="font-bold text-neutral-500 w-[150px] flex-shrink-0">크기포맷</dt> 
							<dd><?php echo strip_formatting($크기포맷4); ?></dd> 
						</dl>
					</div>
					<?php } else {} ?>		

				</div>
			</div>
			<div class="flex justify-end gap-2 pt-[0.625rem]">
				<a class="border border-gray-200 text-sm py-1.5 px-3 hover:text-primary" href="<?php echo html_escape(url('/')); ?>corrections/index/add/item_id/<?php echo $id; ?>">오류신고</a>
				<!-- a class="border border-gray-200 text-sm py-1.5 px-3 hover:text-primary" href="#">즐겨찾기</!-->
				<a class="border border-gray-200 text-sm py-1.5 px-3 hover:text-primary" href="<?php echo html_escape(url('/')); ?>items/show/<?php echo $id; ?>?output=csv">목록받기</a>
				<?php echo get_specific_plugin_hook_output('Cart', 'public_items_show', array('view' => $this, 'item' => $item)); //내 관심기록 출력 ?>
				<style>
					.cart{
						display:flex;
						align-items: center;
						gap:8px;
					}
				</style>
			</div>
		</div>
		<!--//right area -->
	</div>

</div><!--// end of <div class="container pt-14"> -->
<!-- ====== 소장기록 Section End ========  -->	
<?php 
	} else {} 
?>







<?php if ($목록구분 == '아이템세트') { // 해당 아이템이 아이템세트에 해당하는 경우에만 섹션 출력 ?>
<!-- ====== 아이템세트 Section Start ========  -->
<div class="container pt-14">
	<div class="flex mb-28">
		<div class="thumb-area flex-shrink-0 w-[20rem] mr-[5rem]">
			<!-- 썸네일 이미지가 있는 경우 출력 -->
			<?php if (metadata($item, 'has files')) {  ?>	          
			<?php echo files_for_item(array('linkToFile' => false, 'imageSize' => 'fullsize', 'imgAttributes' => array('class' => 'w-full acpect-1 object-cover'))); ?>	
			<?php } else { ?>
				<img src="<?php echo img('icon/아이템세트.png'); ?>" class="w-full acpect-1 object-cover">	
			<?php } ?>
		</div>
		<div class="info-area relative flex flex-col justify-center flex-grow">

			<h1 class="text-[1.875rem] font-bold mb-8"><?php echo strip_formatting($제목); ?></h1>

			<div class="grid grid-cols-[minmax(240px,_auto)_minmax(240px,_auto)] gap-x-12 gap-y-4">
				<?php if ($목록구분!= null) { ?>					
				<dl class="flex text-neutral-500">
					<dt class="w-[7.5rem] flex-shrink-0 font-bold">목록구분</dt>
					<dd><?php echo strip_formatting($목록구분); ?></dd>
				</dl>
				<?php } else {} ?>					
				<?php if ($구성정보!= null) { ?>								
				<dl class="flex text-neutral-500">
					<dt class="w-[7.5rem] flex-shrink-0 font-bold">구성정보</dt>
					<dd><?php echo strip_formatting($구성정보); ?></dd>
				</dl>
				<?php } else {} ?>	
				<?php if ($관리번호!= null && $isLoggedIn) { //로그인 사용자만 열람 ?>						
				<dl class="flex text-neutral-500">
					<dt class="w-[7.5rem] flex-shrink-0 font-bold">관리번호</dt>
					<dd><?php echo strip_formatting($관리번호); ?></dd>
				</dl>
				<?php } else {} ?>				
				<?php if ($기술상태!= null && $isLoggedIn) { //로그인 사용자만 열람 ?>
				<dl class="flex text-neutral-500">
					<dt class="w-[7.5rem] flex-shrink-0 font-bold">기술상태</dt> 
					<dd><?php echo strip_formatting($기술상태); ?></dd> 
				</dl>
				<?php } else {} ?>					
				<?php if (metadata($item, 'has tags')): ?>
				<dl class="flex text-neutral-500">
					<dt class="w-[7.5rem] flex-shrink-0 font-bold">태그</dt>
					<dd><?php echo tag_string('item', 'find'); ?></dd>
				</dl>
				<?php endif; ?>						
			</div>
			<div class="flex justify-end gap-2 absolute right-0 bottom-0">
				<a class="border border-gray-200 text-sm py-1.5 px-3 hover:text-primary" href="<?php echo html_escape(url('/')); ?>corrections/index/add/item_id/<?php echo $id; ?>">오류신고</a>
				<!-- a class="border border-gray-200 text-sm py-1.5 px-3 hover:text-primary" href="#">즐겨찾기</!-->
				<a class="border border-gray-200 text-sm py-1.5 px-3 hover:text-primary" href="<?php echo html_escape(url('/')); ?>items/show/<?php echo $id; ?>?output=csv">목록받기</a>
				<?php echo get_specific_plugin_hook_output('Cart', 'public_items_show', array('view' => $this, 'item' => $item)); //내 관심기록 출력 ?>
				<style>
					.cart{
						display:flex;
						align-items: center;
						gap:8px;
					}
				</style>
			</div>

		</div>
	</div>
</div><!--// end of <div class="container pt-14"> -->
<!-- ====== 아이템세트 Section End ========  -->	
<?php 
	} else {} 
?>





<?php if ($목록구분 == '정보사전-인물') { // 해당 아이템이 정보사전의 인물에 해당하는 경우에만 섹션 출력 ?>
<!-- ====== 정보사전-인물 Section Start ========  -->
<div class="container pt-14">
	<div class="flex mb-28">
		<div class="thumb-area flex-shrink-0 w-[20rem] mr-[5rem]">
			<!-- 썸네일 이미지가 있는 경우 출력 -->
			<?php if (metadata($item, 'has files')) {  ?>	          
			<?php echo files_for_item(array('linkToFile' => false, 'imageSize' => 'fullsize', 'imgAttributes' => array('class' => 'w-full acpect-1 object-cover rounded-full'))); ?>	
			<?php } else { ?>
			<img src="<?php echo img('icon/정보-인물.png'); ?>" class="w-full acpect-1 object-cover rounded-full">	
			<?php } ?>
		</div>
		<div class="info-area relative flex flex-col justify-center flex-grow">
			<?php if ($인물명!= null) { ?>	
			<h1 class="text-[1.875rem] font-bold mb-8"><?php echo strip_formatting($인물명); ?></h1>
			<?php } else { //인물명이 null이면 DC title 출력 ?>
			<h1 class="text-[1.875rem] font-bold mb-8"><?php echo strip_formatting($제목); ?></h1>
			<?php } ?>
			<div class="grid grid-cols-[minmax(240px,_auto)_minmax(240px,_auto)] gap-x-12 gap-y-4 mb-8">
				<?php if ($목록구분!= null) { ?>							
				<dl class="flex text-neutral-500">
					<dt class="w-[7.5rem] flex-shrink-0 font-bold">목록구분</dt>
					<dd><?php echo strip_formatting($목록구분); ?></dd>
				</dl>
				<?php } else {} ?>	
				<?php if ($관리번호!= null && $isLoggedIn) { //로그인 사용자만 열람 ?>							
				<dl class="flex text-neutral-500">
					<dt class="w-[7.5rem] flex-shrink-0 font-bold">관리번호</dt>
					<dd><?php echo strip_formatting($관리번호); ?></dd>
				</dl>
				<?php } else {} ?>	
				<?php if ($인물구분!= null) { ?>							
				<dl class="flex text-neutral-500">
					<dt class="w-[7.5rem] flex-shrink-0 font-bold">인물구분</dt>
					<dd><?php echo strip_formatting($인물구분); ?></dd>
				</dl>
				<?php } else {} ?>		
				<?php if ($국적!= null) { ?>							
				<dl class="flex text-neutral-500">
					<dt class="w-[7.5rem] flex-shrink-0 font-bold">국적</dt>
					<dd><?php echo strip_formatting($국적); ?></dd>
				</dl>
				<?php } else {} ?>							
				<?php if($userRole) : ?>							
				<?php if($인물성씨!= null && $userRole->role == 'super' || $userRole->role == 'admin') { //관리자 권한 이상만 열람 ?>		
				<dl class="flex text-neutral-500">
					<dt class="w-[7.5rem] flex-shrink-0 font-bold">이름성씨</dt>
					<dd><?php echo strip_formatting($인물성씨); ?></dd>
				</dl>				
				<dl class="flex text-neutral-500">
					<dt class="w-[7.5rem] flex-shrink-0 font-bold">이름</dt>
					<dd><?php echo strip_formatting($인물이름); ?></dd>
				</dl>
				<?php } else {} ?>	
				<?php endif; ?>					
				<?php if ($인물외국어명칭!= null) { ?>						
				<dl class="flex text-neutral-500">
					<dt class="w-[7.5rem] flex-shrink-0 font-bold">외국어명칭</dt>
					<dd><?php echo strip_formatting($인물외국어명칭); ?></dd>
				</dl>
				<?php } else {} ?>				
				<?php if ($인물비대표명칭!= null) { ?>							
				<dl class="flex text-neutral-500">
					<dt class="w-[7.5rem] flex-shrink-0 font-bold">비대표명칭</dt>
					<dd><?php echo strip_formatting($인물비대표명칭); ?></dd>
				</dl>
				<?php } else {} ?>
				<?php if ($출생일!= null) { ?>							
				<dl class="flex text-neutral-500">
					<dt class="w-[7.5rem] flex-shrink-0 font-bold">출생일</dt>
					<dd><?php echo strip_formatting($출생일); ?></dd>
				</dl>
				<?php } else {} ?>				
				<?php if ($사망일!= null) { ?>							
				<dl class="flex text-neutral-500">
					<dt class="w-[7.5rem] flex-shrink-0 font-bold">사망일</dt>
					<dd><?php echo strip_formatting($사망일); ?></dd>
				</dl>
				<?php } else {} ?>	
		
				<?php if ($정보출처!= null) { ?>							
				<dl class="flex text-neutral-500">
					<dt class="w-[7.5rem] flex-shrink-0 font-bold">정보출처</dt>
					<dd><?php echo strip_formatting($정보출처); ?></dd>
				</dl>
				<?php } else {} ?>					
				<?php if ($기술상태!= null && $isLoggedIn ) { //로그인 사용자만 열람 ?>
				<dl class="flex text-neutral-500">
					<dt class="w-[7.5rem] flex-shrink-0 font-bold">기술상태</dt> 
					<dd><?php echo strip_formatting($기술상태); ?></dd> 
				</dl>
				<?php } else {} ?>				
				<?php if (metadata($item, 'has tags')): ?>
				<dl class="flex text-neutral-500">
					<dt class="w-[7.5rem] flex-shrink-0 font-bold">태그</dt>
					<dd><?php echo tag_string('item', 'find'); ?></dd>
				</dl>
				<?php endif; ?>	
				<?php //if ($인물설명!= null) { ?>							
				<!--dl class="flex text-neutral-500 col-span-2">
					<dt class="w-[7.5rem] flex-shrink-0 font-bold">설명</dt>
					<dd><?php //echo strip_formatting($인물설명); ?></dd>		
				</--dl -->
				<?php //} else {} ?>						
				<?php if ($내용!= null || $인물상세!= null) { ?>							
				<dl class="flex text-neutral-500 col-span-2">
					<dt class="w-[7.5rem] flex-shrink-0 font-bold">설명</dt>
					<dd><?php echo strip_formatting($인물상세); ?><br><?php echo strip_formatting($내용); ?></dd>
				</dl>
				<?php } else {} ?>				

			</div>
			<div class="flex justify-end gap-2">
				<a class="border border-gray-200 text-sm py-1.5 px-3 hover:text-primary" href="<?php echo html_escape(url('/')); ?>corrections/index/add/item_id/<?php echo $id; ?>">오류신고</a>
				<!-- a class="border border-gray-200 text-sm py-1.5 px-3 hover:text-primary" href="#">즐겨찾기</!-->
				<a class="border border-gray-200 text-sm py-1.5 px-3 hover:text-primary" href="<?php echo html_escape(url('/')); ?>items/show/<?php echo $id; ?>?output=csv">목록받기</a>
				<?php echo get_specific_plugin_hook_output('Cart', 'public_items_show', array('view' => $this, 'item' => $item)); //내 관심기록 출력 ?>
				<style>
					.cart{
						display:flex;
						align-items: center;
						gap:8px;
					}
				</style>
			</div>

		</div>
	</div>

</div><!--// end of <div class="container pt-14"> -->
<!-- ====== 정보사전-인물 Section End ========  -->
<?php 
	} else {} 
?>






<?php if ($목록구분 == '정보사전-조직') { // 해당 아이템이 정보사전의 조직에 해당하는 경우에만 섹션 출력 ?>
<!-- ====== 정보사전-조직 Section Start ========  -->	
<div class="container pt-14">
	<div class="flex mb-28">
		<div class="thumb-area flex-shrink-0 w-[20rem] mr-[5rem]">
			<!-- 썸네일 이미지가 있는 경우 출력 -->
			<?php if (metadata($item, 'has files')) { ?>	          
			<?php echo files_for_item(array('linkToFile' => false, 'imageSize' => 'fullsize', 'imgAttributes' => array('class' => 'w-full acpect-1 object-cover'))); ?>	
			<?php } else { ?>
				<img src="<?php echo img('icon/정보-조직.png'); ?>" class="w-full acpect-1 object-cover">		
			<?php } ?>
		</div>
		<div class="info-area relative flex flex-col justify-center flex-grow">
			<?php if ($조직명칭!= null) { ?>	
			<h1 class="text-[1.875rem] font-bold mb-8"><?php echo strip_formatting($조직명칭); ?></h1>
			<?php } else { //조직명이 null이면 DC title 출력 ?>
			<h1 class="text-[1.875rem] font-bold mb-8"><?php echo strip_formatting($제목); ?></h1>
			<?php } ?>
			<div class="grid grid-cols-[minmax(240px,_auto)_minmax(240px,_auto)] gap-x-12 gap-y-4 mb-8">
				<?php if ($목록구분!= null) { ?>							
				<dl class="flex text-neutral-500">
					<dt class="w-[7.5rem] flex-shrink-0 font-bold">목록구분</dt>
					<dd><?php echo strip_formatting($목록구분); ?></dd>
				</dl>
				<?php } else {} ?>	
				<?php if ($관리번호!= null && $isLoggedIn) { //로그인 사용자만 열람 ?>							
				<dl class="flex text-neutral-500">
					<dt class="w-[7.5rem] flex-shrink-0 font-bold">관리번호</dt>
					<dd><?php echo strip_formatting($관리번호); ?></dd>
				</dl>
				<?php } else {} ?>				
				<?php if ($조직구분!= null) { ?>						
				<dl class="flex text-neutral-500">
					<dt class="w-[7.5rem] flex-shrink-0 font-bold">조직구분</dt>
					<dd><?php echo strip_formatting($조직구분); ?></dd>
				</dl>
				<?php } else {} ?>			
				<?php if ($조직유형!= null) { ?>						
				<dl class="flex text-neutral-500">
					<dt class="w-[7.5rem] flex-shrink-0 font-bold">조직유형</dt>
					<dd><?php echo strip_formatting($조직유형); ?></dd>
				</dl>
				<?php } else {} ?>	
				<?php if ($설립일!= null) { ?>						
				<dl class="flex text-neutral-500">
					<dt class="w-[7.5rem] flex-shrink-0 font-bold">설립일</dt>
					<dd><?php echo strip_formatting($설립일); ?></dd>
				</dl>
				<?php } else {} ?>		
				<?php if ($해산일!= null) { ?>						
				<dl class="flex text-neutral-500">
					<dt class="w-[7.5rem] flex-shrink-0 font-bold">해산일</dt>
					<dd><?php echo strip_formatting($해산일); ?></dd>
				</dl>
				<?php } else {} ?>					
				<?php if ($조직외국어명칭!= null) { ?>					
				<dl class="flex text-neutral-500">
					<dt class="w-[7.5rem] flex-shrink-0 font-bold">외국어명칭</dt>
					<dd><?php echo strip_formatting($조직외국어명칭); ?></dd>
				</dl>
				<?php } else {} ?>		
				<?php if ($조직비대표명칭!= null) { ?>								
				<dl class="flex text-neutral-500">
					<dt class="w-[7.5rem] flex-shrink-0 font-bold">비대표명칭</dt>
					<dd><?php echo strip_formatting($조직비대표명칭); ?></dd>
				</dl>
				<?php } else {} ?>	
				<?php if ($활동국가!= null) { ?>						
				<dl class="flex text-neutral-500">
					<dt class="w-[7.5rem] flex-shrink-0 font-bold">활동국가</dt>
					<dd><?php echo strip_formatting($활동국가); ?></dd>
				</dl>
				<?php } else {} ?>	
				<?php if ($정보출처!= null) { ?>						
				<dl class="flex text-neutral-500">
					<dt class="w-[7.5rem] flex-shrink-0 font-bold">정보출처</dt>
					<dd><?php echo strip_formatting($정보출처); ?></dd>
				</dl>
				<?php } else {} ?>													
				<?php if ($기술상태!= null && $isLoggedIn ) { //로그인 사용자만 열람 ?>
				<dl class="flex text-neutral-500">
					<dt class="w-[7.5rem] flex-shrink-0 font-bold">기술상태</dt> 
					<dd><?php echo strip_formatting($기술상태); ?></dd> 
				</dl>
				<?php } else {} ?>
				<?php if (metadata($item, 'has tags')): ?>
				<dl class="flex text-neutral-500">
					<dt class="w-[7.5rem] flex-shrink-0 font-bold">태그</dt>
					<dd><?php echo tag_string('item', 'find'); ?></dd>
				</dl>
				<?php endif; ?>		
				<?php //if ($조직설명!= null) { ?>						
				<!-- dl class="flex text-neutral-500 col-span-2">
					<dt class="w-[7.5rem] flex-shrink-0 font-bold">설명</dt>
					<dd><?php //echo strip_formatting($조직설명); ?></dd>
				</!-->
				<?php //} else {} ?>	
				<?php if ($내용!= null || $조직상세!= null) { ?>							
				<dl class="flex text-neutral-500 col-span-2">
					<dt class="w-[7.5rem] flex-shrink-0 font-bold">설명</dt>
					<dd><?php echo strip_formatting($조직상세); ?><br><?php echo strip_formatting($내용); ?></dd>	
				</dl>
				<?php } else {} ?>	


			</div>
			<div class="flex justify-end gap-2">
				<a class="border border-gray-200 text-sm py-1.5 px-3 hover:text-primary" href="<?php echo html_escape(url('/')); ?>corrections/index/add/item_id/<?php echo $id; ?>">오류신고</a>
				<!-- a class="border border-gray-200 text-sm py-1.5 px-3 hover:text-primary" href="#">즐겨찾기</!-->
				<a class="border border-gray-200 text-sm py-1.5 px-3 hover:text-primary" href="<?php echo html_escape(url('/')); ?>items/show/<?php echo $id; ?>?output=csv">목록받기</a>
				<?php echo get_specific_plugin_hook_output('Cart', 'public_items_show', array('view' => $this, 'item' => $item)); //내 관심기록 출력 ?>
				<style>
					.cart{
						display:flex;
						align-items: center;
						gap:8px;
					}
				</style>
			</div>

		</div>
	</div>
</div><!--// end of <div class="container pt-14"> -->
<!-- ====== 정보사전-조직 Section End ========  -->	
<?php 
	} else {} 
?>





<?php if ($목록구분 == '정보사전-연표') { // 해당 아이템이 정보사전의 연표에 해당하는 경우에만 섹션 출력 ?>
<!-- ====== 정보사전-연표 Section Start ========  -->
<div class="container pt-14">
	<div class="flex mb-28">
		<div class="thumb-area flex-shrink-0 w-[20rem] mr-[5rem]">
			<!-- 썸네일 이미지가 있는 경우 출력 -->
			<?php if (metadata($item, 'has files')) {  ?>	          
			<?php echo files_for_item(array('linkToFile' => false, 'imageSize' => 'fullsize', 'imgAttributes' => array('class' => 'w-full acpect-1 object-cover'))); ?>	
			<?php } else { ?>
				<img src="<?php echo img('icon/정보-연표.png'); ?>" class="w-full acpect-1 object-cover">	
			<?php } ?>
		</div>
		<div class="info-area relative flex flex-col justify-center flex-grow">
			<?php if ($연표명칭!= null) { ?>	
			<h1 class="text-[1.875rem] font-bold mb-8"><?php echo strip_formatting($연표명칭); ?></h1>
			<?php } else { //연표명이 null이면 DC title 출력 ?>
			<h1 class="text-[1.875rem] font-bold mb-8"><?php echo strip_formatting($제목); ?></h1>
			<?php } ?>
			<div class="inline-grid grid-cols-[minmax(240px,_auto)_minmax(240px,_auto)] gap-x-12 gap-y-4 mb-8">
				<?php if ($목록구분!= null) { ?>							
				<dl class="flex text-neutral-500">
					<dt class="w-[7.5rem] flex-shrink-0 font-bold">목록구분</dt>
					<dd><?php echo strip_formatting($목록구분); ?></dd>
				</dl>
				<?php } else {} ?>	
				<?php if ($관리번호!= null && $isLoggedIn) { //로그인 사용자만 열람 ?>							
				<dl class="flex text-neutral-500">
					<dt class="w-[7.5rem] flex-shrink-0 font-bold">관리번호</dt>
					<dd><?php echo strip_formatting($관리번호); ?></dd>
				</dl>
				<?php } else {} ?>					
				<?php if ($연표구분!= null) { ?>					
				<dl class="flex text-neutral-500">
					<dt class="w-[7.5rem] flex-shrink-0 font-bold">연표구분</dt>
					<dd><?php echo strip_formatting($연표구분); ?></dd>
				</dl>
				<?php } else {} ?>					
				<?php if ($연표연도!= null) { ?>						
				<dl class="flex text-neutral-500">
					<dt class="w-[7.5rem] flex-shrink-0 font-bold">연도</dt>
					<dd><?php echo strip_formatting($연표연도); ?></dd>
				</dl>
				<?php } else {} ?>						
				<?php if ($연표시작일자!= null) { ?>					
				<dl class="flex text-neutral-500">
					<dt class="w-[7.5rem] flex-shrink-0 font-bold">시작일자</dt>
					<dd><?php echo strip_formatting($연표시작일자); ?></dd>
				</dl>
				<?php } else {} ?>		
				<?php if ($연표종료일자!= null) { ?>					
				<dl class="flex text-neutral-500">
					<dt class="w-[7.5rem] flex-shrink-0 font-bold">종료일자</dt>
					<dd><?php echo strip_formatting($연표종료일자); ?></dd>
				</dl>
				<?php } else {} ?>		
				<?php if ($관할지역!= null) { ?>					
				<dl class="flex text-neutral-500">
					<dt class="w-[7.5rem] flex-shrink-0 font-bold">관할지역</dt>
					<dd><?php echo strip_formatting($관할지역); ?></dd>
				</dl>
				<?php } else {} ?>				
				<?php if ($관련활동!= null) { ?>						
				<dl class="flex text-neutral-500">
					<dt class="w-[7.5rem] flex-shrink-0 font-bold">관련활동</dt>
					<dd><?php echo strip_formatting($관련활동); ?></dd>
				</dl>
				<?php } else {} ?>						
				<?php if ($정보출처!= null) { ?>					
				<dl class="flex text-neutral-500">
					<dt class="w-[7.5rem] flex-shrink-0 font-bold">정보출처</dt>
					<dd><?php echo strip_formatting($정보출처); ?></dd>
				</dl>
				<?php } else {} ?>
				<?php if (metadata($item, 'has tags')): ?>
				<dl class="flex text-neutral-500">
					<dt class="w-[7.5rem] flex-shrink-0 font-bold">태그</dt>
					<dd><?php echo tag_string('item', 'find'); ?></dd>
				</dl>
				<?php endif; ?>		
				<?php if ($내용!= null) { ?>					
				<dl class="flex text-neutral-500 col-span-2">
					<dt class="w-[7.5rem] flex-shrink-0 font-bold">설명</dt>
					<dd><?php echo strip_formatting($내용); ?></dd>
				</dl>
				<?php } else {} ?>	

			</div>
			<div class="flex justify-end gap-2">
				<a class="border border-gray-200 text-sm py-1.5 px-3 hover:text-primary" href="<?php echo html_escape(url('/')); ?>corrections/index/add/item_id/<?php echo $id; ?>">오류신고</a>
				<!-- a class="border border-gray-200 text-sm py-1.5 px-3 hover:text-primary" href="#">즐겨찾기</!-->
				<a class="border border-gray-200 text-sm py-1.5 px-3 hover:text-primary" href="<?php echo html_escape(url('/')); ?>items/show/<?php echo $id; ?>?output=csv">목록받기</a>
				<?php echo get_specific_plugin_hook_output('Cart', 'public_items_show', array('view' => $this, 'item' => $item)); //내 관심기록 출력 ?>
				<style>
					.cart{
						display:flex;
						align-items: center;
						gap:8px;
					}
				</style>
			</div>

		</div>
	</div>
</div><!--// end of <div class="container pt-14"> -->
<!-- ====== 정보사전-연표 Section End ========  -->	
<?php 
	} else {} 
?>





<!-- 관계정보 -->
<div class="container pb-28">
	<div class="relation-info-area">

		<div class="w-full">
			<!-- 관계 그래프 및 관련 목록 영역 출력 -->
			<?php echo get_specific_plugin_hook_output('AvantRelationships', 'public_items_show', array('view' => $this, 'item' => $item)); ?>
			<?php //echo get_specific_plugin_hook_output('AvantRelationships', 'show_relationships_visualization', array('view' => $this, 'item' => $item)); ?>
		</div>

	</div>
	<style>
		#related-items-graph h2{
			font-size:24px;
			font-weight:bold;
			margin-bottom:32px;
		}
	</style>

</div>
<!-- //관계정보 -->







<?php 
	// If this item has a cover image, that image will appear in the sidebar, so pass it to
	// admin_items_show to indicate that the image should be excluded from the list of related items.
	//$excludeItem = $coverImageEnabledOnShowPage ? ItemPreview::getCoverImageItem($item) : null;
?>
<?php //echo get_specific_plugin_hook_output('AvantCustom', 'admin_items_show', array('view' => $this, 'item' => $item, 'exclude' => $excludeItem)); ?>
<!-- 관계 그래프 및 관련 목록 영역 출력 -->
<?php //echo get_specific_plugin_hook_output('AvantRelationships', 'public_items_show', array('view' => $this, 'item' => $item, 'exclude' => $excludeItem)); ?>
<?php //echo get_specific_plugin_hook_output('AvantRelationships', 'show_relationships_visualization', array('view' => $this, 'item' => $item)); ?>
<!-- 지도 영역 출력 -->
<?php //echo get_specific_plugin_hook_output('Geolocation', 'public_items_show', array('view' => $this, 'item' => $item)); ?>
<!-- pdf 반출 영역 출력(사용안함) -->
<?php echo get_specific_plugin_hook_output('AvantReport', 'public_items_show', array('view' => $this, 'item' => $item)); ?>



<?php
	if ($zoomingEnabled)
	{
		echo $this->partial('avantzoom-script.php', array('viewerScript' => $viewerScript));
	}
?>

