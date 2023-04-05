<?php
	$title = metadata($collection, array('Dublin Core', 'Title'), array('snippet' => 50)); //해당 컬렉션 제목
	//$description = metadata($collection, array('Dublin Core', 'Description'), array('snippet' => 100));  //해당 컬렉션 설명글. 필요한 경우에만 사용
	$collectionlink = '컬렉션 보기';
?>

<li class="relative mr-4 lg:mr-0 overflow-hidden">
	<?php if ($collectionImage = record_image($collection, 'square_thumbnail', array('class' => 'w-full lg:aspect-none aspect-[624/296] object-cover', 'style' => '', 'alt' => ''))): ?>
		<?php echo link_to($this->collection, 'show', $collectionImage, array('class' => '')); //썸네일 이미지 출력 ?> 
	<?php endif; ?>	
	<dl class="absolute top-0 left-0 lg:py-10 py-8 lg:px-8 px-6">
		<dt class="lg:text-4xl text-2xl font-bold lg:mb-8 mb-6"><?php echo link_to($this->collection, 'show', strip_formatting($title), array('class' => '', 'style' => '', 'alt' => '')); // 해당 컬렉션 제목 출력 ?></dt>
		<dd><?php echo link_to($this->collection, 'show', $collectionlink, array('class' => 'hover:underline')); ?> </dd>
	</dl>
</li>



