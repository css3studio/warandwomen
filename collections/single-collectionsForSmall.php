<?php
	$title = metadata($collection, array('Dublin Core', 'Title'), array('snippet' => 50)); //해당 컬렉션 제목
	$description = metadata($collection, array('Dublin Core', 'Description'), array('snippet' => 100));  //해당 컬렉션 설명글. 필요한 경우에만 사용
?>

<?php //컬렉션의 썸네일이 있으면 썸네일과 제목 출력  ?>
<?php if ($collectionImage = record_image($collection, 'square_thumbnail', array('class' => '', 'style' => '', 'alt' => ''))): ?>	
	
	<?php echo link_to($this->collection, 'show', $collectionImage, array('class' => 'image')); //썸네일 이미지 출력 ?> 														

	<?php echo link_to($this->collection, 'show', strip_formatting($title), array('class' => '', 'style' => 'font-size: 24px; font-weight: 400; text-align: center;', 'alt' => '')); // 해당 컬렉션 제목 출력 ?>		

<?php endif; ?>		


