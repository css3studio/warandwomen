<?php
$collectionTitle = metadata('collection', 'display_title');
$totalItems = metadata('collection', 'total_items');
?>
<?php echo head(array('title' => $collectionTitle, 'bodyclass' => 'collections show')); ?>

<?php 
    // 컬렉션 상세정보 메타
    $컬렉션이름 = metadata($collection, array('CustomCollectionMetadata', '컬렉션이름'), array('delimiter' => '; '));		
    $개요 = metadata($collection, array('CustomCollectionMetadata', '개요'), array('delimiter' => '; '));		
    $아카이브히스토리 = metadata($collection, array('CustomCollectionMetadata', '아카이브히스토리'), array('delimiter' => '; '));	
    $기록구성 = metadata($collection, array('CustomCollectionMetadata', '기록구성'), array('delimiter' => '; '));		
    $대표기록 = metadata($collection, array('CustomCollectionMetadata', '대표기록'), array('delimiter' => '; '));		
    $검색방법 = metadata($collection, array('CustomCollectionMetadata', '검색방법'), array('delimiter' => '; '));		
    $관련콘텐츠 = metadata($collection, array('CustomCollectionMetadata', '관련콘텐츠'), array('delimiter' => '; '));
    $기타1 = metadata($collection, array('CustomCollectionMetadata', '기타1'), array('delimiter' => '; '));
    $기타2 = metadata($collection, array('CustomCollectionMetadata', '기타2'), array('delimiter' => '; '));
    $기타3 = metadata($collection, array('CustomCollectionMetadata', '기타3'), array('delimiter' => '; '));
    $기타4 = metadata($collection, array('CustomCollectionMetadata', '기타4'), array('delimiter' => '; '));
    $기타5 = metadata($collection, array('CustomCollectionMetadata', '기타5'), array('delimiter' => '; '));
    $기타6 = metadata($collection, array('CustomCollectionMetadata', '기타6'), array('delimiter' => '; '));
    $기타7 = metadata($collection, array('CustomCollectionMetadata', '기타7'), array('delimiter' => '; '));
    $기타8 = metadata($collection, array('CustomCollectionMetadata', '기타8'), array('delimiter' => '; '));
    $기타9 = metadata($collection, array('CustomCollectionMetadata', '기타9'), array('delimiter' => '; '));
    $기타10 = metadata($collection, array('CustomCollectionMetadata', '기타10'), array('delimiter' => '; '));
    $기타11 = metadata($collection, array('CustomCollectionMetadata', '기타11'), array('delimiter' => '; '));
    $기타12 = metadata($collection, array('CustomCollectionMetadata', '기타12'), array('delimiter' => '; '));
    $기타13 = metadata($collection, array('CustomCollectionMetadata', '기타13'), array('delimiter' => '; '));
    $기타14 = metadata($collection, array('CustomCollectionMetadata', '기타14'), array('delimiter' => '; '));
    $기타15 = metadata($collection, array('CustomCollectionMetadata', '기타15'), array('delimiter' => '; '));		
?>

<div class="breadcrumb container bg-neutral-50 text-xs px-4 py-1 mt-3">
    <div class="flex gap-[10px] text-neutral-400">
        <a class="hover:underline" href="<?php echo html_escape(url('/')); ?>">홈</a>
        <i class="xi-angle-right text-neutral-200"></i>
        <a class="hover:underline" href="<?php echo html_escape(url('collections/browse')); ?>">컬렉션</a>
        <i class="xi-angle-right text-neutral-200"></i>
        <span class="text-primary"><?php echo $collectionTitle; ?></span>
    </div>
</div>




<?php if ($기타1!= null) { //아시아연대회의 컬렉션의 경우에만 이 방식 사용. 다른 컬렉션은 아래 컬렉션 일반 섹션 참고 ?>
<!--컬렉션 1 섹션 -->
<div class="container pt-8 pb-28">

	<!-- 네비게이터 -->
	<div class="menu-slider01 mb-14">
		<ul>
			<li class="current">
				<a href="/collections/show/1"><b>개요</b></a>
			</li>
			<li>
				<a href="/collections/conf1"><b>제1차</b><span>1992</span></a>
			</li>
			<li>
				<a href="/collections/conf2"><b>제2차</b><span>1992</span></a>
			</li>
			<li>
				<a href="/collections/conf3"><b>제3차</b><span>1992</span></a>
			</li>
			<li>
				<a href="/collections/conf4"><b>제4차</b><span>1992</span></a>
			</li>
			<li>
				<a href="/collections/conf5"><b>제5차</b><span>1992</span></a>
			</li>
			<li>
				<a href="/collections/conf6"><b>제6차</b><span>1992</span></a>
			</li>
			<li>
				<a href="/collections/conf7"><b>제7차</b><span>1992</span></a>
			</li>
			<li>
				<a href="/collections/conf8"><b>제8차</b><span>1992</span></a>
			</li>
			<li>
				<a href="/collections/conf9"><b>제9차</b><span>1992</span></a>
			</li>
			<li>
				<a href="/collections/conf10"><b>제10차</b><span>1992</span></a>
			</li>
			<li>
				<a href="/collections/conf11"><b>제11차</b><span>1992</span></a>
			</li>
			<li>
				<a href="/collections/conf12"><b>제12차</b><span>1992</span></a>
			</li>
			<li>
				<a href="/collections/conf13"><b>제13차</b><span>1992</span></a>
			</li>
		</ul>
	</div>
	<!-- //네비게이터 -->
	<div class="collection-body">
		<div class="max-w-[600px] mx-auto">
			<div class="mb-20">	
				<h2 class="text-3xl font-bold mb-8">아시아연대회의(1992-2018)</h2>	
				<div class="w-full mb-20">
					<p>아시아의 피해국들은 일본군 '위안부' 문제 관련 사안을 공동으로 고민하고 해결하기 위해 1992년 아시아연대회의를 설립했다. 1992년 제1차 회의를 시작으로 2018년 제15차 회의까지 진행되고 있다. 아시아 여성들이 일본군 '위안부' 문제 해결을 위해 연대해왔던 활동들(일본군 '위안부'라는 용어 사용 문제, 강제성 문제, 법적 배상 문제, 책임자 처벌 요구, 역사왜곡 대응, 군국주의 대응, 여성폭력 이슈로의 확대와 연대, 인권운동으로서의 자리매김, 전시(戰時) 성폭력 문제에 대한 국제적 관심 조성, 2000년 법정 등)은 국제인권운동과 여성운동에 중대한 영향을 미치면서 전개되었다.</p>
				</div>
			</div>
			<div class="mb-20">	
				<h2 class="text-xl font-bold mb-8">컬렉션의 구성</h2>		
				<p>아시아연대회의 컬렉션은 회의 준비과정, 주요 산출물(언어별 자료집 등), 회의 진행과정, 사후 평가 등을 담고 있는 일련의 기록으로 구성되어 있다. 기록매체는 문서류, 도서간행물류, 사진그림류, 영상음성류, 박물류 등 모든 유형의 기록을 포괄하고 있다. 아시아연대회의 컬렉션은 각 차수별로 세부 컬렉션(제1차~제15차)을 구성하여, 각 차수별 회의의 개괄설명, 기록의 구성 및 대표기록, 관련 콘텐츠 등을 제공하고 있다.</p>
			</div>
		</div>
		<!-- 시각화 자료 -->
		<div class="mb-20">
			<iframe width="100%" height="700" src="https://uploads.knightlab.com/storymapjs/a524c60a9a758915223103f901ec70c1/haessalbaeumteo/index.html" frameborder="0"></iframe>
		</div>    
		<!-- //시각화 자료 -->

		<div class="mb-20">	
			<h2 class="text-3xl font-bold mb-8">아시아연대회의 참가국별 참가횟수</h2>		
			<div class="">
				<iframe width="300" height="515" style="width: 0; min-width: 100% !important; border: none;" title="[회차별 참가국-참가회수범례]" aria-label="Map" id="datawrapper-chart-qYAC6" src="https://datawrapper.dwcdn.net/qYAC6/1/" scrolling="no" frameborder="0" data-external="1"></iframe>
				<script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"]){var e=document.querySelectorAll("iframe");for(var t in a.data["datawrapper-height"])for(var r=0;r<e.length;r++)if(e[r].contentWindow===a.source){var i=a.data["datawrapper-height"][t]+"px";e[r].style.height=i}}}))}();</script>
			</div>	
		</div>

		<div>
			<h2 class="text-3xl font-bold mb-8">아시아연대회의 차수별 참가국 현황</h2>		
			<div class="w-full aspect-[1280/424] mb-20">
				<iframe width="300" height="1061" style="width: 0; min-width: 100% !important; border: none;" title="정의연-회차별참여국가" aria-label="Table" id="datawrapper-chart-VyvSS" src="https://datawrapper.dwcdn.net/VyvSS/1/" scrolling="no" frameborder="0" data-external="1"></iframe>
				<script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(a){if(void 0!==a.data["datawrapper-height"]){var e=document.querySelectorAll("iframe");for(var t in a.data["datawrapper-height"])for(var r=0;r<e.length;r++)if(e[r].contentWindow===a.source){var i=a.data["datawrapper-height"][t]+"px";e[r].style.height=i}}}))}();
				</script>
			</div>
		</div>
	</div>

</div>
<!--//컬렉션 1 섹션-->

<?php } else { ?>

<?php //두 번째 컬렉션부터 이 방식으로 출력 ?>
<!-- 컬렉션 일반 섹션 -->
<div class="container pt-8 pb-28">
	<!-- 1행 -->
	<div class="mb-20">	
		<h2 class="text-3xl font-bold mb-8"><?php if ($컬렉션이름!= null) { ?><?php echo strip_formatting($컬렉션이름); ?><?php } else { ?><?php } ?></h2>	
		<?php if ($개요!= null) { ?>
		<div class="w-full aspect-[1280/424] mb-20">
			<p><?php echo $개요; ?></p>
		</div>
		<?php } else { ?><?php } ?>
	</div>

	<!-- 2행 -->
	<?php if ($기록구성!= null) { ?>
	<div class="mb-20">	
		<h2 class="text-3xl font-bold mb-8">기록구성</h2>		
		<div class="w-full aspect-[1280/424] mb-20">
			<p><?php echo strip_formatting($기록구성); ?></p>
		</div>
	</div>
	<?php } else { ?><?php } ?>

	<!-- 3행 -->
	<?php if ($아카이브히스토리!= null) { ?>
	<div class="mb-20">	
		<h2 class="text-3xl font-bold mb-8">컬렉션 히스토리</h2>		
		<div class="w-full aspect-[1280/424] mb-20">
			<p><?php echo strip_formatting($아카이브히스토리); ?></p>
		</div>
	</div>
	<?php } else { ?><?php } ?>

	<!-- 4행 -->
	<?php if ($검색방법!= null) { ?>
	<div class="mb-20">	
		<h2 class="text-3xl font-bold mb-8">검색방법</h2>		
		<div class="w-full aspect-[1280/424] mb-20">
			<p><?php echo $검색방법; ?></p>
		</div>
	</div>
	<?php } else { ?><?php } ?>

	<!-- 5행 -->
	<div class="mb-20">
		<h2 class="text-3xl font-bold mb-8">대표기록</h2>
		<div class="slider-collection01">
			<ul>
				<li>
					<a href="#">
						<img src="https://picsum.photos/400/700" alt="">
					</a>
				</li>
				<li>
					<a href="#">
						<img src="https://picsum.photos/400/700" alt="">
					</a>
				</li>
				<li>
					<a href="#">
						<img src="https://picsum.photos/400/700" alt="">
					</a>
				</li>
				<li>
					<a href="#">
						<img src="https://picsum.photos/400/700" alt="">
					</a>
				</li>
				<li>
					<a href="#">
						<img src="https://picsum.photos/400/700" alt="">
					</a>
				</li>
				<li>
					<a href="#">
						<img src="https://picsum.photos/400/700" alt="">
					</a>
				</li>
			</ul>
		</div>
	</div>
	<!-- //대표기록 -->

</div>
<!--//컬렉션 섹션-->

<?php } ?>



<?php fire_plugin_hook('public_collections_show', array('view' => $this, 'collection' => $collection)); ?>

<?php echo foot(); ?>
