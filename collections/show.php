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
    $관련인물 = metadata($collection, array('CustomCollectionMetadata', '관련인물'), array('delimiter' => '; '));		
    $관련조직 = metadata($collection, array('CustomCollectionMetadata', '관련조직'), array('delimiter' => '; '));		
    $관련사건 = metadata($collection, array('CustomCollectionMetadata', '관련사건'), array('delimiter' => '; '));		
    $관련연표 = metadata($collection, array('CustomCollectionMetadata', '관련연표'), array('delimiter' => '; '));	
    $기증자 = metadata($collection, array('CustomCollectionMetadata', '기증자'), array('delimiter' => '; '));		
    $외부자료 = metadata($collection, array('CustomCollectionMetadata', '외부자료'), array('delimiter' => '; '));			
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

          <h2>
            <?php //echo metadata('collection', 'rich_title', array('no_escape' => true)); ?>
            <?php if ($컬렉션이름!= null) { ?><?php echo strip_formatting($컬렉션이름); ?><?php } else { ?><?php } ?>
          </h2>
          <p>
            <?php if ($개요!= null) { ?><?php echo $개요; ?><?php } else { ?><?php } ?>
          </p>


			<?php if ($대표기록!= null) { ?><?php echo $대표기록; ?><?php } else { ?><?php } ?>


			<h2>
			 기록구성
			</h2>
			<p class="text-body-color text-base font-medium leading-relaxed">
			<?php if ($기록구성!= null) { ?>
			<?php echo strip_formatting($기록구성); ?><?php } else { ?><?php } ?>
			</p>

			<h2>
			 컬렉션 히스토리
			</h2>
			<p>
			<?php if ($아카이브히스토리!= null) { ?>
			<?php echo strip_formatting($아카이브히스토리); ?><?php } else { ?><?php } ?>
			</p>

			<?php if ($검색방법!= null) { ?>                
			 
			  <h2>
				검색방법
			  </h2>
			<p>          
			  <?php echo $검색방법; ?>
			  </p>
			</div>
			<?php } else { ?><?php } ?>



<?php fire_plugin_hook('public_collections_show', array('view' => $this, 'collection' => $collection)); ?>

<?php echo foot(); ?>
